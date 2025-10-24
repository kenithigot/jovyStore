<x-layouts.app title="Sign In - Jovy's Store">
    <div class="container mx-auto">
        <div class="py-8 sm:h-screen flex flex-col md:flex-row items-center justify-center gap-x-16">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Store Logo"
                    class="h-auto w-full max-w-32 sm:max-w-sm drop-shadow-lg drop-shadow-orange-600/50">
            </a>
            <div class="relative max-w-sm w-full">
                <div class=" mt-7 bg-white border border-gray-200 rounded-xl shadow-xl">
                    <div class="p-4 sm:p-7">
                        <div class="text-center gap-x-2">
                            <x-text-gradient class="block text-2xl font-bold text-gray-800">Sign in</x-text-gradient>
                            <p class="mt-2 text-sm text-gray-600">
                                Don't have an account yet?
                                <a class="font-medium text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline"
                                    href="{{ route('register.showRegistrationForm') }}">
                                    Sign Up
                                </a>
                            </p>
                        </div>

                        <div class="mt-5">
                            <div
                                class="py-3 flex items-center text-xs text-orange-600 uppercase before:flex-1 before:border-t before:border-orange-600 before:me-6 after:flex-1 after:border-t after:border-orange-600 after:ms-6">
                                Or</div>

                            <x-text-gradient class="text-center text-lg font-medium text-gray-900 mb-2 uppercase">
                                Login
                            </x-text-gradient>
                            <!-- Form -->
                            <x-form.signin-form />
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalLogin"
        class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="modalLogin-label">
        <div
            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-sm sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
            <div
                class="w-full flex flex-col bg-white border border-orange-500/50 shadow-2xl rounded-xl pointer-events-auto">
                <div class="p-4 overflow-y-auto">
                    <div class="mt-1 flex flex-col items-center justify-center text-gray-800 text-center">
                        @if(session('loginSuccess'))

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-10 text-green-600">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <h1 class="pt-1 block text-2xl font-bold text-gray-800">Success
                            </h1>
                            <p class="text-center mt-2 text-sm text-gray-600">
                                You’ve successfully signed in.
                            </p>
                        @elseif (session('unverified'))
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                            </svg>


                            <h1 class="pt-1 block text-2xl font-bold text-gray-800">Your account is not yet verified</h1>
                            <p class="text-center mt-2 text-sm text-gray-600">
                                Please check your email for the verification code.
                            </p>

                        @elseif (session('incorrectAuth'))
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-10 text-red-600">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h1 class="pt-1 block text-2xl font-bold text-gray-800">Login Failed</h1>
                            <p class="text-center mt-2 text-sm text-gray-600">
                                Please check your email and password.
                            </p>
                        @endif
                    </div>
                </div>
                <div class="flex justify-center items-center text-center gap-x-2 py-3 px-4">
                    @if (session('loginSuccess'))
                        <p class=" mt-2 text-sm text-gray-600">
                            Redirecting to your dashboard......
                        </p>
                        <div class="animate-spin inline-block size-4 border-3 border-current border-t-transparent text-orange-600 rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    @elseif (session('unverified'))
                        <div class="flex mx-auto">
                            <x-button.primary-button data-hs-overlay="#modalLogin"
                                class="w-full">OK</x-button.primary-button>
                        </div>

                    @elseif (session('incorrectAuth'))
                        <div class="flex mx-auto">
                            <x-button.primary-button data-hs-overlay="#modalLogin"
                                class="w-full">OK</x-button.primary-button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                @if (session('loginSuccess'))
                    window.HSOverlay.open('#modalLogin');
                    setTimeout(() => window.location.href = "{{ route('index') }}", 3000);
                @elseif (session('incorrectAuth'))
                    window.HSOverlay.open('#modalLogin');

                @elseif (session('unverified'))
                    window.HSOverlay.open('#modalLogin');
                @endif
    }, 500);
        });
    </script>
</x-layouts.app>