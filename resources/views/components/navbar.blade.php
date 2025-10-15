<header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-5 bg-slate-300 fixed">
    <nav
        class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
        <div class="lg:col-span-3 flex items-center">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Store Logo" class="h-16 w-26">
            <!-- End of Logo -->
            <div class="ms-1 sm:ms-2"> </div>
        </div>

        <!-- Button Group -->
        <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
            <button type="button"
                class="size-9.5 relative flex justify-center items-center rounded-xl bg-white border border-orange-500 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none cursor-pointer">
                <span class="sr-only">Cart</span>
                <svg class="shrink-0 size-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="8" cy="21" r="1" />
                    <circle cx="19" cy="21" r="1" />
                    <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                </svg>
            </button>
            <x-button.link-button href="{{ route('signin') }}">Sign in</x-button.link-button>

            <div class="lg:hidden">
                <button type="button"
                    class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold rounded-xl border bg-white border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                    id="hs-pro-hcail-collapse" aria-expanded="false" aria-controls="hs-pro-hcail"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-pro-hcail">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4 text-orange-500"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4 text-orange-500"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- End Button Group -->

        <!-- Collapse -->
        <div id="hs-pro-hcail"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6"
            aria-labelledby="hs-pro-hcail-collapse">
            <div
                class="flex flex-col text-center gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
                <x-link.nav-link href="#about">About</x-link.nav-link>
                <x-link.nav-link href="#product">Product</x-link.nav-link>
                <x-link.nav-link href="#deals">Deals</x-link.nav-link>
                <x-link.nav-link href="#contact">Contact</x-link.nav-link>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>