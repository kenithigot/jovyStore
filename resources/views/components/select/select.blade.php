@props(['name', 'id', 'options' => []])

<div class="relative inline-block">
    <select name="{{ $name ?? $id }}" id="{{ $id ?? '' }}" {{ $attributes->merge([
    'class' =>
        'text-orange-600 appearance-none border border-orange-600 py-1.5 px-2.5 pe-6 w-full text-sm sm:text-base rounded-sm shadow-sm focus:border-blue-600 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none cursor-pointer',
]) }}>
        @foreach ($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="absolute right-2 top-1/2 -translate-y-1/2 size-4 text-orange-600 pointer-events-none">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
    </svg>
</div>