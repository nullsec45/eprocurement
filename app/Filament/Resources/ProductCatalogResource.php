<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Vendor;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProductCatalog;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductCatalogResource\Pages;
use App\Filament\Resources\ProductCatalogResource\RelationManagers;

class ProductCatalogResource extends Resource
{
    protected static ?string $model = ProductCatalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                    ->inputMode('decimal')
                    ->required()
                    ->maxLength(255),
                
                Textarea::make('description')
                      ->label('Deskripsi')
                      ->placeholder('Deskripsi')
                      ->rows(5)
                      ->required(),

                Select::make('vendor_id')
                        ->label('Vendor')
                        ->options(Vendor::all()->pluck('name','id'))
                        ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                 Tables\Columns\TextColumn::make('description')->sortable()->searchable(),
                 Tables\Columns\TextColumn::make('price')->sortable()->searchable(),
                 Tables\Columns\TextColumn::make('vendor.name')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
