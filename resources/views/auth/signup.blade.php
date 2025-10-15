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
                                    href="../examples/html/signup.html">
                                    Sign In
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
                            <x-form.signup-form />
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>