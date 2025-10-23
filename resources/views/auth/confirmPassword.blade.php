<x-layouts.app title="Reset Password - Jovy's Store">
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
                            <x-text-gradient class="block text-2xl font-bold text-gray-800">Reset Your
                                Password</x-text-gradient>
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            <form action="{{ route('forgot-password.resetPasswordSend', ['email' => $email]) }}"
                                method="POST">
                                @csrf
                                <div class="grid">
                                    <!-- Form Group -->
                                    <div class="relative">
                                        <x-input.input type="password" id="password" name="password"
                                            placeholder="Password" />
                                        <x-input.input-label for="password">Password</x-input.input-label>
                                        <button type="button"
                                            class="cursor-pointer absolute inset-y-0 end-0 flex items-center justify-center pe-3 focus:outline-hidden"
                                            data-hs-toggle-password='{
                                        "target": "#password"}'>
                                            <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-password-active:hidden"
                                                    d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                                <path class="hs-password-active:hidden"
                                                    d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                                </path>
                                                <path class="hs-password-active:hidden"
                                                    d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                                </path>
                                                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22">
                                                </line>
                                                <path class="hidden hs-password-active:block"
                                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z">
                                                </path>
                                                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                        </button>
                                        @error('password')
                                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="relative mt-8">
                                        <x-input.input type="password" id="password_confirmation"
                                            name="password_confirmation" placeholder="Confirm Password" />
                                        <x-input.input-label for="password_confirmation">Confirm
                                            Password</x-input.input-label>
                                        <button type="button"
                                            class="cursor-pointer absolute inset-y-0 end-0 flex items-center justify-center pe-3 focus:outline-hidden"
                                            data-hs-toggle-password='{
                                        "target": "#password_confirmation"}'>
                                            <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-password-active:hidden"
                                                    d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                                <path class="hs-password-active:hidden"
                                                    d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                                </path>
                                                <path class="hs-password-active:hidden"
                                                    d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                                </path>
                                                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22">
                                                </line>
                                                <path class="hidden hs-password-active:block"
                                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z">
                                                </path>
                                                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                        </button>
                                        @error('password_confirmation')
                                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- End Form Group -->

                                    <div class="pt-8">
                                        <x-button.primary-button type="submit" class="w-full justify-center py-3">Verify
                                            Password</x-button.primary-button>
                                    </div>
                                </div>
                            </form>
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
                        @if(session('success'))

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-10 text-green-600">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <h1 class="pt-1 block text-2xl font-bold text-gray-800">Success
                            </h1>
                            <p class="text-center mt-2 text-sm text-gray-600">
                                You’ve successfully reset your password.
                            </p>
                        @elseif (session('notMatch'))
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-10 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h1 class="pt-1 block text-2xl font-bold text-gray-800">Password do not Match</h1>
                            <p class="text-center mt-2 text-sm text-gray-600">
                                {{ session('notMatch') }}
                            </p>

                        @elseif (session('error'))
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
                    @if (session('success'))
                        <p class=" mt-2 text-sm text-gray-600">
                            You will be redirected to the login page shortly.
                        </p>
                        <div class="animate-spin inline-block size-4 border-3 border-current border-t-transparent text-orange-600 rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    @elseif (session('notMatch'))
                        <div class="flex mx-auto">
                            <x-button.primary-button data-hs-overlay="#modal" class="w-full">OK</x-button.primary-button>
                        </div>
                    @elseif (session('error'))
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
                @if (session('success'))
                    window.HSOverlay.open('#modal');
                    setTimeout(() => window.location.href = "{{ route('userSignin') }}", 3000);
                @elseif (session('notMatch'))
                    window.HSOverlay.open('#modal');
                @elseif (session('error'))
                    window.HSOverlay.open('#modal');
                @endif
    }, 500);
        });
    </script>
</x-layouts.app>