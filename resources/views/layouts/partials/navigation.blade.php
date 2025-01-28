<!-- resources/views/layouts/navigation.blade.php -->
<nav class="flex flex-col flex-1">
    <ul role="list" class="flex flex-col flex-1 gap-y-7">
        <li>
            <ul role="list" class="-mx-2 space-y-1">
                <!-- Dashboard -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                    class="flex items-center p-2 text-gray-700 rounded-md hover:bg-gray-50 gap-x-3 dark:text-gray-200 dark:hover:bg-gray-800">
                    <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Dashboard
                </x-nav-link>
            </ul>
        </li>

        <!-- Profile Section -->
        <li class="mt-auto">
            <a href="{{ route('profile.edit') }}"
                class="flex items-center -mx-2 p-2 text-gray-700 rounded-md hover:bg-gray-50 gap-x-3 dark:text-gray-200 dark:hover:bg-gray-800">
                <img class="w-8 h-8 rounded-full bg-gray-50"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                <div class="flex-1 min-w-0">
                    <div class="text-sm font-semibold leading-6">{{ Auth::user()->name }}</div>
                    <div class="text-xs leading-5 text-gray-500 truncate dark:text-gray-400">
                        {{ Auth::user()->email }}
                    </div>
                </div>
            </a>
        </li>
    </ul>
</nav>
