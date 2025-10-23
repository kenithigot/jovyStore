@props(['label'])

<div class="hs-dropdown [--auto-close:inside] relative inline-flex w-full">
    <button id="hs-dropdown-default" type="button"
        class="hs-dropdown-toggle p-3 py-[15px] w-full inline-flex items-center justify-between gap-x-2 text-sm rounded-lg border border-blue-500 bg-white text-gray-700 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
        {{ $label }}
        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="m6 9 6 6 6-6" />
        </svg>
    </button>

    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-99 sm:min-w-100 bg-red-500 shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
        role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-default">
        <div class="p-1 space-y-0.5">
            <a class="flex items-center gap-x-3.5 py-3 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                href="#">
                Newsletter
            </a>
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                href="#">
                Purchases
            </a>
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                href="#">
                Downloads
            </a>
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                href="#">
                Team Account
            </a>
        </div>
    </div>
</div>