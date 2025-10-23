@props(['links' => []])

<div class="-mt-px">
    <!-- Breadcrumb -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y border-gray-200 px-4 sm:px-6 lg:px-8 lg:hidden">
        <div class="flex items-center py-2">
            <!-- Navigation Toggle -->
            <button type="button"
                class="cursor-pointer size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-hidden focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
                aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                <span class="sr-only">Toggle Navigation</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                </svg>

            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ms-3 flex items-center whitespace-nowrap">
                @foreach ($links as $link)
                    @if (!$loop->last)
                        <a href="{{ $link['url'] }}">
                            <li class="flex items-center text-sm text-gray-800">
                                {{ $link['label'] }}
                                <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </li>
                        </a>
                    @else
                        <x-text-gradient class="text-sm font-semibold" aria-current="page">
                            {{ $link['label'] }}
                        </x-text-gradient>
                    @endif
                @endforeach
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Breadcrumb -->
</div>


<!-- @props(['links' => []])

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
</ol> -->