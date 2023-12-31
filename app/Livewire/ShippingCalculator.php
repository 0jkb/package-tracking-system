<?php

namespace App\Livewire;

use App\Models\PackageType;
use App\Models\ShippingType;
use App\Models\ShippingTypeState;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Livewire\Component;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
class ShippingCalculator extends Component implements HasForms{
    use InteractsWithForms;

    public ?array $data = [];
    public $price = 0;

    public function mount(): void{


    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('package_type')
                    ->live()
                    ->options(PackageType::all()->pluck('name', 'id'))
                    ->required(),
                Select::make('shipping_type')
                    ->live()
                    ->options(ShippingType::all()->pluck('name', 'id'))
                    ->required(),
                TextInput::make('size')
                    ->live()
                    ->required()
                    ->numeric(),
            ])
            ->statePath('data');
    }

    public function updated($propertyName)
    {
        if (in_array($propertyName, ['data.package_type', 'data.shipping_type', 'data.size'])) {
            $this->price = $this->calculatePrice();
        }
    }

    protected function calculatePrice()
    {
        $defaultPrice = 1;

        $size = isset($this->data['size']) && is_numeric($this->data['size']) ? $this->data['size'] : $defaultPrice;

        $packageTypeId = $this->data['package_type'] ?? null;
        $shippingTypeId = $this->data['shipping_type'] ?? null;

        $packagePrice = $packageTypeId ? PackageType::find($packageTypeId)->price ?? $defaultPrice : $defaultPrice;
        $shippingPrice = $shippingTypeId ? ShippingType::find($shippingTypeId)->price ?? $defaultPrice : $defaultPrice;

        return $packagePrice * $shippingPrice * $size;
    }


    public function render()
    {
        return view('livewire.shipping-calculator');
    }
}
