<?php

namespace App\Filament\Resources\ProductCatalogResource\Pages;

use App\Filament\Resources\ProductCatalogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateProductCatalog extends CreateRecord
{
    protected static string $resource = ProductCatalogResource::class;

    protected function afterCreate(){
        Notification::make()
                     ->title('Product ditambahkan')
                     ->success()
                     ->body('Product berhasil ditambahkan')
                     ->send();
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
