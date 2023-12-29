<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Package;
use App\Models\PackageType;
use App\Models\ShippingType;
use App\Models\ShippingTypeState;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\View;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Actions\Action;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';
    protected static ?string $navigationGroup = 'Orders Management';

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
                        ->columnStart(1)
                ])->columnSpanFull()
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tracker_number')
                    ->default('OR-' . random_int(100000, 999999))
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(32)
                    ->unique(Package::class, 'tracker_number', ignoreRecord: true),
                Forms\Components\Select::make('container_id')
                    ->relationship('container','number')
                    ->required(),
                Forms\Components\Select::make('package_type_id')
                    ->live()
                    ->relationship('packageType','name')
                    ->required(),
                Forms\Components\Select::make('shipping_type_id')
                    ->live()
                    ->relationship('shippingType','name')
                    ->required(),
                Forms\Components\Select::make('customer_id')
                    ->relationship('customer', 'name')
                    ->preload()
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('phone')
                            ->label('Phone')
                            ->required()
                            ->maxLength(255)
                            ->unique(),

                        Forms\Components\TextInput::make('city')
                            ->maxLength(255)
                    ])
                    ->createOptionAction(function (Action $action) {
                        return $action
                            ->modalHeading('Create customer')
                            ->modalButton('Create customer')
                            ->modalWidth('lg');
                    }),
                Forms\Components\Select::make('shipping_type_state_id')
                    ->relationship('shippingTypeState', 'status_name')
                    ->options(function (Get $get) {
                        $shippingTypeId = $get('shipping_type_id');

                        if (is_null($shippingTypeId)) {
                            return collect();
                        }
                        return ShippingTypeState::query()
                            ->where('shipping_type_id', $shippingTypeId)
                            ->pluck('status_name', 'id');
                    })
                    ->required(),
                Forms\Components\TextInput::make('size')
                    ->live()
                    ->required()
                    ->numeric(),
                Forms\Components\Placeholder::make('price')
                    ->content(function (Get $get ,Set $set){
                        $defaultPrice = 1;
                        $packagePrice = $defaultPrice;
                        $shippingPrice = $defaultPrice;
                        $size = $get('size') ?: $defaultPrice;

                        if ($packageTypeId = $get('package_type_id')) {
                            $package = PackageType::find($packageTypeId);
                            $packagePrice = $package ? $package->price : $defaultPrice;
                        }
                        if ($shippingTypeId = $get('shipping_type_id')) {
                            $shipping = ShippingType::find($shippingTypeId);
                            $shippingPrice = $shipping ? $shipping->price : $defaultPrice;
                        }
                        $total = $packagePrice * $shippingPrice * $size;
                        return $total;
                    }),
                Forms\Components\TextInput::make('ctn')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('weight')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('notes')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('container_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('package_type_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('shipping_type_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('shipping_type_state_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tracker_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('size')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ctn')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('notes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
//            RelationManagers\PackageStatusHistoriesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'view' => Pages\ViewPackage::route('/{record}'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
