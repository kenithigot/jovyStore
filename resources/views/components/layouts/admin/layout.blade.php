<div class="min-h-screen flex flex-col">
    <!-- Header -->
    <x-layouts.admin.header />

    <div class="flex flex-1">
        <!-- Sidebar -->
        <x-layouts.admin.sidebar />

        <!-- Main content -->
        <div class="flex-1 py-0">
            {{ $slot }}
        </div>
    </div>
    <div class="lg:pl-65 absolute bottom-0 w-full bg-gradient-to-l from-blue-500 via-blue-300 to-blue-400">
        <div class="flex items-center justify-center">
            <x-layouts.admin.footer />
        </div>
    </div>
</div>