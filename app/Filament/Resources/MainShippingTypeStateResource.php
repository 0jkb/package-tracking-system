<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainShippingTypeStateResource\Pages;
use App\Filament\Resources\MainShippingTypeStateResource\RelationManagers;
use App\Models\MainShippingTypeState;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MainShippingTypeStateResource extends Resource
{
    protected static ?string $model = MainShippingTypeState::class;
    protected static ?string $navigationGroup = 'System Management';
    protected static ?string $navigationLabel = 'Main Shipping State';
    protected static ?string $navigationParentItem = 'Shipping Types';


    protected static ?string $navigationIcon = 'heroicon-o-bars-arrow-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMainShippingTypeStates::route('/'),
            'create' => Pages\CreateMainShippingTypeState::route('/create'),
            'view' => Pages\ViewMainShippingTypeState::route('/{record}'),
            'edit' => Pages\EditMainShippingTypeState::route('/{record}/edit'),
        ];
    }
}
