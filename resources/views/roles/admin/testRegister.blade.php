<x-layouts.app title="Product - Jovy's Store">

    <x-layouts.admin.layout />
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


        <div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" id="name" name="name" placeholder="name">
                <input type="email" id="email" name="email" placeholder="email">
                <input type="password" id="password" name="password" placeholder="password">
                <button type="submit">Register</button>
            </form>

        </div>

    </x-layouts.admin.content>
    <!-- ========== END MAIN CONTENT ========== -->

</x-layouts.app>