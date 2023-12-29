<?php

namespace App\Filament\Resources\MainShippingTypeStateResource\Pages;

use App\Filament\Resources\MainShippingTypeStateResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMainShippingTypeState extends ViewRecord
{
    protected static string $resource = MainShippingTypeStateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
