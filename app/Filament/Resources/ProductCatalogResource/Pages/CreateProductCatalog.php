<?php

namespace App\Filament\Resources\ProductCatalogResource\Pages;

use App\Filament\Resources\ProductCatalogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductCatalog extends CreateRecord
{
    protected static string $resource = ProductCatalogResource::class;
}
