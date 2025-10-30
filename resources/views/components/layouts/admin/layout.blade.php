<div class="min-h-screen flex flex-col overflow-auto [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
    <!-- Header -->
    <x-layouts.admin.header />

    <div class="flex-1 relative">
        <!-- Sidebar -->
        <x-layouts.admin.sidebar />

        <!-- Main content -->
        <div class="py-0">
            {{ $slot }}
        </div>
    </div>
    <div class="relative">
        <div class="lg:pl-65 mt-auto w-full bg-gradient-to-l from-blue-500 via-blue-300 to-blue-400">
            <div class="flex items-center justify-center">
                <x-layouts.admin.footer />
            </div>
        </div>
    </div>
</div>