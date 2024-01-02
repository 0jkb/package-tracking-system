<?php

namespace App\Filament\Customer\Pages\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\EditProfile as EditProfile;

class profile extends EditProfile
{


    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        TextInput::make('phone')
                            ->required()
                            ->unique(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

}
