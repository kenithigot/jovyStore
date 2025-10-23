<x-layouts.app title="Login Success">

    <div class="flex justify-center items-center h-screen min-w-sm max-w-sm mx-auto">
        <div
            class="w-full flex flex-col bg-white border border-orange-500/50 shadow-2xl rounded-xl pointer-events-auto">
            <div class="p-4 overflow-y-auto">
                <div class="mt-1 flex flex-col items-center justify-center text-gray-800 text-center">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-10 text-green-600">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h1 class="pt-1 block text-2xl font-bold text-gray-800">Success
                    </h1>
                    <p class="text-center mt-2 text-sm text-gray-600">
                        You’ve successfully signed in.


                </div>
            </div>
            <div class="flex justify-center items-center text-center gap-x-2 py-3 px-4">

                <p class=" mt-2 text-sm text-gray-600">
                    Redirecting to your dashboard......
                </p>
                <div class="animate-spin inline-block size-4 border-3 border-current border-t-transparent text-orange-600 rounded-full"
                    role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Redirect after 3 seconds
        setTimeout(() => {
            window.location.href = "{{ route('index') }}";
        }, 3000);
    </script>
</x-layouts.app>