<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\PackageResource;
use App\Models\Package;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {

        return $table
            ->query(Package::query())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Order Date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tracker_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('shippingTypeState.status_name')
                    ->badge(),
//                Tables\Columns\TextColumn::make('currency')
//                    ->getStateUsing(fn ($record): ?string => Currency::find($record->currency)?->name ?? null)
//                    ->searchable()
//                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Shipping cost')
                    ->searchable()
                    ->sortable(),

            ])
            ->actions([
                Tables\Actions\Action::make('open')
                    ->url(fn (Package $record): string => PackageResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
