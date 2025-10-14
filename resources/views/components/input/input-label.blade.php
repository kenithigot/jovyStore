@props(['for'])

<label for="{{ $for }}" class="absolute top-0 start-0 p-3 sm:p-4 h-full text-gray-700 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:text-xs
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-700
                peer-not-placeholder-shown:text-xs
                peer-not-placeholder-shown:-translate-y-1.5
                peer-not-placeholder-shown:text-gray-700">{{ $slot }}</label>