<?php

namespace App\Filament\Customer\Resources\MyPackagesResource\Pages;

use App\Filament\Customer\Resources\MyPackagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMyPackages extends ListRecords
{
    protected static string $resource = MyPackagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\CreateAction::make(),
        ];
    }
}
