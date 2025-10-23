@props(['modalId'])

<div id="{{ $modalId}}"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="{{ $modalId }}-label">
    <div
        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-sm sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
        <div
            class="w-full flex flex-col bg-white border border-orange-500/50 shadow-2xl rounded-xl pointer-events-auto">
            <div class="p-4 overflow-y-auto">
                <div class="mt-1 flex flex-col items-center justify-center text-gray-800 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-10 text-green-600">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h1 class="pt-1 block text-2xl font-bold text-gray-800">Success
                    </h1>
                    <p class="text-center mt-2 text-sm text-gray-600">
                        Your account has been successfully registered.
                    </p>
                </div>
            </div>
            <div class="flex text-center mx-auto gap-x-2 py-3 px-4 max-w-46">
                <x-button.primary-button class="w-full">OK</x-button.primary-button>
            </div>
        </div>
    </div>
</div>