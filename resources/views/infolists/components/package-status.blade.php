
<div {{ $attributes }}>
    {{ $getChildComponentContainer() }}

    @php

        use App\Models\MainShippingTypeState;
        $mainShippingTypeStates = MainShippingTypeState::all();

    @endphp

{{--    <div class="container mx-auto p-4">--}}
{{--        <div class="flex flex-col md:flex-row md:justify-between text-center">--}}
{{--            @foreach($mainShippingTypeStates as $state)--}}
{{--                <!-- Timeline Step -->--}}
{{--                <div class="flex flex-col items-center">--}}
{{--                    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center">--}}
{{--                        <!-- Replace with dynamic icon if available -->--}}
{{--                        <i class="fas {{ $state->icon ?? 'fa-box' }} text-white"></i>--}}
{{--                    </div>--}}
{{--                    <p class="text-sm mt-2">{{ $state->name }}</p>--}}
{{--                </div>--}}

{{--                @if(!$loop->last)--}}
{{--                    <!-- Connecting Line -->--}}
{{--                    <div class="hidden md:block w-full bg-gray-300 h-1 self-center"></div>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <ul class="timeline">--}}
{{--        @foreach($mainShippingTypeStates as $state)--}}
{{--            <li>--}}
{{--                <hr class="bg-primary"/>--}}
{{--                <div class="timeline-start timeline-box">{{$state->name}}</div>--}}
{{--                <div class="timeline-middle">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-primary">--}}
{{--                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <hr class="bg-primary"/>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}


    <ul class="timeline timeline-vertical">
        @foreach($getRecord()->packageStatusHistories as $statusHistory)
            <li>
                @if(!$loop->first)
                    <hr/>
                @endif

                <div class="timeline-start">{{ \Carbon\Carbon::parse($statusHistory->changed_at)->format('M d, Y') }}</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box bg-blue-100">{{ $statusHistory->shippingTypeState->status_name }}</div>

                @if(!$loop->last)
                    <hr/>
                @endif
            </li>
        @endforeach

    </ul>

</div>



