<?php

namespace App\Filament\Resources\ProductCatalogResource\Pages;

use App\Filament\Resources\ProductCatalogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductCatalogs extends ListRecords
{
    protected static string $resource = ProductCatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
