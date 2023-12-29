<?php

namespace App\Filament\Resources\MainShippingTypeStateResource\Pages;

use App\Filament\Resources\MainShippingTypeStateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMainShippingTypeStates extends ListRecords
{
    protected static string $resource = MainShippingTypeStateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
