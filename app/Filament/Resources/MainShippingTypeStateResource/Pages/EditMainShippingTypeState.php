<?php

namespace App\Filament\Resources\MainShippingTypeStateResource\Pages;

use App\Filament\Resources\MainShippingTypeStateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainShippingTypeState extends EditRecord
{
    protected static string $resource = MainShippingTypeStateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
