<section class="dark:bg-gray-800 dark:text-gray-100">
    <div class="container mx-auto flex flex-col justify-center p-6 sm:py-12 lg:flex-row lg:justify-between lg:py-24">
        <!-- Content Side -->
        <div class="flex flex-col justify-center  text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
            <h2 class="text-3xl font-bold mb-4">Shipping Calculator</h2>
            <p class="mb-4">Enter your details to calculate the shipping cost.</p>
            {{ $this->form }}
            <div class="mt-6 text-lg font-semibold text-gray-800 dark:text-gray-100">
                Total Price: OMR {{ $this->price }}
            </div>
        </div>

        <!-- Image Side -->
        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0">
            <img src="slide_05.png" alt="Delivery Package" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
        </div>
    </div>
</section>
