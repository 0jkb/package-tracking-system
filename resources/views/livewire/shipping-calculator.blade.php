<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-md">
        <div class="p-6">
            <form wire:submit.prevent="create" class="space-y-4">
                {{ $this->form }}
            </form>

            <!-- Display the calculated price -->
            <div class="mt-4 text-xl font-semibold">
                Total Price: OMR {{ $this->price }}
            </div>

            <x-filament-actions::modals />
        </div>
    </div>
</div>
