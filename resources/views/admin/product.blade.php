<x-layouts.app title="Product - Jovy's Store">

    <x-layouts.admin.layout />

    <!-- ========== MAIN CONTENT ========== -->
    <x-layouts.admin.content>
        <x-layouts.admin.desktop-breadcrumb :links="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Products', 'url' => route('product')]
    ]" />

        <div class="py-3">
            <div class="flex flex-row gap-x-3">
                <x-button.primary-button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                        <path
                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg>
                    Add Product
                </x-button.primary-button>
            </div>

            <div class="py-10 shadow-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle rounded-lg px-4">
                            <div class="overflow-hidden border-t-2 border-orange-600">
                                <!-- <table class="min-w-full divide-y divide-gray-200 border-t-2 border-orange-600">
                                    <thead>
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Age</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Address</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd:bg-gray-300 even:bg-gray-100 hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                John Brown</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York No. 1
                                                Lake Park</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <button type="button"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                            </td>
                                        </tr>

                                        <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                Jim Green</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">27</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">London No. 1
                                                Lake Park</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <button type="button"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                            </td>
                                        </tr>

                                        <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                Joe Black</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">31</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Sidney No. 1
                                                Lake Park</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <button type="button"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                            </td>
                                        </tr>

                                        <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                Edward King</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">16</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">LA No. 1 Lake
                                                Park</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <button type="button"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                            </td>
                                        </tr>

                                        <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                Jim Red</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Melbourne No.
                                                1 Lake Park</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <button type="button"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->

                                <table id="myTable" class="min-w-full border divide-y divide-gray-200 border-gray-200 text-sm">
                                    <thead class="text-orange-600">
                                        <tr class="bg-slate-200">
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>

                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>

                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>

                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>

                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>

                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>

                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr><tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                        <tr>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                            <td>asdasd</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </x-layouts.admin.content>
    <!-- ========== END MAIN CONTENT ========== -->
    
</x-layouts.app>