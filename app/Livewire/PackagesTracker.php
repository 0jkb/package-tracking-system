<?php

namespace App\Livewire;

use App\Models\Package;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Forms\Form;


class PackagesTracker extends Component implements HasForms
{

    use InteractsWithForms;

    public ?array $data = [];
    public $searchResult;
    public $searchPerformed = false;


    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tracker_number')
                    ->required(),
            ])
            ->statePath('data');
    }


    public function search(): void{

        $this->searchResult = Package::with(['packageStatusHistories','shippingTypeState','packageType']) // Add your relations here
        ->where('tracker_number', $this->data['tracker_number'])
            ->first();
        $this->searchPerformed = true;

    }


    public function render()
    {
        return view('livewire.packages-tracker');
    }
}
