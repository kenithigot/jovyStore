@props(['id', 'name', 'placeholder'])

<textarea id="{{ $id }}" name="{{ $name }}" class="peer p-3 sm:p-4 block w-full bg-white border border-blue-500 rounded-lg sm:text-sm text-gray-800 placeholder:text-transparent focus:outline-hidden focus:ring-0 focus:border-blue-600 disabled:opacity-50 disabled:pointer-events-none
              focus:pt-6
              focus:pb-2
              not-placeholder-shown:pt-6
              not-placeholder-shown:pb-2
              autofill:pt-6
              autofill:pb-2" placeholder="{{ $placeholder }}" data-hs-textarea-auto-height></textarea>