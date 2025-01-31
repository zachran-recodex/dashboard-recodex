<x-dashboard-layout>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-shark-950">Clients</h1>
                <p class="mt-1 text-sm text-shark-500">Manage your client list</p>
            </div>
            <div>
                <a href="{{ route('clients.create') }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary-500 rounded-md hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    <x-icons.plus class="w-5 h-5 mr-2" />
                    Add New Client
                </a>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-sm border border-shark-100 p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-primary-100 rounded-full">
                        <x-icons.people class="w-6 h-6 text-primary-500" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-shark-400">Total Clients</p>
                        <p class="text-2xl font-semibold text-shark-950">{{ $statistics['total'] }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-shark-100 p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-full">
                        <x-icons.rounded-check class="w-6 h-6 text-green-500" />

                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-shark-400">Active Clients</p>
                        <p class="text-2xl font-semibold text-shark-950">{{ $statistics['active'] }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-shark-100 p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-yellow-100 rounded-full">
                        <x-icons.clock class="w-6 h-6 text-yellow-500" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-shark-400">Expiring Soon</p>
                        <p class="text-2xl font-semibold text-shark-950">{{ $statistics['expiring_soon'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="bg-white rounded-lg shadow-sm border border-shark-100">
            <!-- Search and Filters -->
            <div class="p-6 border-b border-shark-100">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex-1 min-w-0 max-w-lg">
                        <form action="{{ route('clients.index') }}" method="GET" class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-shark-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text" name="search" value="{{ request('search') }}"
                                class="block w-full rounded-md border-0 py-2 pl-10 ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500"
                                placeholder="Search clients...">
                        </form>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-sm text-shark-500">Sort By:</div>
                        <select name="sort" onchange="this.form.submit()"
                            class="block rounded-md border-0 text-sm py-2 pl-3 pr-10 ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500">
                            <option value="name" {{ request('sort') === 'name' ? 'selected' : '' }}>Client
                                Name</option>
                            <option value="type" {{ request('sort') === 'type' ? 'selected' : '' }}>Type</option>
                            <option value="status" {{ request('sort') === 'status' ? 'selected' : '' }}>Status</option>
                            <option value="created_at" {{ request('sort') === 'created_at' ? 'selected' : '' }}>Created
                                Date</option>
                            <option value="expiry_date" {{ request('sort') === 'expiry_date' ? 'selected' : '' }}>
                                Expiry Date</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-shark-100">
                    <thead>
                        <tr class="bg-shark-50">
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Client
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Type
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Created Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Expiry Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-shark-100">
                        @forelse ($clients as $client)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            @if ($client->image)
                                                <img class="h-10 w-10 rounded-full object-cover border border-shark-200"
                                                    src="{{ Storage::url($client->image) }}"
                                                    alt="{{ $client->name }}">
                                            @else
                                                <div
                                                    class="h-10 w-10 rounded-full bg-primary-100 flex items-center justify-center">
                                                    <span class="text-primary-600 font-medium text-sm">
                                                        {{ substr($client->name, 0, 2) }}
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-shark-900">
                                                {{ $client->name }}
                                            </div>
                                            <a href="https://{{ $client->domain }}" target="_blank"
                                                class="text-sm text-primary-600 hover:text-primary-900">
                                                {{ $client->domain }}
                                            </a>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-shark-900">
                                    {{ $client->type }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    @switch($client->status)
                                        @case('active')
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        @break

                                        @case('inactive')
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-shark-100 text-shark-800">
                                                Inactive
                                            </span>
                                        @break

                                        @case('suspended')
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                Suspended
                                            </span>
                                        @break

                                        @default
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                Unknown
                                            </span>
                                    @endswitch
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-shark-500">
                                    {{ $client->created_at->format('M d, Y') }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-shark-500">
                                    <span class="{{ $client->expiry_date->isPast() ? 'text-red-600' : '' }}">
                                        {{ $client->expiry_date->format('M d, Y') }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center gap-3">
                                        <a href="{{ route('clients.show', $client) }}"
                                            class="text-primary-600 hover:text-primary-900" title="View Details">
                                            <x-icons.eye class="w-5 h-5" />
                                        </a>
                                        <a href="{{ route('clients.edit', $client) }}"
                                            class="text-shark-600 hover:text-shark-900" title="Edit">
                                            <x-icons.pen class="w-5 h-5" />
                                        </a>
                                        <form action="{{ route('clients.destroy', $client) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900"
                                                title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this client?')">
                                                <x-icons.trash class="w-5 h-5" />
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-10 text-center">
                                        <div class="flex flex-col items-center justify-center">
                                            <x-icons.clipboard class="w-12 h-12 text-shark-300" />
                                            <h3 class="mt-2 text-sm font-medium text-shark-900">No clients found</h3>
                                            <p class="mt-1 text-sm text-shark-500">
                                                Get started by creating a new client.
                                            </p>
                                            <div class="mt-6">
                                                <a href="{{ route('clients.create') }}"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary-500 rounded-md hover:bg-primary-600">
                                                    <x-icons.plus class="w-5 h-5 mr-2" />
                                                    Add New Client
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if ($clients->hasPages())
                    <div class="px-6 py-4 border-t border-shark-100">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <p class="text-sm text-shark-700">
                                    Showing {{ $clients->firstItem() }} to {{ $clients->lastItem() }} of
                                    {{ $clients->total() }} clients
                                </p>
                            </div>
                            <div>
                                {{ $clients->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                class="fixed bottom-4 right-4 px-4 py-2 bg-primary-500 text-white rounded-lg shadow-lg">
                {{ session('success') }}
            </div>
        @endif
    </x-dashboard-layout>
