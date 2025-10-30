<div>
    <div class="flex flex-col">
        <div class="flex flex-wrap items-center gap-2 mb-6">
            <div class="flex items-center space-x-2">
                <x-select.select wire:model.live="perPage" id="pageKey" :options="['10', '25', '50', '100']" />
            </div>
            <div class="grow flex">
                <div class="relative max-w-xs w-full">
                    <x-input.search-input wire:model.live.debounce.300ms="search" id="search"
                        placeholder="Search here ..." />
                </div>
            </div>
        </div>
        <div class="flex items-center gap-2 mb-4 w-full">
            <div class="hidden sm:flex items-center gap-2">
                <p class="text-orange-500 inline-flex items-center text-sm sm:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 text-orange-500 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                    Filter
                </p>
            </div>
            <div class="grow flex gap-2 sm:gap-4 w-full">
                <x-select.select id="brand" :options="['Brand', 'Canned Goods', 'Biscuits and Snacks', 'Drinks and Beverages', 'Household Essentials']" />
                <x-select.select id="category" :options="['Category', 'Canned Goods', 'Biscuits and Snacks', 'Drinks and Beverages', 'Household Essentials']" />
                <x-select.select id="status" :options="['Status', 'Pending', 'Completed', 'Cancelled']" />
            </div>
        </div>
        <div class="min-h-[130] overflow-x-auto overflow-auto [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
            <div class="min-w-full inline-block align-middle">
                <div class="max-h-[30rem] overflow-auto [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
                    <table class="min-w-full">
                        <thead class="border-b border-gray-400 bg-slate-300">
                            <tr>
                                <x-table.table-heading>Status</x-table.table-heading>
                                <x-table.table-heading>Product</x-table.table-heading>
                                <x-table.table-heading>Brand</x-table.table-heading>
                                <x-table.table-heading>Category</x-table.table-heading>
                                <x-table.table-heading>Amount</x-table.table-heading>
                                <x-table.table-heading>Action</x-table.table-heading>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @forelse ($users as $user)
                                <tr
                                    class="group hover:bg-orange-400 hover:text-white transition-colors duration-200 even:bg-slate-200">
                                    <x-table.table-data class="group-hover:text-white hover:text-white">
                                        <x-button.pending-status />
                                        <!-- <x-button.complete-status /> -->
                                        <!-- <x-button.cancel-status /> -->
                                    </x-table.table-data>
                                    <x-table.table-data
                                        class="group-hover:text-white hover:text-white">{{ $user->name }}</x-table.table-data>
                                    <x-table.table-data
                                        class="group-hover:text-white hover:text-white">{{ $user->email }}</x-table.table-data>
                                    <x-table.table-data
                                        class="group-hover:text-white hover:text-white">{{ $user->user_role }}</x-table.table-data>
                                    <x-table.table-data
                                        class="group-hover:text-white hover:text-white">{{ $user->name }}</x-table.table-data>
                                    <x-table.table-data class="group-hover:text-white  hover:text-white">
                                        <div class="inline-flex justify-center w-full">
                                            <div
                                                class="rounded-lg hs-dropdown relative [--strategy:absolute] [--placement:bottom-left] inline-flex">
                                                <!-- Project Button -->
                                                <button id="hs-pro-anpjdi" type="button"
                                                    class="min-h-6 flex items-center gap-x-1 font-medium text-sm border text-gray-800 rounded-lg border-transparent cursor-pointer"
                                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class="group-hover:text-white hover:text-white shrink-0 size-8 text-orange-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                    </svg>
                                                </button>

                                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-xl shadow-xl"
                                                    role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-anpjdi">
                                                    <div class="p-1">
                                                        <span class="block pt-2 pb-2 ps-2.5 text-sm text-gray-500">
                                                            Action
                                                        </span>

                                                        <div class="flex flex-col gap-y-1">
                                                            <a href="#"
                                                                class="py-2 px-2.5 group flex justify-start items-center gap-x-3 rounded-lg cursor-pointer text-[13px] text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                                                </svg>
                                                                <span class="grow">
                                                                    <span class="block text-sm font-medium text-gray-700">
                                                                        View
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <a href="#"
                                                                class="py-2 px-2.5 group flex justify-start items-center gap-x-3 rounded-lg cursor-pointer text-[13px] text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                                </svg>
                                                                <span class="grow">
                                                                    <span class="block text-sm font-medium text-gray-700">
                                                                        Edit
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <a href="#"
                                                                class="py-2 px-2.5 group flex justify-start items-center gap-x-3 rounded-lg cursor-pointer text-[13px] text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                </svg>
                                                                <span class="grow">
                                                                    <span class="block text-sm font-medium text-gray-700">
                                                                        Delete
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </x-table.table-data>
                                </tr>
                            @empty
                                <tr>
                                    <x-table.table-data colspan="6" class=" text-center text-red-500">No Data
                                        Found</x-table.table-data>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="text-xm gap-2 mt-4">
            {{ $users->links() }}
        </div>
    </div>
</div>