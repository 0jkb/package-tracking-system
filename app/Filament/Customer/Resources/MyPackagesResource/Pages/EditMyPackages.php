<?php

namespace App\Filament\Customer\Resources\MyPackagesResource\Pages;

use App\Filament\Customer\Resources\MyPackagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyPackages extends EditRecord
{
    protected static string $resource = MyPackagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
