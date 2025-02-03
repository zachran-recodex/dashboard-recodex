<x-dashboard-layout>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-shark-950">Client Details</h1>
                <p class="mt-1 text-sm text-shark-500">View detailed information about the client</p>
            </div>
            <div class="mt-4 sm:mt-0 space-x-3">
                <a href="{{ route('clients.index') }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 rounded-md hover:bg-shark-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-shark-300">
                    <x-icons.left-arrow class="w-5 h-5 mr-2" />
                    Back to List
                </a>
                <a href="{{ route('clients.edit', $client) }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary-500 rounded-md hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    <x-icons.pen class="w-5 h-5 mr-2" />
                    Edit Client
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
                                        class="inline-flex items-center text-primary-500 hover:text-primary-600">
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

                            <div class="col-span-2">
                                <dt class="text-sm font-medium text-shark-500">Address</dt>
                                <dd class="mt-1 text-sm text-shark-900">{{ $client->address }}</dd>
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
                            @forelse($client->recentActivities as $activity)
                                <li class="relative pb-8">
                                    @unless ($loop->last)
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-shark-200"
                                            aria-hidden="true"></span>
                                    @endunless
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span
                                                class="h-8 w-8 rounded-full flex items-center justify-center ring-8 ring-white
                                    {{ $activity->description === 'created'
                                        ? 'bg-green-100'
                                        : ($activity->description === 'deleted'
                                            ? 'bg-red-100'
                                            : 'bg-blue-100') }}">
                                                @if ($activity->description === 'created')
                                                    <x-icons.plus class="h-5 w-5 text-green-600" />
                                                @elseif($activity->description === 'deleted')
                                                    <x-icons.trash class="h-5 w-5 text-red-600" />
                                                @else
                                                    <x-icons.pen class="h-5 w-5 text-blue-600" />
                                                @endif
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <p class="text-sm text-shark-900">
                                                {{ ucfirst($activity->description) }}
                                            </p>
                                            @if ($activity->description === 'updated' && !empty($activity->changes['attributes']))
                                                <div class="mt-2">
                                                    <details class="group">
                                                        <summary
                                                            class="text-sm text-primary-600 hover:text-primary-700 cursor-pointer">
                                                            View changes
                                                        </summary>
                                                        <div class="mt-2 space-y-1">
                                                            @foreach ($activity->changes['attributes'] as $field => $newValue)
                                                                @if (isset($activity->changes['old'][$field]))
                                                                    <div class="text-xs space-y-1">
                                                                        <span class="font-medium text-shark-700">
                                                                            {{ Str::title(str_replace('_', ' ', $field)) }}:
                                                                        </span>
                                                                        <div class="ml-2">
                                                                            <span class="text-red-500 line-through">
                                                                                @if ($field === 'expiry_date')
                                                                                    {{ \Carbon\Carbon::parse($activity->changes['old'][$field])->format('H:i:s d-m-Y') }}
                                                                                @else
                                                                                    {{ is_bool($activity->changes['old'][$field]) ? ($activity->changes['old'][$field] ? 'Yes' : 'No') : $activity->changes['old'][$field] }}
                                                                                @endif
                                                                            </span>
                                                                            <span class="mx-1">→</span>
                                                                            <span class="text-green-500">
                                                                                @if ($field === 'expiry_date')
                                                                                    {{ \Carbon\Carbon::parse($newValue)->format('H:i:s d-m-Y') }}
                                                                                @else
                                                                                    {{ is_bool($newValue) ? ($newValue ? 'Yes' : 'No') : $newValue }}
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </details>
                                                </div>
                                            @endif
                                            <div class="mt-1 text-sm text-shark-500">
                                                {{ $activity->created_at->diffForHumans() }}
                                                @if ($activity->causer)
                                                    by {{ $activity->causer->name }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="text-center py-4">
                                    <p class="text-sm text-shark-500">No activity recorded yet</p>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-dashboard-layout>
