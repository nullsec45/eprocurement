<?php

namespace App\Filament\Resources\VendorResource\Pages;

use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
use App\Filament\Resources\VendorResource;
use Filament\Resources\Pages\CreateRecord;


class CreateVendor extends CreateRecord
{
    protected static string $resource = VendorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array{
        $data['is_approved']=-1;
        return $data;
        
    }
    
    // protected function afterCreate(Vendor $record){
    //     Notification::make()
    //                  ->title('Vendor ditambahkan')
    //                  ->success()
    //                  ->body('Vendor berhasil ditambahkan')
    //                  ->send();

    //     $user=Auth::user();

    //     if($user->role == 'VENDOR' && is_null($user->vendor_id)){
    //         $user->update(['vendor_id' => $record->id]);
    //     }
    // }

    
    protected function handleRecordCreation(array $data): Vendor
    {
        $vendor = static::getModel()::create($data);

        Notification::make()
            ->title('Vendor Ditambahkan')
            ->success()
            ->body('Vendor berhasil ditambahkan')
            ->send();

        $user = Auth::user();
        if ($user->role == 'VENDOR' && is_null($user->vendor_id)) {

            $user->update(['vendor_id' => $vendor->id]);
        }

        return $vendor;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
