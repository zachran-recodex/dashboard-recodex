<nav class="flex flex-col flex-1">
    <ul role="list" class="flex flex-col flex-1 gap-y-6">
        <li>
            <h2 class="text-xs font-semibold leading-6 text-shark-400 uppercase">PAGES</h2>

            <ul role="list" class="-mx-2 space-y-1">
                <!-- Dashboard Link -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center p-2 rounded-md gap-x-3">
                    <x-icons.house
                        class="w-6 h-6 shrink-0 {{ request()->routeIs('dashboard') ? 'text-primary-500' : 'text-shark-400' }}" />
                    Dashboard
                </x-nav-link>

                <!-- Client Dropdown -->
                <li x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex items-center w-full p-2 rounded-md gap-x-3 hover:bg-shark-100 hover:text-primary-500">
                        <x-icons.group-people class="w-6 h-6 shrink-0 text-shark-400" />
                        <span class="flex-1 text-left">Clients</span>
                        <svg class="w-5 h-5 transition-transform transform" :class="{ 'rotate-180': open }"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <ul x-show="open" @click.away="open = false" class="pl-6 mt-1 space-y-1">
                        <!-- Client List -->
                        <x-nav-link :href="route('clients.index')" :active="request()->routeIs('clients.index')"
                            class="flex items-center p-2 rounded-md gap-x-3">
                            <x-icons.list class="w-5 h-5 shrink-0 text-shark-400" />
                            List Client
                        </x-nav-link>

                        <!-- Add Client -->
                        <x-nav-link :href="route('clients.create')" :active="request()->routeIs('clients.create')"
                            class="flex items-center p-2 rounded-md gap-x-3">
                            <x-icons.plus class="w-5 h-5 shrink-0 text-shark-400" />
                            Add Client
                        </x-nav-link>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- Profile Section -->
        <li class="mt-auto">
            <a href="{{ route('profile.edit') }}"
                class="flex items-center -mx-2 p-2 rounded-md hover:bg-shark-100 gap-x-3 text-shark-950">
                <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center">
                    <span class="text-primary-600 font-medium text-sm">
                        {{ substr(Auth::user()->name, 0, 2) }}
                    </span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="text-sm font-semibold leading-6">{{ Auth::user()->name }}</div>
                    <div class="text-xs leading-5 text-shark-400">
                        {{ Auth::user()->email }}
                    </div>
                </div>
            </a>
        </li>
    </ul>
</nav>
