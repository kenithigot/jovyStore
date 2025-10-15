@props(['href' => '#'])
<div>
    <a href="{{ $href ?? '#' }}" {{ $attributes->merge(['class' => 'py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none cursor-pointer']) }}>
        {{ $slot }}
    </a>
</div>