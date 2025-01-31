<!-- Off-canvas menu for mobile -->
<div x-show="sidebarOpen" class="relative z-50 lg:hidden" x-description="Off-canvas menu for mobile" role="dialog"
    aria-modal="true">
    <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 bg-shark-950/80"></div>

    <div class="fixed inset-0 flex">
        <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full" class="relative flex flex-1 w-full max-w-xs mr-16">
            <div class="absolute top-0 flex justify-center w-16 pt-5 left-full">
                <button type="button" class="-m-2.5 p-2.5" @click="sidebarOpen = false">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="w-6 h-6 text-shark-50" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar component for mobile -->
            <div class="flex flex-col px-6 pb-4 overflow-y-auto bg-white border-r border-shark-200 grow gap-y-5">
                <div class="flex items-center h-16 shrink-0">
                    <span class="text-2xl font-bold tracking-tight text-primary-500">
                        Recodex ID
                    </span>
                </div>
                @include('layouts.partials.navigation')
            </div>
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-64 lg:flex-col">
    <div class="flex flex-col px-6 pb-4 overflow-y-auto bg-white border-r border-shark-200 grow gap-y-5">
        <div class="flex items-center h-16 shrink-0">
            <span class="text-2xl font-bold tracking-tight text-primary-500">
                Recodex ID
            </span>
        </div>
        @include('layouts.partials.navigation')
    </div>
</div>
