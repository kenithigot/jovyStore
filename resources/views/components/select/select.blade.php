@props(['id', 'name', 'label', 'options' => []])

<select id="{{ $id }}" name="{{ $name }}"
    class="appearance-none relative z-50 block border py-3 sm:py-4 px-3 sm:px-3 text-gray-700 w-full border-blue-500 rounded-lg text-sm placeholder:text-transparent focus:outline-hidden focus:ring-0 focus:border-blue-600 disabled:opacity-50 disabled:pointer-events-none">
    <option selected>{{ $label }}</option>
    @foreach ($options as $option)
        <option value="{{ $option }}">{{ $option }}</option>
    @endforeach
</select>

<svg class="pointer-events-none absolute right-3 top-1/2 size-4 text-gray-500 transform -translate-y-1/2"
    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
</svg>