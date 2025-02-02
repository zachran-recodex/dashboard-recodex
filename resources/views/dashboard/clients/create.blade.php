<x-dashboard-layout>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-shark-950">Create New Client</h1>
                <p class="mt-1 text-sm text-shark-500">Add a new client to your system</p>
            </div>
            <div class="mt-4 sm:mt-0">
                <a href="{{ route('clients.index') }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 rounded-md hover:bg-shark-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-shark-300">
                    <x-icons.left-arrow class="w-5 h-5 mr-2" />
                    Back to List
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-sm border border-shark-100">

                    <div class="px-6 py-4 border-b border-shark-100">
                        <h2 class="text-lg font-medium text-shark-900">Client Information</h2>
                    </div>

                    @if (session('error'))
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="p-6">
                        <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                    <!-- Client Name -->
                                    <div>
                                        <label for="name"
                                            class="block text-sm font-medium text-shark-700">Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                        @error('name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Domain -->
                                    <div>
                                        <label for="domain"
                                            class="block text-sm font-medium text-shark-700">Domain</label>
                                        <input type="text" name="domain" id="domain" value="{{ old('domain') }}"
                                            class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                        @error('domain')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Type -->
                                    <div>
                                        <label for="type"
                                            class="block text-sm font-medium text-shark-700">Type</label>
                                        <input type="text" name="type" id="type" value="{{ old('type') }}"
                                            class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                        @error('type')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Phone -->
                                    <div>
                                        <label for="phone"
                                            class="block text-sm font-medium text-shark-700">Phone</label>
                                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                            class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                        @error('phone')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <label for="email"
                                            class="block text-sm font-medium text-shark-700">Email</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                                            class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Billing Cycle -->
                                    <div>
                                        <label for="billing_cycle"
                                            class="block text-sm font-medium text-shark-700">Billing
                                            Cycle</label>
                                        <select name="billing_cycle" id="billing_cycle"
                                            class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">
                                            <option value="monthly"
                                                {{ old('billing_cycle') == 'monthly' ? 'selected' : '' }}>Monthly
                                            </option>
                                            <option value="quarterly"
                                                {{ old('billing_cycle') == 'quarterly' ? 'selected' : '' }}>Quarterly
                                            </option>
                                            <option value="semi-annually"
                                                {{ old('billing_cycle') == 'semi-annually' ? 'selected' : '' }}>
                                                Semi-Annually</option>
                                            <option value="annually"
                                                {{ old('billing_cycle') == 'annually' ? 'selected' : '' }}>Annually
                                            </option>
                                        </select>
                                        @error('billing_cycle')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Address -->
                                    <div class="sm:col-span-2">
                                        <label for="address"
                                            class="block text-sm font-medium text-shark-700">Address</label>
                                        <textarea name="address" id="address" rows="3"
                                            class="mt-1 block w-full rounded-md border-0 py-2 text-shark-900 shadow-sm ring-1 ring-inset ring-shark-200 focus:ring-2 focus:ring-primary-500 sm:text-sm">{{ old('address') }}</textarea>
                                        @error('address')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <!-- Image -->
                                    <div class="sm:col-span-2">
                                        <label for="image"
                                            class="block text-sm font-medium text-shark-700">Image</label>
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
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-sm border border-shark-100">
                    <div class="px-6 py-4 border-b border-shark-100">
                        <h2 class="text-lg font-medium text-shark-900">Client Details</h2>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <h3 class="text-sm font-medium text-shark-700">Image</h3>
                            <div id="imagePreview" class="mb-4 hidden">
                                <img id="previewImage" class="w-full h-32 object-cover rounded-lg">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-sm font-medium text-shark-700">Name</h3>
                                    <p id="previewName" class="mt-1 text-sm text-shark-900">-</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-shark-700">Domain</h3>
                                    <p id="previewDomain" class="mt-1 text-sm text-shark-900">-</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-shark-700">Type</h3>
                                    <p id="previewType" class="mt-1 text-sm text-shark-900">-</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-shark-700">Phone</h3>
                                    <p id="previewPhone" class="mt-1 text-sm text-shark-900">-</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-shark-700">Email</h3>
                                    <p id="previewEmail" class="mt-1 text-sm text-shark-900">-</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-shark-700">Billing Cycle</h3>
                                    <p id="previewBillingCycle" class="mt-1 text-sm text-shark-900">-</p>
                                </div>

                                <div class="col-span-2">
                                    <h3 class="text-sm font-medium text-shark-700">Address</h3>
                                    <p id="previewAddress" class="mt-1 text-sm text-shark-900">-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all form elements
            const nameInput = document.getElementById('name');
            const domainInput = document.getElementById('domain');
            const typeInput = document.getElementById('type');
            const phoneInput = document.getElementById('phone');
            const emailInput = document.getElementById('email');
            const addressInput = document.getElementById('address');
            const billingCycleInput = document.getElementById('billing_cycle');
            const imageInput = document.getElementById('image');

            // Get all preview elements
            const previewName = document.getElementById('previewName');
            const previewDomain = document.getElementById('previewDomain');
            const previewType = document.getElementById('previewType');
            const previewPhone = document.getElementById('previewPhone');
            const previewEmail = document.getElementById('previewEmail');
            const previewAddress = document.getElementById('previewAddress');
            const previewBillingCycle = document.getElementById('previewBillingCycle');
            const imagePreviewContainer = document.getElementById('imagePreview');
            const previewImage = document.getElementById('previewImage');

            // Function to update preview text
            function updatePreview(inputElement, previewElement) {
                inputElement.addEventListener('input', function() {
                    previewElement.textContent = this.value || '-';
                });
            }

            // Update text previews
            updatePreview(nameInput, previewName);
            updatePreview(domainInput, previewDomain);
            updatePreview(typeInput, previewType);
            updatePreview(phoneInput, previewPhone);
            updatePreview(emailInput, previewEmail);
            updatePreview(addressInput, previewAddress);
            updatePreview(billingCycleInput, previewBillingCycle);

            // Handle image preview
            imageInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        imagePreviewContainer.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                } else {
                    imagePreviewContainer.classList.add('hidden');
                }
            });
        });
    </script>
</x-dashboard-layout>
