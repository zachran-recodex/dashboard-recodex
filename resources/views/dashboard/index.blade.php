<x-dashboard-layout>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <h1 class="text-2xl font-semibold text-shark-950">Dashboard</h1>
        </div>

        <!-- Main Content Area -->
        <div class="bg-white rounded-lg shadow-sm border border-shark-100">
            <!-- Search and Filters -->
            <div class="p-6 border-b border-shark-100">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex-1 min-w-0 max-w-lg">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <x-icons.search class="w-5 h-5 text-shark-400" />
                            </div>
                            <input type="text"
                                class="block w-full rounded-md border-0 py-2 pl-10 ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500"
                                placeholder="Search...">
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-sm text-shark-500">Sort By:</div>
                        <select
                            class="block rounded-md border-0 text-sm py-2 pl-3 pr-10 ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500">
                            <option>Client</option>
                            <option>Type</option>
                            <option>Status</option>
                            <option>Created Date</option>
                            <option>Expiry Date</option>
                        </select>
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-200 rounded-md hover:bg-shark-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            <svg class="w-5 h-5 mr-2 text-shark-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
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
                        @foreach ($clients as $client)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            @if ($client->image)
                                                <img class="h-10 w-10 rounded-full object-cover border border-shark-200"
                                                    src="{{ Storage::url($client->image) }}" alt="{{ $client->name }}">
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
                                    {{ $client->created_at->format('d M Y') }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-shark-500">
                                    <span class="{{ $client->expiry_date->isPast() ? 'text-red-600' : '' }}">
                                        {{ $client->expiry_date->format('d M Y') }}
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
                                            class="inline-flex">
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
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 bg-white border-t rounded-b-lg border-shark-100">
                {{ $clients->links() }}
            </div>
        </div>

        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <h1 class="text-2xl font-semibold text-shark-950">Invoice</h1>
        </div>

        <!-- Main Content Area -->
        <div class="bg-white rounded-lg shadow-sm border border-shark-100">
            <!-- Search and Filters -->
            <div class="p-6 border-b border-shark-100">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex-1 min-w-0 max-w-lg">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-shark-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text"
                                class="block w-full rounded-md border-0 py-2 pl-10 ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500"
                                placeholder="Search...">
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-sm text-shark-500">Sort By:</div>
                        <select
                            class="block rounded-md border-0 text-sm py-2 pl-3 pr-10 ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500">
                            <option>Invoice</option>
                            <option>Total</option>
                            <option>Invoice Date</option>
                            <option>Expiry Date</option>
                            <option>Status</option>
                        </select>
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-200 rounded-md hover:bg-shark-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            <svg class="w-5 h-5 mr-2 text-shark-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
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
                                Invoice
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Total
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Invoice Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Expiry Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-shark-100">
                        <!-- Sample Row 1 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="" class="text-sm text-blue-500 hover:text-blue-700">26381</a>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-shark-900">Rp55.500,00</td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-shark-500">2024-01-28</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-shark-500">2024-03-28</td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center gap-3">
                                    <button class="text-primary-500 hover:text-primary-700">
                                        <x-icons.eye class="w-5 h-5" />
                                    </button>
                                    <button class="text-shark-500 hover:text-shark-700">
                                        <x-icons.pen class="w-5 h-5" />
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <x-icons.trash class="w-5 h-5" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 bg-white border-t border-shark-100">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <p class="text-sm text-shark-700">
                            Showing 1 - 5 of 45 data
                        </p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button type="button" disabled
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary border border-shark-300 cursor-default leading-5 rounded-md">
                            1
                        </button>
                        <button type="button"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 leading-5 rounded-md hover:text-shark-500 focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500">
                            2
                        </button>
                        <button type="button"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 leading-5 rounded-md hover:text-shark-500 focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500">
                            3
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <h1 class="text-2xl font-semibold text-shark-950">Ticket</h1>
        </div>

        <!-- Main Content Area -->
        <div class="bg-white rounded-lg shadow-sm border border-shark-100">
            <!-- Search and Filters -->
            <div class="p-6 border-b border-shark-100">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex-1 min-w-0 max-w-lg">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-shark-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text"
                                class="block w-full rounded-md border-0 py-2 pl-10 ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500"
                                placeholder="Search...">
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-sm text-shark-500">Sort By:</div>
                        <select
                            class="block rounded-md border-0 text-sm py-2 pl-3 pr-10 ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500">
                            <option>Ticket</option>
                            <option>Status</option>
                            <option>Date</option>
                        </select>
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-200 rounded-md hover:bg-shark-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            <svg class="w-5 h-5 mr-2 text-shark-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
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
                                Ticket
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-shark-500 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-shark-100">
                        <!-- Sample Row 1 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="" class="text-sm text-blue-500 hover:text-blue-700">
                                    <span class="text-blue-700 font-semibold">[T26381]</span>
                                    Momok Hasyem nyaho teu
                                </a>
                                <p class="text-sm text-shark-500 truncate w-96">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit minus quos ducimus
                                    eius ullam ipsum, nostrum ea nam sint quis odit voluptas. Libero sint minus impedit
                                    fuga maiores, neque ex.
                                </p>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-shark-500">2024-01-28</td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center gap-3">
                                    <button class="text-primary-500 hover:text-primary-700">
                                        <x-icons.eye class="w-5 h-5" />
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <x-icons.trash class="w-5 h-5" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 bg-white border-t border-shark-100">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <p class="text-sm text-shark-700">
                            Showing 1 - 5 of 45 data
                        </p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button type="button" disabled
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary border border-shark-300 cursor-default leading-5 rounded-md">
                            1
                        </button>
                        <button type="button"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 leading-5 rounded-md hover:text-shark-500 focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500">
                            2
                        </button>
                        <button type="button"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 leading-5 rounded-md hover:text-shark-500 focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500">
                            3
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
