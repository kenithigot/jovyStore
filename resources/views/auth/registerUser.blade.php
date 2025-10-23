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
</x-layouts.app>