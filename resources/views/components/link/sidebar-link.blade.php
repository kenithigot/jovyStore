@props(['href' => '#', $isActive = false])

@php

    $fullUrl = url($href);
    $isActive = request()->fullUrlIs($fullUrl) || request()->is(trim($href, '/'));
    $baseClass = "flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg border border-transparent transition-all duration-300 focus:outline-hidden";
    $isActiveClass = "bg-gradient-to-l from-blue-500 via-blue-300 to-blue-400 text-white shadow-lg border-l-4";
    $isInactiveClass = "text-gray-700 hover:text-white hover:bg-gradient-to-l hover:from-blue-500 hover:via-blue-300 hover:to-blue-400 ";
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $baseClass . ' ' . ($isActive ? $isActiveClass : $isInactiveClass)]) }}>
    {{ $slot }}
</a>