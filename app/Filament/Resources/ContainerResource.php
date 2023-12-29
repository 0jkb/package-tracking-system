<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContainerResource\Pages;
use App\Filament\Resources\ContainerResource\RelationManagers;
use App\Models\Container;
use App\Models\ShippingTypeState;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContainerResource extends Resource
{
    protected static ?string $model = Container::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationGroup = 'System Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('code')
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
                Tables\Actions\Action::make('change state')
                    ->button()
                    ->form([
                        Forms\Components\Select::make('shipping_type_state_id')
                            ->options(function ($record) {
                                return ShippingTypeState::query()
                                    ->where('shipping_type_id', $record->packages->first()->shipping_type_id)
                                    ->pluck('status_name', 'id');
                            })
                    ])
                    ->mutateFormDataUsing(function ($data, $record) {
                        $shippingTypeStateId = $data['shipping_type_state_id'];

                        $record->packages()->update(['shipping_type_state_id' => $shippingTypeStateId]);

                        Notification::make()
                            ->title('Change Status')
                            ->body('The status has been successfully updated.')
                            ->success()
                            ->send();

                        return $data;
                    })
                    ->requiresConfirmation()

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
            'index' => Pages\ListContainers::route('/'),
            'create' => Pages\CreateContainer::route('/create'),
            'view' => Pages\ViewContainer::route('/{record}'),
            'edit' => Pages\EditContainer::route('/{record}/edit'),
        ];
    }
}
