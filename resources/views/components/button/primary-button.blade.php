@props(['id' => null, 'name' => null, 'type' => 'button'])

<button type="{{ $type ?? 'button' }}" name="{{ $name ?? $id }}" id="{{ $id }}" {{ $attributes->merge(['class' => 'inline-flex items-start shadow-lg py-2 px-5 gap-x-2 text-sm rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none cursor-pointer']) }}>
    {{ $slot }}
</button>