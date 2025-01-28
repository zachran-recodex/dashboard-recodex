<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-shark-900">
            Delete Account
        </h2>

        <p class="mt-1 text-sm text-shark-600">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting
            your account, please download any data or information that you wish to retain.
        </p>
    </header>

    <!-- Tombol untuk Membuka Modal -->
    <button type="button" onclick="openModal()"
        class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        Delete Account
    </button>

    <!-- Modal Konfirmasi Penghapusan Akun -->
    <div id="confirmationModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- Overlay -->
            <div class="fixed inset-0 transition-opacity bg-opacity-75 bg-shark-900" aria-hidden="true"></div>

            <!-- Modal Content -->
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <h3 class="text-lg font-medium leading-6 text-shark-900" id="modal-title">
                        Are you sure you want to delete your account?
                    </h3>
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')

                        <p class="mt-1 text-sm text-shark-600">
                            Once your account is deleted, all of its resources and data will be permanently deleted.
                            Please enter
                            your password to confirm you would like to permanently delete your account.
                        </p>

                        <div class="mt-6">
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" placeholder="Password"
                                class="mt-1 block w-3/4 rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                            @error('password', 'userDeletion')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6 flex justify-end">
                            <button type="button" onclick="closeModal()"
                                class="px-4 py-2 text-sm font-medium text-shark-700 bg-white border border-shark-300 rounded-md hover:bg-shark-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                Cancel
                            </button>
                            <button type="submit"
                                class="ms-3 px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                Delete Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function openModal() {
        document.getElementById('confirmationModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('confirmationModal').classList.add('hidden');
    }
</script>
