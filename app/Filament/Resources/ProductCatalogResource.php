<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Vendor;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProductCatalog;
use App\Models\CategoryProduct;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductCatalogResource\Pages;
use App\Filament\Resources\ProductCatalogResource\RelationManagers;

class ProductCatalogResource extends Resource
{
    protected static ?string $model = ProductCatalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canViewAny() :bool{
        $user=Auth::user();

        if($user->role == 'ADMIN'){
            return true;
        }

        if($user->role == 'VENDOR' && !is_null($user->vendor_id) && $user->vendor->is_approved == 1){
            return true;
        }

        return false;
    }

    public function beforeCreate(array $data): array
    {
        $user = Auth::user();
        if ($user->role === 'VENDOR') {
            $data['vendor_id'] = $user->vendor_id; 
        }

        return $data;
    }

    public static function form(Form $form): Form
    {
        $user=Auth::user();
        $isVendor=$user->role == 'VENDOR' ? true :false;

        return $form
            ->schema([
                Card::make()->schema([
                    Grid::make(2)->schema([
                        TextInput::make('name')
                            ->label('Nama Produk')
                            ->placeholder('Nama Produk')
                            ->required()
                            ->maxLength(255),
                
                        TextInput::make('price')
                            ->label('Harga')
                            ->placeholder('00000')
                            ->numeric()
                            ->minValue(0)
                            ->inputMode('numeric')
                            ->required()
                    ]),

                    Grid::make(2)->schema([
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->placeholder('Deskripsi')
                            ->rows(5)
                            ->required(),

                        Select::make('category_id')
                            ->label('Category')
                            ->options(CategoryProduct::all()->pluck('category','id')->toArray())
                            ->required(),                        
                    ]),
                
                    Grid::make(2)->schema([
                        Select::make('vendor_id')
                            ->label('Vendor')
                            ->options(Vendor::all()->pluck('name','id'))
                            ->hidden($isVendor)
                            ->required(!$isVendor),   
                  
                        FileUpload::make('image')
                            ->label('Image Product')
                            ->directory('products')
                            ->visibility('public')
                            ->required(),              
                    ]),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
          ->query(static::getFilteredQuery()) 
            ->columns([
                 TextColumn::make('name')->sortable()->searchable(),
                 TextColumn::make('description')->sortable()->searchable(),
                 TextColumn::make('price')->sortable()->searchable(),
                 TextColumn::make('vendor.name')->sortable()->searchable(),
                 TextColumn::make('category.category')->sortable()->searchable(),
                 ImageColumn::make('image')->label('Product Image')
                                                                ->disk('public') 
                                                                ->width(80)
                                                                ->height(80),
                TextColumn::make('actions')->label(label: 'Aksi')
                                                                ->extraAttributes([
                                                                    'class' => 'text-center'
                                                                ])->alignCenter()
                                                                  ->sortable(false)
            ])
            ->filters([
                SelectFilter::make('category_id')
                                            ->label('Kategori Produk')
                                            ->options(CategoryProduct::all()->pluck('category','id'))       
            ])
            ->actions([
                EditAction::make(),

                DeleteAction::make()
                ->before(function ($record) {
                    
                }),
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
            return ProductCatalog::query();
        }

        if($user->role == 'VENDOR'){
            return ProductCatalog::where('vendor_id', $user->vendor_id);
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
            'index' => Pages\ListProductCatalogs::route('/'),
            'create' => Pages\CreateProductCatalog::route('/create'),
            'edit' => Pages\EditProductCatalog::route('/{record}/edit'),
        ];
    }
}
