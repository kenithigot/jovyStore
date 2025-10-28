<x-layouts.app title="Settings - Jovy's Store">

    <x-layouts.admin.layout>
        <!-- ========== MOBILE SIZE BREADCRUMB ========== -->
        <div class="block lg:hidden">
            <x-layouts.admin.breadcrumb :links="[
        ['label' => 'Dashboard', 'url' => route('index')],
        ['label' => 'Settings', 'url' => route('settings.index')]
    ]" />
        </div>
        <!-- ========== END MOBILE SIZE BREADCRUMB ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <x-layouts.admin.content>

            <div class="hidden lg:block">
                <x-layouts.admin.desktop-breadcrumb :links="[
        ['label' => 'Dashboard', 'url' => route('index')],
        ['label' => 'Settings', 'url' => route('settings.index')]
    ]" />
            </div>
            <div class="py-3">
                test
            </div>

        </x-layouts.admin.content>
        <!-- ========== END MAIN CONTENT ========== -->
    </x-layouts.admin.layout>
</x-layouts.app>