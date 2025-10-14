@props(['src' => '', 'alt' => 'No Image'])
<div
    class="shrink-0 relative rounded-xl overflow-hidden w-full h-87.5 before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-gray-900/70">
    <img class="size-full absolute top-0 start-0 object-cover" src="{{ $src ?? '' }}" alt="{{ $alt ?? 'No Image' }}">
</div>