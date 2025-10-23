<form action="" method="POST">
    @csrf
    <div class="grid mx-auto gap-4 space-y-2">
        <div class="flex items-center justify-center gap-x-3" data-hs-pin-input>
            <input type="hiddden" id="email" name="email" value="{{ $email }}">
            @for ($i = 0; $i < 4; $i++)
                <input type="text" maxlength="1" name="pinNum[]"
                    class="block w-9 text-center py-3 border border-blue-500 rounded-md sm:text-sm focus:outline-hidden focus:ring-0 focus:border-blue-600">
            @endfor
        </div>

        <div class="flex min-w-sm items-center justify-center py-4">
            <x-button.primary-button type="submit" class="justify-center py-3">Verify</x-button.primary-button>
        </div>
    </div>
</form>