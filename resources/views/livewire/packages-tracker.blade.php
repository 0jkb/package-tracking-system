<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg max-w-3xl">

    <form wire:submit.prevent="search" class="space-y-4">
        <div class="space-y-2">
            {{ $this->form }}
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out">
            Search
        </button>
    </form>

    @if($searchResult)
        <div class="mt-6">
            <h3 class="text-lg font-semibold mb-2">Package Details:</h3>
            <p class="mb-4">Tracker Number: {{ $searchResult->tracker_number }}</p>

            <div class="relative sm:ml-[calc(2rem+1px)] sm:pb-12 md:ml-[calc(3.5rem+1px)] lg:ml-[max(calc(14.5rem+1px),calc(100%-48rem))]">
                @foreach($searchResult->packageStatusHistories as $statusHistory)
                    @if(!$loop->last)
                        <div class="absolute bottom-0 right-full top-3 mr-7 hidden w-px bg-slate-200 sm:block md:mr-[3.25rem] dark:bg-slate-800"></div>
                    @endif
                    <div class="space-y-16">
                        <article class="group relative">
                            <div class="absolute -inset-x-4 -inset-y-2.5 group-hover:bg-slate-50/70 sm:rounded-2xl md:-inset-x-6 md:-inset-y-4 dark:group-hover:bg-slate-800/50"></div>
                            <svg viewBox="0 0 9 9" class="absolute right-full top-2 mr-6 hidden h-[calc(0.5rem+1px)] w-[calc(0.5rem+1px)] overflow-visible text-slate-200 sm:block md:mr-12 dark:text-slate-600">
                                <circle cx="4.5" cy="4.5" r="4.5" stroke="currentColor" class="fill-white dark:fill-slate-900" stroke-width="2"></circle>
                            </svg>
                            <div class="relative">
                                <h3 class="pt-8 text-base font-semibold tracking-tight text-slate-900 lg:pt-0 dark:text-slate-200">{{ $statusHistory->shippingTypeState->status_name }}</h3>
                                <div class="prose prose-slate prose-a:relative prose-a:z-10 dark:prose-dark mb-4 mt-2 line-clamp-2">
                                    <p>some data here</p>
                                </div>
                                <dl class="absolute left-0 top-0 lg:left-auto lg:right-full lg:mr-[calc(6.5rem+1px)]">
                                    <dt class="sr-only">Date</dt>
                                    <dd class="whitespace-nowrap text-sm leading-6 dark:text-slate-400">{{ \Carbon\Carbon::parse($statusHistory->changed_at)->format('M d, Y') }}</dd>
                                </dl>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>

    @elseif($searchPerformed)
        <div class="mt-6 text-red-500">
            <p>No package found with the provided tracker number.</p>
        </div>
    @endif
    </div>


</div>
