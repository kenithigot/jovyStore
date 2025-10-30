@props(['id' => null, 'placeholder' => ''])

<label for="{{ $id }}" class="sr-only">Search</label>
<input {{ $attributes->merge([
    'class' => 'py-1.5 sm:py-2 px-3 ps-9 block w-full border border-orange-500 rounded-sm sm:text-sm text-gray-600 focus:outline-hidden focus:ring-0 focus:border-blue-600 disabled:opacity-50 disabled:pointer-events-none',
    'type' => 'text',
    'id' => $id,
    'placeholder' => $placeholder
]) }}>
<div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
    <svg class="size-4 text-orange-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"></circle>
        <path d="m21 21-4.3-4.3"></path>
    </svg>
</div>