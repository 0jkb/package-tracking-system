
<div>

    <div x-data="{}" class="mx-auto w-full max-w-screen-lg overflow-x-clip px-5 pt-20 min-[550px]:px-10 sm:overflow-x-visible">
        <div class="relative flex items-start justify-center min-[550px]:justify-start lg:gap-40 xl:justify-between">
            <div class="min-[500px]:pl-10 sm:shrink-0 sm:pl-14 xl:pl-0">
                <div
                    class="relative translate-x-10 text-3xl font-black italic min-[500px]:translate-x-0 lg:text-4xl"
                    x-data="{}"
                    x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.timeline()
                            .fromTo(
                                $refs.supercar,
                                {
                                    autoAlpha: 1,
                                    x: -450,
                                },
                                {
                                    autoAlpha: 0,
                                    x: 0,
                                    duration: 1.1,
                                    ease: 'circ.in',
                                },
                            )
                            .fromTo(
                                $refs.accelerated,
                                {
                                    autoAlpha: 0,
                                    x: -100,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.5,
                                    ease: 'circ.out',
                                },
                                '>-0.1',
                            )
                            .fromTo(
                                $refs.shadow,
                                {
                                    autoAlpha: 0,
                                    x: -100,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.7,
                                    ease: 'circ.out',
                                },
                                '<0.01',
                            )
                            .fromTo(
                                $refs.line1,
                                {
                                    autoAlpha: 0,
                                    x: -50,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.3,
                                    ease: 'circ.out',
                                },
                                '<0.2',
                            )
                            .fromTo(
                                $refs.line2,
                                {
                                    autoAlpha: 0,
                                    x: -50,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.3,
                                    ease: 'circ.out',
                                },
                                '<0.02',
                            )
                            .fromTo(
                                $refs.line3,
                                {
                                    autoAlpha: 0,
                                    x: -50,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.3,
                                    ease: 'circ.out',
                                },
                                '<0.02',
                            )
                    }
                "
                >
                    <div x-ref="accelerated" class="bg-gradient-to-r from-[#FFB46F] to-[#B9C0B9] bg-clip-text text-transparent" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">Accelerated</div>

                    <div x-ref="shadow" class="absolute -left-2 top-1 -z-10 select-none text-[#FFEFE1]" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">Accelerated</div>
                    <div class="absolute -left-12 top-1/2 -translate-y-1/2 space-y-1">
                        <div class="translate-x-5">
                            <div x-ref="line1" class="h-0.5 w-7 rounded-full bg-gradient-to-r from-transparent to-[#FFC089]" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"></div>
                        </div>
                        <div>
                            <div x-ref="line2" class="h-0.5 w-10 rounded-full bg-gradient-to-r from-transparent to-[#FFC089]" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"></div>
                        </div>
                        <div class="-translate-x-4">
                            <div x-ref="line3" class="h-0.5 w-12 rounded-full bg-gradient-to-r from-transparent to-[#FFC089]" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"></div>
                        </div>
                    </div>

                    <div class="absolute right-0 top-1/2 -translate-y-1/2">
                        <img x-ref="supercar" src="https://filamentphp.com/build/assets/supercar-fe85e4de.webp" alt="Car" class="w-28 opacity-0" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 0; visibility: hidden;" />
                    </div>
                </div>

                <div
                    class="group/header pt-3"
                    x-data="{}"
                    x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.fromTo(
                            $refs.title,
                            {
                                autoAlpha: 0,
                                x: 20,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                duration: 0.5,
                            },
                        )
                        gsap.fromTo(
                            $refs.description,
                            {
                                autoAlpha: 0,
                                x: -20,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                duration: 0.5,
                            },
                        )
                        gsap.fromTo(
                            $refs.star1,
                            {
                                autoAlpha: 0,
                                scale: 0,
                                rotate: 200,
                                x: 50,
                            },
                            {
                                autoAlpha: 1,
                                scale: 1,
                                rotate: 0,
                                x: 0,
                                duration: 0.8,
                                ease: 'expo.out',
                            },
                        )
                        gsap.fromTo(
                            $refs.star2,
                            {
                                autoAlpha: 0,
                                scale: 0,
                                rotate: -200,
                                x: -60,
                            },
                            {
                                autoAlpha: 1,
                                scale: 1,
                                rotate: 0,
                                x: 0,
                                duration: 0.8,
                                ease: 'expo.out',
                            },
                        )
                    }
                "
                >
                    <div class="relative space-y-3 font-black">
                        <div x-ref="title" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                            <div class="relative max-w-fit text-6xl lg:text-7xl">
                                Shipping

{{--                                <div class="absolute -right-7 -top-5 -translate-x-1 rotate-12 text-rose-500 opacity-0 duration-200 ease-out group-hover/header:translate-x-0 group-hover/header:opacity-100 motion-reduce:transition-none min-[500px]:-right-5 min-[500px]:-top-7">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                        <path fill="currentColor" d="M2 9.137C2 14 6.02 16.591 8.962 18.911C10 19.729 11 20.5 12 20.5s2-.77 3.038-1.59C17.981 16.592 22 14 22 9.138c0-4.863-5.5-8.312-10-3.636C7.5.825 2 4.274 2 9.137Z"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                                <div class="absolute -right-12 top-2 -translate-x-1 -rotate-12 text-rose-500 opacity-0 transition delay-75 duration-200 ease-out group-hover/header:translate-x-0 group-hover/header:opacity-100 motion-reduce:transition-none min-[500px]:-right-10 min-[500px]:top-0">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="scale-75" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                        <path fill="currentColor" d="M2 9.137C2 14 6.02 16.591 8.962 18.911C10 19.729 11 20.5 12 20.5s2-.77 3.038-1.59C17.981 16.592 22 14 22 9.138c0-4.863-5.5-8.312-10-3.636C7.5.825 2 4.274 2 9.137Z"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
                            </div>
                            <div class="text-4xl lg:text-5xl">
                                Tracker
                                <span class="text-butter inline-block -translate-x-2"> . </span>
                            </div>
                        </div>
                        <div x-ref="star1" class="absolute -left-14 top-1 lg:-left-20" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                            <svg width="31" height="31" fill="none" class="hidden scale-75 min-[450px]:block min-[500px]:scale-100" xmlns="http://www.w3.org/2000/svg">
                                <path d="m17.664 29.354 3.06-8.755 8.679-3.27a2.183 2.183 0 0 0-.05-4.092l-8.754-3.06-3.27-8.679a2.183 2.183 0 0 0-4.092.05l-3.06 8.754-8.68 3.27a2.183 2.183 0 0 0 .05 4.092l8.755 3.06 3.27 8.679a2.183 2.183 0 0 0 4.092-.05Zm-5.325-9.391a2.142 2.142 0 0 0-1.325-1.294l-8.741-3.06 8.665-3.27a2.143 2.143 0 0 0 1.294-1.325l3.06-8.741 3.27 8.665a2.142 2.142 0 0 0 1.325 1.294l8.74 3.06-8.664 3.27a2.141 2.141 0 0 0-1.294 1.325l-3.06 8.741-3.27-8.665Z" fill="#0F033A"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="relative pt-5">
                        <div x-ref="description" class="text-xl font-medium leading-normal opacity-90 lg:text-2xl" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">Track Your Shipments Easily</div>
                        <div x-ref="star2" class="absolute -right-10 top-1 min-[500px]:right-10 lg:-right-5" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                            <svg width="31" height="31" fill="none" class="hidden scale-[0.65] min-[450px]:block" xmlns="http://www.w3.org/2000/svg">
                                <path d="m17.664 29.354 3.06-8.755 8.679-3.27a2.183 2.183 0 0 0-.05-4.092l-8.754-3.06-3.27-8.679a2.183 2.183 0 0 0-4.092.05l-3.06 8.754-8.68 3.27a2.183 2.183 0 0 0 .05 4.092l8.755 3.06 3.27 8.679a2.183 2.183 0 0 0 4.092-.05Zm-5.325-9.391a2.142 2.142 0 0 0-1.325-1.294l-8.741-3.06 8.665-3.27a2.143 2.143 0 0 0 1.294-1.325l3.06-8.741 3.27 8.665a2.142 2.142 0 0 0 1.325 1.294l8.74 3.06-8.664 3.27a2.141 2.141 0 0 0-1.294 1.325l-3.06 8.741-3.27-8.665Z" fill="#0F033A"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div
                    x-data="{}"
                    x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.fromTo(
                            $refs.getstarted,
                            {
                                autoAlpha: 0,
                                x: -10,
                                y: 10,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                y: 0,
                                duration: 0.5,
                            },
                        )
                        gsap.fromTo(
                            $refs.discord,
                            {
                                autoAlpha: 0,
                                x: 10,
                                y: -10,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                y: 0,
                                duration: 0.5,
                            },
                        )
                    }
                "
                    class="flex flex-col gap-5 pt-10 text-white min-[500px]:flex-row min-[500px]:items-center"
                >
                    <a x-ref="getstarted" href="customer/login" class="group relative block" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                        <div class="bg-midnight flex items-center justify-center gap-3 rounded-bl-3xl rounded-tr-3xl px-9 py-4 transition duration-200 will-change-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5 motion-reduce:transition-none">
                            <div>Get Started</div>
                            <div class="transition duration-300 will-change-transform group-hover:translate-x-1 motion-reduce:transition-none">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 12.992h2.5m13.5 0-6-6m6 6-6 6m6-6H9.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="bg-butter absolute inset-0 -z-10 h-full w-full -translate-x-1.5 translate-y-1.5 rounded-bl-3xl rounded-tr-3xl transition duration-300 will-change-transform group-hover:-translate-x-2 group-hover:translate-y-2 group-hover:bg-rose-300 motion-reduce:transition-none"></div>
                    </a>
                </div>

                <div
                    x-data="{}"
                    x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.fromTo(
                            $refs.arrow,
                            {
                                autoAlpha: 0,
                                x: -10,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                duration: 0.5,
                                ease: 'circ.out',
                                delay: 0.2,
                            },
                        )
                    }
                "
                    class="hidden -translate-x-16 pt-2 min-[500px]:block lg:-translate-x-32">
                    <img x-ref="arrow" src="https://filamentphp.com/build/assets/decoration-up-arrow-red-5661465e.svg" alt="Up arrow" class="w-32" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;" />
                </div>
            </div>

            <div class="absolute -top-10 right-10 -z-10 hidden min-[500px]:block md:relative md:right-auto md:top-auto">
                <div
                    x-data="{}"
                    x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.timeline()
                            .fromTo(
                                $refs.rocket,
                                {
                                    autoAlpha: 0,
                                    scale: 0.9,
                                    x: -50,
                                    y: 50,
                                },
                                {
                                    autoAlpha: 1,
                                    scale: 1,
                                    x: 0,
                                    y: 0,
                                    duration: 0.8,
                                    ease: 'circ.out',
                                },
                            )
                            .to($refs.rocket, {
                                keyframes: {
                                    x: [0, 20],
                                    y: [0, -20],
                                },
                                duration: 5,
                                repeat: -1,
                                yoyo: true,
                            })
                        gsap.timeline()
                            .fromTo(
                                $refs.circle1,
                                {
                                    autoAlpha: 0,
                                    scale: 0,
                                },
                                {
                                    autoAlpha: 1,
                                    scale: 1,
                                    duration: 0.7,
                                    ease: 'back.out',
                                },
                            )
                            .fromTo(
                                $refs.circle2,
                                {
                                    autoAlpha: 0,
                                    scale: 0,
                                },
                                {
                                    autoAlpha: 1,
                                    scale: 1,
                                    duration: 0.7,
                                    ease: 'back.out',
                                },
                                '<0.1',
                            )
                    }
                "
                    class="relative">

                    <div class="w-60 sm:w-40 md:w-60 lg:w-80 animate-bounce">
                        <img x-ref="rocket" src="package.png" alt="Rocket" class="w-full" />
                    </div>

                    <div x-ref="circle1" class="absolute -right-4 bottom-0 hidden h-3 w-3 rounded-full bg-[#FFCEA0] min-[550px]:block md:h-4 md:w-4" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"></div>
                    <div x-ref="circle2" class="absolute -bottom-20 right-20 hidden h-5 w-5 rounded-full bg-[#FFE69A] min-[550px]:block md:h-7 md:w-7" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"></div>
                </div>
            </div>
        </div>
    </div>


    {{--    <!-- Hero Section with Background Class -->--}}
{{--    <div class="bg-image hero-section p-20">--}}
{{--        <div class="mx-auto max-w-6xl px-4 py-12 text-center sm:px-6 lg:px-8 lg:py-16">--}}
{{--            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Track Your Shipments Easily</h2>--}}
{{--            <p class="mt-4 text-lg leading-6 text-gray-500">The most efficient way to keep an eye on your deliveries.</p>--}}
{{--            <div class="mt-8 flex justify-center">--}}
{{--                <div class="inline-flex rounded-md shadow">--}}
{{--                    <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-5 py-3 text-base font-medium text-white hover:bg-green-700"> Get Started </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <!-- Features Section -->
    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base font-semibold uppercase tracking-wide text-green-600">Features</h2>
                <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">A better way to track</p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Everything you need to stay updated on your shipments.</p>
                <hr>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10 md:space-y-0">
                    <!-- Feature 1 -->
                    <div class="relative">
                        <dt>
                            <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-yellow-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Real-time Tracking</p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">Get real-time updates on your shipments.</dd>
                    </div>

                    <!-- Feature 2 -->
                    <div class="relative">
                        <dt>
                            <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-yellow-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Notifications</p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">Stay informed with notifications.</dd>
                    </div>

                    <!-- Feature 3 -->
                    <div class="relative">
                        <dt>
                            <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-yellow-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>

                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Support</p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">Stay informed with notifications.</dd>
                    </div>


                    <!-- Feature 4 -->
                    <div class="relative">
                        <dt>
                            <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-yellow-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                                </svg>

                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Easy Integration</p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">Seamlessly integrate with existing systems.</dd>
                    </div>

                    <!-- Feature 5 -->
                    <div class="relative">
                        <dt>
                            <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-yellow-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Advanced Analytics</p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">Gain insights with detailed shipment analytics.</dd>
                    </div>

                    <!-- Feature 6 -->
                    <div class="relative">
                        <dt>
                            <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-yellow-600 text-white">
                                <!-- Icon for Feature 6 (Placeholder) -->
                                <!-- Replace with an appropriate icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0 0-8-8m8 8 8-8" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Global Coverage</p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">Track shipments across the globe with our extensive network.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>



    <!-- Our Service Section -->
    <section id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
        <div class="container xl:max-w-6xl mx-auto px-4">
            <!-- Heading start -->
            <header class="text-center mx-auto mb-12 lg:px-20">
                <h2 class="text-2xl leading-normal mb-2 font-bold text-black">Our Services</h2>
                <!-- SVG Decoration -->
                <!-- ... existing SVG ... -->
                <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">We offer comprehensive shipping solutions for businesses and individuals.</p>
            </header>
            <!-- End heading -->

            <!-- Services Row -->
            <div class="flex flex-wrap flex-row -mx-4 text-center">
                <!-- Air Freight Service -->
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                    <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                        <!-- Icon for Air Freight -->
                        <!-- ... Icon SVG or Image ... -->
                        <img x-ref="shipping_image" src="6260130.png" alt="Shipping Image" class="w-20 items-center">

                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Air Freight</h3>
                        <p class="text-gray-500">Fast and reliable air freight services to meet your urgent shipping needs.</p>
                    </div>
                </div>

                <!-- Sea Freight Service -->
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                    <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                        <!-- Icon for Sea Freight -->
                        <!-- ... Icon SVG or Image ... -->
                        <img x-ref="shipping_image" src="ship.webp" alt="Shipping Image" class="w-20 items-center">

                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Sea Freight</h3>
                        <p class="text-gray-500">Cost-effective sea freight solutions for large-scale shipments.</p>
                    </div>
                </div>

                <!-- Shipping Various Materials -->
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                    <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                        <!-- Icon for Materials Shipping -->
                        <!-- ... Icon SVG or Image ... -->
                        <img x-ref="shipping_image" src="6260130.png" alt="Shipping Image" class="w-20 items-center">

                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Versatile Material Shipping</h3>
                        <p class="text-gray-500">Expertise in handling and shipping a wide variety of materials safely and efficiently.</p>
                    </div>
                </div>
            </div>
            <!-- end Services Row -->
        </div>
    </section>



    <!-- Our Service Pricing Section -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Service Pricing</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Choose the right plan for your shipping needs.</p>
                <!-- SVG Decoration Here -->
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">

                <!-- Pricing Card for Air Freight -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center bg-white rounded-lg border shadow dark:bg-gray-800 xl:p-8">
                    <h3 class="mb-4 text-2xl font-semibold">Air Freight</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Quick and reliable air shipping.</p>
                    <div class="my-8">
                        <span class="text-5xl font-extrabold">$200</span>
                        <span class="text-gray-500 dark:text-gray-400">/ton</span>
                    </div>
                    <ul class="mb-8 space-y-4 text-left">
                        <!-- List of features for Air Freight -->
                    </ul>
                </div>

                <!-- Pricing Card for Sea Freight -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center bg-white rounded-lg border shadow dark:bg-gray-800 xl:p-8">
                    <h3 class="mb-4 text-2xl font-semibold">Sea Freight</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Cost-effective solutions for large shipments.</p>
                    <div class="my-8">
                        <span class="text-5xl font-extrabold">$150</span>
                        <span class="text-gray-500 dark:text-gray-400">/cubic meter</span>
                    </div>
                    <ul class="mb-8 space-y-4 text-left">
                        <!-- List of features for Sea Freight -->
                    </ul>
                </div>

                <!-- Pricing Card for Material Shipping -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center bg-white rounded-lg border shadow dark:bg-gray-800 xl:p-8">
                    <h3 class="mb-4 text-2xl font-semibold">Material Shipping</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Specialized handling for diverse materials.</p>
                    <div class="my-8">
                        <span class="text-5xl font-extrabold">Varies</span>
                        <span class="text-gray-500 dark:text-gray-400">/inquiry</span>
                    </div>
                    <ul class="mb-8 space-y-4 text-left">
                        <!-- List of features for Material Shipping -->
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <div x-data="{}" x-ref="sunset_section" x-init="initializeSunsetSectionAnimation()" class="text-center">
        <div class="mx-auto grid w-full max-w-4xl">
            <!-- Sunset and Mountains (Revised for Shipping Tracker) -->
            <!-- ...your other elements... -->

            <!-- Example: Shipping Related Image -->
            <div class="relative z-50 grid place-items-center pt-10">
                <img x-ref="shipping_image" src="3d-online-delivery.webp" alt="Shipping Image" class="w-40">
            </div>

            <!-- Custom Text for Shipping Tracker -->
            <div x-ref="tracker_message" class="px-4 pt-3 text-3xl font-extrabold">
                Ready to Track Your Shipment?
            </div>

            <div x-ref="tracker_sub_message" class="mx-auto max-w-md px-4 pt-2 text-dolphin">
                Experience the best in class shipment tracking with our Shipping Tracker.
            </div>

            <!-- 'Get Started' Button or Similar CTA -->
            <div x-ref="get_started" class="mx-auto mt-4">
                <a href="/customer/login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Get Started
                </a>
            </div>
        </div>
    </div>



</div>


