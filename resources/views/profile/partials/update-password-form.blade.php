<section>
    <header>
        <h2 class="text-lg font-medium text-shark-900">
            Update Password
        </h2>

        <p class="mt-1 text-sm text-shark-600">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div>
            <label for="update_password_current_password" class="block text-sm font-medium text-shark-700">
                Current Password
            </label>
            <input id="update_password_current_password" name="current_password" type="password"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                autocomplete="current-password" />
            @error('current_password', 'updatePassword')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- New Password -->
        <div>
            <label for="update_password_password" class="block text-sm font-medium text-shark-700">
                New Password
            </label>
            <input id="update_password_password" name="password" type="password"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                autocomplete="new-password" />
            @error('password', 'updatePassword')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-medium text-shark-700">
                Confirm Password
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                autocomplete="new-password" />
            @error('password_confirmation', 'updatePassword')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit"
                class="px-4 py-2 bg-primary-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-600 focus:bg-primary-600 active:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Save
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-shark-600">Saved.</p>
            @endif
        </div>
    </form>
</section>
