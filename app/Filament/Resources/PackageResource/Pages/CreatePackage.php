<?php

namespace App\Filament\Resources\PackageResource\Pages;

use App\Filament\Resources\PackageResource;
use App\Models\PackageType;
use App\Models\ShippingType;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePackage extends CreateRecord
{
    protected static string $resource = PackageResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $defaultPrice = 1;
        $packagePrice = $defaultPrice;
        $shippingPrice = $defaultPrice;
        $size = $data['size'] ?? $defaultPrice;

        if (isset($data['package_type_id'])) {
            $package = PackageType::find($data['package_type_id']);
            $packagePrice = $package ? $package->price : $defaultPrice;
        }

        if (isset($data['shipping_type_id'])) {
            $shipping = ShippingType::find($data['shipping_type_id']);
            $shippingPrice = $shipping ? $shipping->price : $defaultPrice;
        }

        $total = $packagePrice * $shippingPrice * $size;

        $data['price'] = $total;

        return $data;
    }

}
