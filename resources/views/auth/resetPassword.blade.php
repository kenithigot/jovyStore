<x-layouts.app title="Verify Account - Jovy's Store">
    <div class="container mx-auto">
        <div class="py-8 flex items-center justify-center h-screen">
            <div class="max-w-md w-full bg-white rounded-xl shadow-xl border border-gray-200 p-6">
                <x-text-gradient class="text-2xl font-semibold text-gray-800 text-center mb-4">Verify Your
                    Account</x-text-gradient>
                <p class="text-center mt-2 text-sm text-gray-600">
                    We’ve sent a PIN to your email! Please enter it to verify your account.
                </p>
                <div class="mt-5">
                    <!-- Form -->
                    @if(!empty($email))
                        <form action="{{ route('forgot-password.verificationSend', ['email' => $email]) }}" method="POST">
                            @csrf
                            <div class="grid mx-auto gap-4 space-y-2">
                                <div class="flex items-center justify-center gap-x-3" data-hs-pin-input>
                                    <input type="hidden" id="email" name="email" value="{{ $email }}">
                                    @for ($i = 0; $i < 4; $i++)
                                        <input type="text" maxlength="1" name="pinNum[]" required
                                            class="block w-9 text-center py-3 border border-orange-500 rounded-md sm:text-sm focus:outline-hidden focus:ring-0 focus:border-blue-600">
                                    @endfor
                                </div>

                                <div class="flex min-w-sm items-center justify-center py-4">
                                    <x-button.primary-button type="submit"
                                        class="justify-center py-3">Verify</x-button.primary-button>
                                </div>
                            </div>
                        </form>
                    @else
                        <p class="text-red-600 text-center mt-4">No verification email found. Please register again.</p>
                    @endif
                    <!-- End Form -->
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
                            <h1 class="pt-1 block text-2xl font-bold text-gray-800">{{ session('success') }}</h1>
                            <p class="text-center mt-2 text-sm text-gray-600">
                                Please check your inbox or spam folder for the OTP code.
                            </p>
                        @elseif (session('error'))
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-10 text-red-600">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h1 class="pt-1 block text-2xl font-bold text-gray-800">Verification Failed</h1>
                            <p class="text-center mt-2 text-sm text-gray-600">
                                {{ session('error') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="flex justify-center items-center text-center gap-x-2 py-3 px-4">
                    <div class="flex mx-auto">
                        <x-button.primary-button data-hs-overlay="#modal" class="w-full">OK</x-button.primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                @if (session('success'))
                    window.HSOverlay.open('#modal');
                @elseif (session('error'))
                    window.HSOverlay.open('#modal');
                @endif
    }, 500);
        });
    </script>

</x-layouts.app>