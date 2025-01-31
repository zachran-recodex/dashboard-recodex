<x-dashboard-layout>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-shark-950">Client Details</h1>
                <p class="mt-1 text-sm text-shark-500">View detailed information about the client</p>
            </div>
            <div class="mt-4 sm:mt-0 space-x-3">
                <a href="{{ route('clients.edit', $client) }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary-500 rounded-md hover:bg-primary-600">
                    Edit Client
                </a>
                <a href="{{ route('clients.index') }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 rounded-md hover:bg-shark-50">
                    Back to List
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Client Information Card -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-sm border border-shark-100">
                    <div class="px-6 py-4 border-b border-shark-100">
                        <h2 class="text-lg font-medium text-shark-900">Client Information</h2>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="flex items-start sm:items-center">
                            <div class="flex-shrink-0">
                                @if ($client->image)
                                    <img class="h-32 w-32 rounded-lg border border-shark-200 object-cover"
                                        src="{{ Storage::url($client->image) }}" alt="{{ $client->name }}"
                                        loading="lazy">
                                @else
                                    <div class="h-32 w-32 rounded-lg bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-semibold text-4xl uppercase">
                                            {{ substr($client->name, 0, 2) }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <div class="ml-6 flex-1 min-w-0">
                                <h3 class="text-xl font-medium text-shark-900 truncate">{{ $client->name }}</h3>
                                <p class="text-sm text-shark-500">{{ $client->email }}</p>
                                <p class="text-sm text-shark-500">{{ $client->phone }}</p>
                                <div class="mt-2">
                                    <a href="https://{{ $client->domain }}" target="_blank"
                                        class="inline-flex items-center text-primary-600 hover:text-primary-900">
                                        {{ $client->domain }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <dt class="text-sm font-medium text-shark-500">Type</dt>
                                <dd class="mt-1 text-sm text-shark-900">{{ $client->type }}</dd>
                            </div>

                            <div>
                                <dt class="text-sm font-medium text-shark-500">Status</dt>
                                <dd class="mt-1">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $client->status === 'active' ? 'bg-green-100 text-green-800' : ($client->status === 'inactive' ? 'bg-shark-100 text-shark-800' : 'bg-red-100 text-red-800') }}">
                                        {{ ucfirst($client->status) }}
                                    </span>
                                </dd>
                            </div>

                            <div>
                                <dt class="text-sm font-medium text-shark-500">Billing Cycle</dt>
                                <dd class="mt-1 text-sm text-shark-900">{{ Str::title($client->billing_cycle) }}</dd>
                            </div>

                            <div>
                                <dt class="text-sm font-medium text-shark-500">Expiry Date</dt>
                                <dd
                                    class="mt-1 text-sm {{ $client->expiry_date->isPast() ? 'text-red-600' : 'text-shark-900' }}">
                                    {{ $client->expiry_date->format('d F Y') }}
                                    @php
                                        $daysRemaining = now()->diffInDays($client->expiry_date, false);
                                    @endphp
                                    @if ($daysRemaining > 0)
                                        ({{ number_format($daysRemaining) }} days left)
                                    @elseif ($daysRemaining === 0)
                                        (Expires today)
                                    @else
                                        (Expired {{ abs($daysRemaining) }} days ago)
                                    @endif
                                </dd>
                            </div>

                            <div class="col-span-2">
                                <dt class="text-sm font-medium text-shark-500">Address</dt>
                                <dd class="mt-1 text-sm text-shark-900">{{ $client->address }}</dd>
                            </div>

                            <div>
                                <dt class="text-sm font-medium text-shark-500">Created At</dt>
                                <dd class="mt-1 text-sm text-shark-900">{{ $client->created_at->format('d F Y') }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-sm font-medium text-shark-500">Last Updated</dt>
                                <dd class="mt-1 text-sm text-shark-900">{{ $client->updated_at->format('d F Y') }}
                                </dd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Timeline -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-sm border border-shark-100">
                    <div class="px-6 py-4 border-b border-shark-100">
                        <h2 class="text-lg font-medium text-shark-900">Recent Activity</h2>
                    </div>
                    <div class="p-6">
                        <ul role="list" class="-mb-8">
                            <li class="relative pb-8">
                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-shark-200"
                                    aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span
                                            class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center ring-8 ring-white">
                                            <svg class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm text-shark-500">Client created</p>
                                        <p class="mt-0.5 text-sm text-shark-500">
                                            {{ $client->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
