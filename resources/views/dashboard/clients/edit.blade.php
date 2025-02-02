<x-dashboard-layout>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-shark-950">Edit Client</h1>
                <p class="mt-1 text-sm text-shark-500">Update client information</p>
            </div>
            <div class="mt-4 sm:mt-0 space-x-3">
                <a href="{{ route('clients.index') }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 rounded-md hover:bg-shark-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-shark-300">
                    <x-icons.left-arrow class="w-5 h-5 mr-2" />
                    Back to List
                </a>
                <a href="{{ route('clients.show', $client) }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary-500 rounded-md hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    <x-icons.eye class="w-5 h-5 mr-2" />
                    View Details
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-lg shadow-sm border border-shark-100">
            <div class="px-6 py-4 border-b border-shark-100">
                <h2 class="text-lg font-medium text-shark-900">Client Information</h2>
            </div>
            <div class="p-6">
                <form action="{{ route('clients.update', $client) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <!-- Client Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-shark-700">Client
                                    Name</label>
                                <input type="text" name="name" id="name"
                                    value="{{ old('name', $client->name) }}"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Domain -->
                            <div>
                                <label for="domain" class="block text-sm font-medium text-shark-700">Domain</label>
                                <input type="text" name="domain" id="domain"
                                    value="{{ old('domain', $client->domain) }}"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                @error('domain')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Type -->
                            <div>
                                <label for="type" class="block text-sm font-medium text-shark-700">Type</label>
                                <input type="text" name="type" id="type"
                                    value="{{ old('type', $client->type) }}"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                @error('type')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-sm font-medium text-shark-700">Status</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                    <option value="active"
                                        {{ old('status', $client->status) == 'active' ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="inactive"
                                        {{ old('status', $client->status) == 'inactive' ? 'selected' : '' }}>
                                        Inactive
                                    </option>
                                    <option value="suspended"
                                        {{ old('status', $client->status) == 'suspended' ? 'selected' : '' }}>
                                        Suspended
                                    </option>
                                </select>
                                @error('status')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-shark-700">Email</label>
                                <input type="email" name="email" id="email"
                                    value="{{ old('email', $client->email) }}"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-shark-700">Phone</label>
                                <input type="text" name="phone" id="phone"
                                    value="{{ old('phone', $client->phone) }}"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Billing Cycle -->
                            <div>
                                <label for="billing_cycle" class="block text-sm font-medium text-shark-700">Billing
                                    Cycle</label>
                                <select name="billing_cycle" id="billing_cycle"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                    <option value="monthly"
                                        {{ old('billing_cycle', $client->billing_cycle) == 'monthly' ? 'selected' : '' }}>
                                        Monthly</option>
                                    <option value="quarterly"
                                        {{ old('billing_cycle', $client->billing_cycle) == 'quarterly' ? 'selected' : '' }}>
                                        Quarterly</option>
                                    <option value="semi-annually"
                                        {{ old('billing_cycle', $client->billing_cycle) == 'semi-annually' ? 'selected' : '' }}>
                                        Semi-Annually</option>
                                    <option value="annually"
                                        {{ old('billing_cycle', $client->billing_cycle) == 'annually' ? 'selected' : '' }}>
                                        Annually</option>
                                </select>
                                @error('billing_cycle')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Address -->
                            <div class="sm:col-span-2">
                                <label for="address" class="block text-sm font-medium text-shark-700">Address</label>
                                <textarea name="address" id="address" rows="3"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">{{ old('address', $client->address) }}</textarea>
                                @error('address')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Image -->
                            <div class="sm:col-span-2">
                                <label for="image" class="block text-sm font-medium text-shark-700">Client
                                    Image</label>
                                @if ($client->image)
                                    <div class="mt-2 mb-4">
                                        <img src="{{ Storage::url($client->image) }}" alt="{{ $client->name }}"
                                            class="h-32 w-32 object-cover rounded-lg">
                                    </div>
                                @endif
                                <input type="file" name="image" id="image"
                                    class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                @error('image')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex items-center justify-end gap-x-3">
                            <a href="{{ route('clients.index') }}"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 rounded-md hover:bg-shark-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-shark-300">
                                Cancel
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary-500 rounded-md hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Danger Zone -->
        <div class="bg-white rounded-lg shadow-sm border border-red-200">
            <div class="px-6 py-4 border-b border-red-200">
                <h2 class="text-lg font-medium text-red-700">Danger Zone</h2>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-shark-900">Delete Client</h3>
                        <p class="mt-1 text-sm text-shark-500">
                            Once you delete a client, there is no going back. Please be certain.
                        </p>
                    </div>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('Are you sure you want to delete this client? This action cannot be undone.')"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-600">
                            <x-icons.trash class="w-5 h-5 mr-2" />
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
