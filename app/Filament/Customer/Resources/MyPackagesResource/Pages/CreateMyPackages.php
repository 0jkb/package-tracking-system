<?php

namespace App\Filament\Customer\Resources\MyPackagesResource\Pages;

use App\Filament\Customer\Resources\MyPackagesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMyPackages extends CreateRecord
{
    protected static string $resource = MyPackagesResource::class;
}
