@props(['title' => ''])

<div>
    <div class="grow">
        <h3 class="group-hover:text-gray-800 font-semibold text-gray-900">
            {{ $title ?? '' }}
        </h3>
        <p class="text-sm text-gray-700">
            {{ $slot }}
        </p>
    </div>
</div>