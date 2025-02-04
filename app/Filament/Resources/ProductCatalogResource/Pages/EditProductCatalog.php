<?php

namespace App\Filament\Resources\ProductCatalogResource\Pages;

use App\Filament\Resources\ProductCatalogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductCatalog extends EditRecord
{
    protected static string $resource = ProductCatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
