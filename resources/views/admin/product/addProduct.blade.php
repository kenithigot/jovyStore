<x-layouts.app title="Dashboard - Jovy's Store">

    <x-layouts.admin.layout />

    <!-- ========== MAIN CONTENT ========== -->
    <x-layouts.admin.content>
        <x-layouts.admin.desktop-breadcrumb :links="[
        ['label' => 'Dashboard', 'url' => route('index')],
        ['label' => 'Products', 'url' => route('product.index')],
        ['label' => 'Add Product', 'url' => route('product.add')]
    ]" />
    </x-layouts.admin.content>
    <!-- ========== END MAIN CONTENT ========== -->

</x-layouts.app>