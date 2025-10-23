<header
    class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 w-full bg-gradient-to-l from-blue-500 via-blue-300 to-blue-400 border-b border-gray-200 text-sm py-4 lg:ps-65">
    <nav class="px-3 sm:px-5 flex basis-full items-center justify-between w-full mx-auto">

        <div class="w-full flex items-center ms-auto justify-between lg:justify-end gap-x-1 md:gap-x-1">
            <div class="me-5 lg:me-0 lg:hidden">
                <!-- Logo -->
                <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                    href="{{ route('index') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Store Logo" class="h-16 w-26">
                </a>
                <!-- End Logo -->

                <div class="lg:hidden ms-1">

                </div>
            </div>
            <div class="flex flex-row items-center justify-end gap-2">

                <div class="mx-1">
                    <button type="button"
                        class="size-9.5 relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-white hover:text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                        </svg>
                        <span class="sr-only">Notifications</span>
                        <span
                            class="absolute top-0 right-0 -me-0.5 -mt-0.5 inline-flex items-center justify-center px-1.5 py-0.5 text-[10px] font-bold leading-none border-transparent text-white bg-red-500 rounded-full">
                            9+
                        </span>
                    </button>
                </div>


                <!-- Dropdown -->
                <!-- Project Dropdown -->
                <div class="inline-flex justify-center w-full">
                    <div
                        class="hs-dropdown relative [--strategy:absolute] [--placement:bottom-left] inline-flex bg-white rounded-lg">
                        <!-- Project Button -->
                        <button id="hs-pro-anpjdi" type="button"
                            class="px-2 min-h-8 flex items-center gap-x-1 font-medium text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <img class="shrink-0 size-6 rounded-full object-cover me-1"
                                src="{{ asset('images/no-profile.png') }}" alt="Logo">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5" />
                                <path d="m7 9 5-5 5 5" />
                            </svg>
                        </button>
                        <!-- End Project Button -->

                        <!-- Dropdown -->
                        <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-65 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-xl shadow-xl"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-anpjdi">
                            <div class="p-1">
                                <span class="block pt-2 pb-2 ps-2.5 text-sm text-gray-500">
                                    Administrator
                                </span>
                            </div>

                            <div class="p-1 border-t border-gray-200">
                                <button type="button"
                                    class="group w-full flex items-center gap-x-3 py-2 px-2.5 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M8 12h8" />
                                        <path d="M12 8v8" />
                                    </svg>
                                    Add project
                                </button>
                                <form action="{{ route('userLogout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="w-full flex items-center gap-x-3 py-2 px-2.5 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="shrink-0 bi bi-box-arrow-right size-4"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                            <path fill-rule="evenodd"
                                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                        </svg>
                                        Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- End Dropdown -->
                    </div>
                </div>
                <!-- End Project Dropdown -->
                <!-- End Dropdown -->
            </div>
        </div>
    </nav>
</header>