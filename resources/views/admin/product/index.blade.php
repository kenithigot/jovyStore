<x-layouts.app title="Product - Jovy's Store">

    <x-layouts.admin.layout>
        <!-- ========== MOBILE SIZE BREADCRUMB ========== -->
        <div class="block lg:hidden">
            <x-layouts.admin.breadcrumb :links="[
        ['label' => 'Dashboard', 'url' => route('index')],
        ['label' => 'Products', 'url' => route('product.index')]
    ]" />
        </div>
        <!-- ========== END MOBILE SIZE BREADCRUMB ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <x-layouts.admin.content>

            <div class="hidden lg:block">
                <x-layouts.admin.desktop-breadcrumb :links="[
        ['label' => 'Dashboard', 'url' => route('index')],
        ['label' => 'Products', 'url' => route('product.index')]
    ]" />
            </div>


            <div class="py-3">
                <div class="flex flex-row gap-x-3">
                    <a href="{{ route('product.add') }}">
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
                    </a>
                    <a href="">register</a>
                    <form action="{{ route('userLogout') }}" method="POST">
                        @csrf
                        <x-button.primary-button type="submit">
                            Logout
                        </x-button.primary-button>
                    </form>
                </div>

                <!-- <div class="py-10 shadow-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle rounded-lg px-4">
                            <div class="overflow-hidden border-t-2 border-orange-600">
                                <table id="myTable"
                                    class="min-w-full border divide-y divide-gray-200 border-gray-200 text-sm">
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
            </div> -->
            </div>

        </x-layouts.admin.content>
        <!-- ========== END MAIN CONTENT ========== -->
    </x-layouts.admin.layout>
</x-layouts.app>