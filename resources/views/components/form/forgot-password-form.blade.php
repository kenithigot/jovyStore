<form action="{{ route('forgot-password.forgotSend') }}" method="POST">
    @csrf
    <div class="grid">
        <!-- Form Group -->
        <div class="relative">
            <x-input.input type="email" id="email" name="email" placeholder="Email address" />
            <x-input.input-label for="email">Email address</x-input.input-label>

            <div class="absolute">
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

        </div>
        <!-- End Form Group -->

        <!-- Forgot Password -->
        <div class="flex items-center justify-end pb-8">
            <div class="">
                <a class="text-sm font-medium text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline"
                    href="{{  route('userSignin') }}">
                    Remembered it?
                </a>
            </div>
        </div>
        <!-- End Forgot Password -->

        <x-button.primary-button type="submit" class="w-full justify-center py-3">Submit
        </x-button.primary-button>
    </div>
</form>