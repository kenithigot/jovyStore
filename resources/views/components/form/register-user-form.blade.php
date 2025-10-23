<form action="{{ route('registration') }}" method="POST">
    @csrf
    <div class="grid lg:grid-cols-2 gap-4 space-y-2">

        <!-- Form Group -->
        <div class="relative">
            <x-input.input type="text" id="firstName" name="firstName" placeholder="First Name" />
            <x-input.input-label for="firstName">First Name</x-input.input-label>
            @error('firstName')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="relative">
            <x-input.input type="text" id="lastName" name="lastName" placeholder="Last Name" />
            <x-input.input-label for="lastName">Last Name</x-input.input-label>
            @error('lastName')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="relative">
            <x-input.input type="number" id="phoneNum" name="phoneNum" placeholder="Phone Number" />
            <x-input.input-label for="phoneNum">Phone Number</x-input.input-label>
            @error('phoneNum')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="relative">
            <x-input.input type="text" id="address" name="address" placeholder="Address" />
            <x-input.input-label for="address">Address</x-input.input-label>
            @error('address')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="relative">
            <x-input.input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" />
            <x-input.input-label for="emailAddress">Email Address</x-input.input-label>
            @error('emailAddress')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="relative">
            <x-input.input type="password" id="password" name="password" placeholder="Password" />
            <x-input.input-label for="password">Password</x-input.input-label>
            <button type="button"
                class="cursor-pointer absolute inset-y-0 end-0 flex items-center justify-center pe-3 focus:outline-hidden"
                data-hs-toggle-password='{
                                        "target": "#password"}'>
                <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                    <path class="hs-password-active:hidden"
                        d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                    </path>
                    <path class="hs-password-active:hidden"
                        d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                    </path>
                    <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22">
                    </line>
                    <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z">
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
    </div>
    <div class="flex min-w-sm items-center justify-end py-4">
        <x-button.primary-button type="submit" class="justify-center py-3">Register</x-button.primary-button>
    </div>
</form>