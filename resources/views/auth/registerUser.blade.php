<x-layouts.app title="Register an account - Jovy's Store">
    <div class="container mx-auto">
        <div class="py-8 sm:h-screen flex flex-col md:flex-row items-center justify-center gap-x-16">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Store Logo"
                    class="h-auto w-full max-w-32 sm:max-w-sm drop-shadow-lg drop-shadow-orange-600/50">
            </a>
            <div class="relative max-w-2xl w-full">
                <div class=" mt-7 bg-white border border-gray-200 rounded-xl shadow-xl">
                    <div class="p-4 sm:p-7">
                        <div class="text-center gap-x-2">
                            <x-text-gradient class="block text-2xl font-bold text-gray-800">Register an
                                Account</x-text-gradient>
                        </div>

                        <p class="text-center mt-2 text-sm text-gray-600">
                            Have an existing account?
                            <a class="font-medium text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline"
                                href="{{ route('userLoginIndex') }}">
                                Login Now
                            </a>
                        </p>

                        <div class="mt-5">
                            <!-- Form -->
                            <x-form.register-user-form />
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal"
        class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="modal-label">
        <div
            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-sm sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
            <div
                class="w-full flex flex-col bg-white border border-orange-500/50 shadow-2xl rounded-xl pointer-events-auto">
                <div class="p-4 overflow-y-auto">
                    <div class="mt-1 flex flex-col items-center justify-center text-gray-800 text-center">                                 
                        @if (session('error'))
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-10 text-red-600">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h1 class="pt-1 block text-2xl font-bold text-gray-800">Email already exists.</h1>
                            <p class="text-center mt-2 text-sm text-gray-600">
                                {{ session('error') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="flex justify-center items-center text-center gap-x-2 py-3 px-4">               
                    @if (session('error'))
                        <div class="flex mx-auto">
                            <x-button.primary-button data-hs-overlay="#modal" class="w-full">OK</x-button.primary-button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {             
                @if (session('error'))
                    window.HSOverlay.open('#modal');
                @endif
    }, 500);
        });
    </script>
</x-layouts.app>