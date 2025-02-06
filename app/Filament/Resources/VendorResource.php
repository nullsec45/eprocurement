<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Tables;
use App\Models\Vendor;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Radio;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\DeleteAction;
use App\Filament\Resources\VendorResource\Pages;

class VendorResource extends Resource
{
    protected static ?string $model = Vendor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Nama Vendor')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('email')
                                ->label('Alamat Email')
                                ->email()
                                ->required()
                                ->unique(ignoreRecord: true),
                    ]),

                    Grid::make(2)->schema([
                        TextInput::make('phone')
                            ->label('Nomor Telepon')
                            ->tel()
                            ->required(),

                        Radio::make('is_approved')
                            ->label('Status Persetujuan')
                            ->boolean()
                            ->inline()
                            ->inlineLabel(false)
                            ->options([
                                1 => 'Disetujui',
                                0 => 'Ditolak',
                            ])->hidden(fn () => Auth::user()->role !== 'ADMIN')
                    ])


                        
                ]),
                
            ]);
    }

    public function afterCreate(Vendor $record){
        $user=Auth::user();

        if($user->role == 'VENDOR' && is_null($user->vendor_id)){
            $user->update(['vendor_id' => $record->id]);
        }
    }
    public static function table(Table $table): Table
    {
        return $table
            ->query(static::getFilteredQuery()) 
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('phone')->sortable(),
                Tables\Columns\TextColumn::make('is_approved')
                ->label('Status Persetujuan')
                ->formatStateUsing(fn ($state) => $state ? 'Disetujui' : 'Ditolak')
                ->badge()
                ->color(fn ($state) => $state ? 'success' : 'danger'),
                Tables\Columns\TextColumn::make('actions')->label(label: 'Aksi')
                                                                ->extraAttributes([
                                                                    'class' => 'text-center'
                                                                ])->alignCenter()
                                                                ->sortable(false)

                                                                

            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_approved')
                                            ->label('Status Persetujuan')
                                            ->options([
                                                    1 => 'Disetujui',
                                                    0 => 'Ditolak'
                                                ]
                                            )       
            ])                              
            ->actions([
                EditAction::make(),


                DeleteAction::make()
                ->before(function ($record) {
                    User::where('vendor_id', $record->id)->update(['vendor_id' => null]);
                }),

                Action::make('Setujui')
                          ->icon('heroicon-o-check')
                          ->action(function (Vendor $record) {
                          $record->update(['is_approved' => true]);
                          Notification::make()
                                ->title('Vendor Disetujui')
                                ->success()
                                ->send();

                })->hidden(fn () => Auth::user()->role !== 'ADMIN')
                    ->requiresConfirmation()
                    ->color('success'),
                
                Action::make('Tolak')
                   ->icon('heroicon-o-x-mark')
                    ->action(function (Vendor $record) {
                        $record->update(['is_approved' => false]);
                        Notification::make()
                            ->title('Vendor Ditolak')
                            ->success()
                            ->send();
                    })->hidden(fn () => Auth::user()->role !== 'ADMIN')
                      ->requiresConfirmation()
                      ->color('danger'),
                
                
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    protected static function getFilteredQUery(){
        $user=Auth::user();

        if($user->role == 'ADMIN'){
            return Vendor::query();
        }

        if($user->role == 'VENDOR'){
            return Vendor::where('id', $user->vendor_id);
        }
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVendors::route('/'),
            'create' => Pages\CreateVendor::route('/create'),
            'edit' => Pages\EditVendor::route('/{record}/edit'),
        ];
    }

   public static function canCreate(): bool
   {
      $user=Auth::user();

      if(is_null($user->vendor_id)){
        return true;
      }

      return false;
   }
}
