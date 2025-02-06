<?php

namespace App\Filament\Resources\VendorResource\Pages;

use Filament\Notifications\Notification;
use App\Filament\Resources\VendorResource;
use Filament\Resources\Pages\CreateRecord;


class CreateVendor extends CreateRecord
{
    protected static string $resource = VendorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array{
        $data['is_approved']=false;
        return $data;
        
    }
    
    protected function afterCreate(){
        Notification::make()
                     ->title('Vendor ditambahkan')
                     ->success()
                     ->body('Vendor berhasil ditambahkan')
                     ->send();
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
