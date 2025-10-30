@props(['id' => null, 'name' => null, 'type' => 'button'])

<button type="{{ $type ?? 'button' }}" name="{{ $name ?? $id }}" id="{{ $id }}" {{ $attributes->merge(['class' => 'inline-flex items-center border border-orange-600 py-1 px-3 gap-x-2 text-sm rounded-sm shadow-sm focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none cursor-pointer']) }}>
    {{ $slot }}
</button>