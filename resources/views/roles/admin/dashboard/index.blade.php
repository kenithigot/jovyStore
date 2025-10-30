<x-layouts.app title="Dashboard - Jovy's Store">

    <x-layouts.admin.layout>
        <!-- ========== MOBILE SIZE BREADCRUMB ========== -->
        <div class="block lg:hidden">
            <x-layouts.admin.breadcrumb :links="[
        ['label' => 'Dashboard', 'url' => route('admin.index')],
    ]" />
        </div>
        <div class="block lg:hidden px-4 mt-4">
            <div class="text-gray-600 text-sm">
                <span class="text-base font-semibold text-gray-800">Hey Kenco - </span>here's what's happening with your
                store
                today.
            </div>
        </div>
        <!-- ========== END MOBILE SIZE BREADCRUMB ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <x-layouts.admin.content>

            <div class="hidden lg:flex justify-between">
                <x-layouts.admin.desktop-breadcrumb :links="[
        ['label' => 'Dashboard', 'url' => route('admin.index')],
    ]" />
                <div class="text-gray-600 text-sm">
                    <span class="text-base font-semibold text-gray-800">Hey Kenco - </span>here's what's happening with
                    your store
                    today.
                </div>
            </div>
            <div class="px-4 sm:px-0 py-1">
                <!-- Icon Blocks -->
                <div class="w-full py-2 sm:py-0">
                    <div class="w-full grid sm:grid-cols-2 xl:grid-cols-4 items-start gap-3">
                        <!-- Card -->
                        <div
                            class="group flex border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <div class="flex flex-col w-full">
                                <div class="relative flex flex-col w-full">
                                    <div class="absolute right-0 -mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-7 text-blue-600">
                                            <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                            <path fill-rule="evenodd"
                                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                                clip-rule="evenodd" />
                                            <path
                                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                        </svg>
                                    </div>
                                    <div class="absolute ">
                                        <x-text-gradient class="uppercase text-sm font-semibold">Today's
                                            Sale (Php)</x-text-gradient>
                                    </div>
                                    <div class="relative">
                                        <p class="animate-pulse mt-6 text-3xl sm:text-4xl font-bold text-blue-600">
                                            510,200</p>
                                        <div class="relative">
                                            <div class="absolute bottom-0 right-0">
                                                <p class="inline-flex items-center text-sm sm:text-lg text-green-600">
                                                    +99.95%
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="size-4">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a.75.75 0 0 1-.75-.75V4.66L7.3 6.76a.75.75 0 0 1-1.1-1.02l3.25-3.5a.75.75 0 0 1 1.1 0l3.25 3.5a.75.75 0 1 1-1.1 1.02l-1.95-2.1v12.59A.75.75 0 0 1 10 18Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div
                            class="group flex border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <div class="flex flex-col w-full">
                                <div class="relative flex flex-col w-full">
                                    <div class="absolute right-0 -mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-7 text-blue-600">
                                            <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                            <path fill-rule="evenodd"
                                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                                clip-rule="evenodd" />
                                            <path
                                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                        </svg>
                                    </div>
                                    <div class="absolute">
                                        <x-text-gradient class="uppercase text-sm font-semibold">Total
                                            Sale (Php)</x-text-gradient>
                                    </div>
                                    <div class="relative">
                                        <p class="animate-pulse mt-6 text-3xl sm:text-4xl font-bold text-blue-600">
                                            510,200</p>
                                        <div class="relative">
                                            <div class="absolute bottom-0 right-0">
                                                <p class="inline-flex items-center text-sm sm:text-lg text-green-600">
                                                    +99.95%
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="size-4">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a.75.75 0 0 1-.75-.75V4.66L7.3 6.76a.75.75 0 0 1-1.1-1.02l3.25-3.5a.75.75 0 0 1 1.1 0l3.25 3.5a.75.75 0 1 1-1.1 1.02l-1.95-2.1v12.59A.75.75 0 0 1 10 18Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div
                            class="group flex border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <div class="flex flex-col w-full">
                                <div class="relative flex flex-col w-full">
                                    <div class="absolute right-0 -mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-7 text-blue-700">
                                            <path
                                                d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                        </svg>
                                    </div>
                                    <div class="absolute">
                                        <x-text-gradient class="uppercase text-sm font-semibold">Total
                                            Orders</x-text-gradient>
                                    </div>
                                    <div class="relative">
                                        <p class="animate-pulse mt-6 text-3xl sm:text-4xl font-bold text-blue-600">
                                            510,200</p>
                                        <div class="relative">
                                            <div class="absolute bottom-0 right-0">
                                                <p class="inline-flex items-center text-sm sm:text-lg text-green-600">
                                                    +99.95%
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="size-4">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a.75.75 0 0 1-.75-.75V4.66L7.3 6.76a.75.75 0 0 1-1.1-1.02l3.25-3.5a.75.75 0 0 1 1.1 0l3.25 3.5a.75.75 0 1 1-1.1 1.02l-1.95-2.1v12.59A.75.75 0 0 1 10 18Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div
                            class="group flex border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <div class="flex flex-col w-full">
                                <div class="relative flex flex-col w-full">
                                    <div class="absolute right-0 -mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-7 text-blue-500">
                                            <path fill-rule="evenodd"
                                                d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                                clip-rule="evenodd" />
                                            <path
                                                d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                        </svg>
                                    </div>
                                    <div class="absolute">
                                        <x-text-gradient class="uppercase text-sm font-semibold">Total
                                            Customers</x-text-gradient>
                                    </div>
                                    <div class="relative">
                                        <p class="animate-pulse mt-6 text-3xl sm:text-4xl font-bold text-blue-600">
                                            510,200</p>
                                        <div class="relative">
                                            <div class="absolute bottom-0 right-0">
                                                <p class="inline-flex items-center text-sm sm:text-lg text-green-600">
                                                    +99.95%
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="size-4">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a.75.75 0 0 1-.75-.75V4.66L7.3 6.76a.75.75 0 0 1-1.1-1.02l3.25-3.5a.75.75 0 0 1 1.1 0l3.25 3.5a.75.75 0 1 1-1.1 1.02l-1.95-2.1v12.59A.75.75 0 0 1 10 18Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                <!-- End Icon Blocks -->

                <div class="flex flex-col xl:flex-row py-4 w-full gap-3">
                    <div class="w-full xl:w-3/4 order-2 sm:order-1">
                        <div
                            class="w-full border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <div class="flex flex-col sm:flex-row justify-center sm:justify-between">
                                <div class="min-w-50">
                                    <x-text-gradient class="font-bold text-xl inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="me-1 size-5 text-orange-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                        </svg>
                                        Sales
                                        Report</x-text-gradient>
                                </div>
                                <div class="flex-1 py-2 sm:py-0">
                                    <div class="flex justify-between items-center w-full sm:w-auto">
                                        <div class="flex space-x-2 sm:space-x-4">
                                            <x-button.outline-button class="text-orange-500 text-xs">
                                                <span class="hidden sm:inline">12 months</span>
                                                <span class="inline sm:hidden">12 mos.</span>
                                            </x-button.outline-button>
                                            <x-button.outline-button class="text-orange-500 text-xs">
                                                <span class="hidden sm:inline">6 months</span>
                                                <span class="inline sm:hidden">6 mos.</span>
                                            </x-button.outline-button>
                                            <x-button.outline-button class="text-orange-500 text-xs">
                                                <span class="hidden sm:inline">30 days</span>
                                                <span class="inline sm:hidden">30d</span>
                                            </x-button.outline-button>
                                        </div>

                                        <div class="ml-2 sm:ml-4">
                                            <x-button.outline-button
                                                class="text-orange-500 text-xs flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                </svg>
                                                Export PDF
                                            </x-button.outline-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="hs-single-area-chart" class="h-[300px]">
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/4 order-1 sm:order:2">
                        <div
                            class="h-full border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <div class="flex justify-between items-center">
                                <x-text-gradient
                                    class="text-center sm:text-start font-bold text-xl inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="me-1 size-5 text-orange-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                    </svg>
                                    Order Items
                                </x-text-gradient>
                                <div class="hs-dropdown [--scope:window] relative inline-flex">
                                    <button id="hs-dropdown-default" type="button"
                                        class="hs-dropdown-toggle inline-flex items-center text-orange-600 border border-orange-600 py-1 px-3 gap-x-2 text-xs rounded-sm shadow-sm focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none cursor-pointer"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Last 7 Days
                                        <svg class="hs-dropdown-open:rotate-180 size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                                        role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-default">
                                        <div class="p-1 space-y-0.5">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                href="#">
                                                Last 7 Days
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                href="#">
                                                Last 14 Days
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                href="#">
                                                Last 30 Days
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                href="#">
                                                This Month
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                href="#">
                                                Last Month
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                href="#">
                                                This Year
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="w-full mt-4 h-[3px] rounded-lg border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700">
                            </div>
                            <ul class="pt-8 space-y-6">
                                <li>
                                    <div class="flex justify-between">
                                        <h6 class="text-base text-gray-700">Canned Goods</h6>
                                        <h6 class="text-base text-blue-600 font-semibold">4</h6>
                                    </div>
                                    <div class="py-1">
                                        <div class="animate-pulse flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden"
                                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-orange-600 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                                style="width: 25%"></div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex justify-between">
                                        <h6 class="text-base text-gray-700">Biscuits and Snacks</h6>
                                        <h6 class="text-base text-blue-600 font-semibold">6</h6>
                                    </div>
                                    <div class="py-1">
                                        <div class="animate-pulse flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden"
                                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-orange-600 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                                style="width: 25%"></div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex justify-between">
                                        <h6 class="text-base text-gray-700">Drinks and Beverages</h6>
                                        <h6 class="text-base text-blue-600 font-semibold">7</h6>
                                    </div>
                                    <div class="py-1">
                                        <div class="animate-pulse flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden"
                                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-orange-600 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                                style="width: 25%"></div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex justify-between">
                                        <h6 class="text-base text-gray-700">Household Essentials</h6>
                                        <h6 class="text-base text-blue-600 font-semibold">1</h6>
                                    </div>
                                    <div class="py-1">
                                        <div class="animate-pulse flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden"
                                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-orange-600 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                                style="width: 25%"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col xl:flex-row w-full mx-auto gap-3">
                    <div class="w-full xl:w-3/4 order-2 sm:order-1">
                        <div
                            class=" w-full border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <div class="flex items-center justify-between">
                                <x-text-gradient
                                    class="text-center sm:text-start font-bold text-xl inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="me-1 size-5 text-orange-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                    </svg>
                                    Transaction
                                </x-text-gradient>

                                <x-button.outline-button class="text-orange-500 text-xs flex items-center">
                                    See all Transaction
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-4 -ml-2">
                                        <path fill-rule="evenodd"
                                            d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </x-button.outline-button>
                            </div>
                            <div class="w-full py-4">
                                <livewire:admin.transaction-table-controller />
                            </div>
                        </div>
                    </div>

                    <div class="w-full xl:w-1/4 order-1 sm:order:2">
                        <div
                            class="h-full border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">

                            <x-text-gradient class="font-bold text-xl inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="me-1 size-5 text-orange-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                </svg>
                                Recent
                                Customers</x-text-gradient>
                            <p class="text-xs text-gray-600">Most recent customers who made a purchase.</p>
                            <div
                                class="w-full mt-4 h-[3px] rounded-lg border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700">
                            </div>
                            <ul class="pt-8 space-y-6">
                                @foreach ($users as $user)
                                    @if ($loop->iteration <= 10)
                                        <li>
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center gap-2">
                                                    <img class="size-8" src="{{ asset('images/no-profile.png') }}"
                                                        alt="No profile Customer">

                                                    <div class="flex flex-col">
                                                        <h6 class="text-sm text-gray-700">{{ $user->name }}</h6>
                                                        <h6 class="text-xs text-gray-700">{{ $user->email }}</h6>
                                                    </div>
                                                </div>
                                                <h6 class="text-base text-blue-600 font-semibold">4</h6>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col xl:flex-row w-full max-w-6xl mx-auto gap-3 py-4">
                    <div class="w-full xl:w-1/4">
                        <div
                            class="h-full border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <x-text-gradient class="font-bold text-xl inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="me-1 size-5 text-orange-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                </svg>
                                Top Customers
                            </x-text-gradient>
                            <p class="text-xs text-gray-600">Customers with the highest total purchases.</p>
                            <div
                                class="w-full mt-4 h-[3px] rounded-lg border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700">
                            </div>
                            <div class="py-2">
                                <ul class="pt-8 space-y-6">
                                    @foreach ($users as $user)
                                        @if ($loop->iteration <= 5)
                                            <li>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center gap-2">
                                                        <div class="relative">
                                                            <div
                                                                class="animate-pulse absolute left-0 top-0 -mt-1 -ml-1 bg-orange-500 text-white text-xs font-semibold w-4 h-4 flex items-center justify-center rounded-full">
                                                                {{ $loop->iteration }}
                                                            </div>
                                                            <img class="size-8" src="{{ asset('images/no-profile.png') }}"
                                                                alt="No profile Customer">
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <h6 class="text-sm text-gray-700">{{ $user->name }}</h6>
                                                            <h6 class="text-xs text-gray-700">{{ $user->email }}</h6>
                                                        </div>
                                                    </div>
                                                    <h6 class="text-base text-blue-600 font-semibold">{{  rand(0, 99999) }}</h6>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-3/4">
                        <div
                            class="h-full flex flex-col w-full border border-blue-400 bg-white hover:bg-gray-50 focus:outline-hidden focus:bg-gray-100 rounded-xl p-2 shadow-sm">
                            <div class="flex flex-col sm:flex-row justify-center sm:justify-between">
                                <div class="min-w-50">
                                    <x-text-gradient class="font-bold text-xl inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="me-1 size-5 text-orange-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                        </svg>
                                        Customer Report</x-text-gradient>
                                </div>
                                <div class="flex-1 py-2 sm:py-0">
                                    <div class="flex justify-between items-center w-full sm:w-auto">
                                        <div class="flex space-x-2 sm:space-x-4">
                                            <x-button.outline-button class="text-orange-500 text-xs">
                                                <span class="hidden sm:inline">12 months</span>
                                                <span class="inline sm:hidden">12 mos.</span>
                                            </x-button.outline-button>
                                            <x-button.outline-button class="text-orange-500 text-xs">
                                                <span class="hidden sm:inline">6 months</span>
                                                <span class="inline sm:hidden">6 mos.</span>
                                            </x-button.outline-button>
                                            <x-button.outline-button class="text-orange-500 text-xs">
                                                <span class="hidden sm:inline">30 days</span>
                                                <span class="inline sm:hidden">30d</span>
                                            </x-button.outline-button>
                                        </div>

                                        <div class="ml-2 sm:ml-4">
                                            <x-button.outline-button
                                                class="text-orange-500 text-xs flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                </svg>
                                                Export PDF
                                            </x-button.outline-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="hs-single-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>

        </x-layouts.admin.content>
        <!-- ========== END MAIN CONTENT ========== -->
    </x-layouts.admin.layout></x-layouts.app>