@props(['title' => null])

<div class="min-h-screen flex bg-gray-100">
    <aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col">
        <div class="h-16 flex items-center px-4 font-semibold text-lg">
            {{ $title ?? config('app.name') }}
        </div>
        <nav class="flex-1 px-2 space-y-1">
            <!-- Example nav items; replace with dynamic ones as needed -->
            <a href="/" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-700 hover:bg-gray-50">Dashboard</a>
            <a href="#" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-700 hover:bg-gray-50">Courses</a>
            <a href="#" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-700 hover:bg-gray-50">Settings</a>
        </nav>
    </aside>
    <div class="flex-1 flex flex-col">
        <header class="md:hidden bg-white border-b border-gray-200 p-4 flex items-center justify-between">
            <div class="font-semibold">{{ $title ?? config('app.name') }}</div>
            <!-- Mobile menu button placeholder -->
            <button type="button" class="p-2 rounded hover:bg-gray-100" aria-label="Open sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </header>
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</div>
