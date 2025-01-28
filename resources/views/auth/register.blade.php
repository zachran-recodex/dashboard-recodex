<x-auth-layout>
    <div class="mb-8">
        <h2 class="font-bold text-4xl text-primary-500" aria-hidden="true">Recodex ID</h2>
        <h2 class="text-shark-950 text-2xl font-semibold mt-6 mb-2">Register Account</h2>
        <p class="text-shark-600 text-sm">Create your account by filling out the information below.</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-shark-700">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                autocomplete="name"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
            @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block text-sm font-medium text-shark-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                autocomplete="username"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-shark-700">Password</label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
            @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block text-sm font-medium text-shark-700">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
            @error('password_confirmation')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-shark-600 hover:text-shark-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
                href="{{ route('login') }}">
                Already registered?
            </a>

            <button type="submit"
                class="ms-4 inline-flex items-center px-4 py-2 bg-primary-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-600 focus:bg-primary-600 active:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Register
            </button>
        </div>
    </form>
</x-auth-layout>
