@props(['number' => ''])

<div
    class="flex items-center justify-center text-white px-3 py-1 bg-linear-to-tl from-orange-500 drop-shadow-md to-orange-500/50 rounded-full">
    <div class="text-center font-extrabold">
        {{ $number ?? '' }}
    </div>
</div>