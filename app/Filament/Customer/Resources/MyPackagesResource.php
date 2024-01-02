<?php

namespace App\Filament\Customer\Resources;

use App\Filament\Customer\Resources\MyPackagesResource\Pages;
use App\Filament\Customer\Resources\MyPackagesResource\RelationManagers;
use App\Models\MyPackages;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\View;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MyPackagesResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';


    protected static ?string $navigationLabel = "My Packages";

//    public static function form(Form $form): Form
//    {
//        return $form
//            ->schema([
//                //
//            ]);
//    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('tracker_number'),
                TextEntry::make('customer.name'),
                TextEntry::make('city'),
                TextEntry::make('size'),
                TextEntry::make('price')
                    ->prefix('ORM : '),
                TextEntry::make('ctn'),
                TextEntry::make('weight'),
                TextEntry::make('notes'),
                Fieldset::make('package tracking')->schema([
                    View::make('infolists.components.package-status')
                        ->columnSpanFull()
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(
                Package::with(['packageType', 'shippingType','shippingTypeState'])
                ->whereHas('customer', function ($query) {
                    $query->where('phone', auth()->user()->phone);
                })
            )
            ->filters([
                Filter::make('is_collected')
                    ->label('not collected')
                    ->query(fn (Builder $query): Builder => $query->where('is_collected', false)),
            ])
            ->columns([
                TextColumn::make('tracker_number')
                    ->searchable(),
                TextColumn::make('shippingType.name')
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                TextColumn::make('packageType.name')
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                TextColumn::make('shippingTypeState.status_name')
                    ->searchable()
                    ->badge()
                    ->numeric()
                    ->sortable(),
                TextColumn::make('size')
                    ->searchable(),
                TextColumn::make('price')
                    ->money()
                    ->sortable(),
                TextColumn::make('ctn')
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->actions([
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMyPackages::route('/'),
//            'create' => Pages\CreateMyPackages::route('/create'),
//            'edit' => Pages\EditMyPackages::route('/{record}/edit'),
            'view' => Pages\ViewPackage::route('/{record}'),

        ];
    }
}
