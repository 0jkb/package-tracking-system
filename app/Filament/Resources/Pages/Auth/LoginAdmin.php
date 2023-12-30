<?php

namespace App\Filament\Customer\Pages\Auth;
use Filament\Forms\Form;
use Filament\Pages\Auth\Login as BaseAuth;
use Illuminate\Contracts\Support\Htmlable;

class LoginAdmin extends BaseAuth
{

    public function getHeading(): string | Htmlable
    {
        return __('Admin Login Page');
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                $this->getEmailFormComponent(),
//                $this->getLoginFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
            ])
            ->statePath('data');
    }

}
