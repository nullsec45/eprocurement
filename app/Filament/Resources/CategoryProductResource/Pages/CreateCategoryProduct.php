<?php

namespace App\Filament\Resources\CategoryProductResource\Pages;

use App\Filament\Resources\CategoryProductResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCategoryProduct extends CreateRecord
{
    protected static string $resource = CategoryProductResource::class;

     protected function afterCreate(){
        Notification::make()
                     ->title('Kategori Produk ditambahkan')
                     ->success()
                     ->body('Kategori Produk berhasil ditambahkan')
                     ->send();
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
