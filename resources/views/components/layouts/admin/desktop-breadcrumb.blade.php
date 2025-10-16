@props(['links' => []])

<ol class="flex items-center whitespace-nowrap">
    <li class="inline-flex items-center">
        @foreach ($links as $link)
            @if(!$loop->last)
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600"
                    href="{{ $link['url'] }}">
                    {{ $link['label'] }}
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            @else
                <x-text-gradient class="text-sm font-semibold" aria-current="page">
                    {{ $link['label'] }}
                </x-text-gradient>
            @endif
        @endforeach
    </li>
</ol>