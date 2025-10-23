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

    <!-- Footer -->
    <footer class="w-full border-t border-gray-200 bg-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center text-xs text-gray-600">
            <p>© 2025 Preline Labs.</p>
            <ul class="flex items-center space-x-3">
                <li><a href="#" class="underline hover:text-gray-800">X (Twitter)</a></li>
                <li><a href="#" class="underline hover:text-gray-800">Dribbble</a></li>
                <li><a href="#" class="underline hover:text-gray-800">Github</a></li>
            </ul>
        </div>
    </footer>
</div>