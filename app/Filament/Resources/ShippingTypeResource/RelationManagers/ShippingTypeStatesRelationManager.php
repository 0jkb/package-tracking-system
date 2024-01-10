<?php

namespace App\Filament\Resources\ShippingTypeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Guava\FilamentIconPicker\Forms\IconPicker;

use Guava\FilamentIconPicker\Tables\IconColumn;



class ShippingTypeStatesRelationManager extends RelationManager
{
    protected static string $relationship = 'shippingTypeStates';

    public function isReadOnly(): bool
    {
        return false;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('main_shipping_type_state_id')
            ->relationship('mainShippingTypeState','name'),
                Forms\Components\TextInput::make('status_name')
                    ->required()
                    ->maxLength(255),
//                Forms\Components\Select::make('color')
//                    ->options([
//                        'red' => 'red',
//                        'blue' => 'blue'
//
//                    ]),
//                IconPicker::make('icon')
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('status_name')
            ->columns([
                Tables\Columns\TextColumn::make('status_name'),
//                Tables\Columns\ColorColumn::make('color'),
//                IconColumn::make('icon')


            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
