@props(['currency' => 'Php'])
<div>
    <span class="mt-7 font-bold text-5xl text-gray-800">
        <span class="font-bold text-2xl -me-2">{{ $currency }}</span>
        {{ $slot }}
    </span>
</div>