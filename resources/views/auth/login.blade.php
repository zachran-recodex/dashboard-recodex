<x-auth-layout>
    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="mb-8">
        <h2 class="font-bold text-4xl text-primary-500" aria-hidden="true">Recodex ID</h2>
        <h2 class="text-shark-950 text-2xl font-semibold mt-6 mb-2">Log in to your Account</h2>
        <p class="text-shark-600 text-sm">Welcome back! Good to see you again.</p>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Input -->
        <div>
            <label for="email" class="block text-sm font-medium text-shark-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                autocomplete="username"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Input -->
        <div>
            <label for="password" class="block text-sm font-medium text-shark-700">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="mt-1 block w-full rounded-md border-shark-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
            @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox"
                    class="rounded border-shark-300 text-primary-500 focus:ring-primary-400">
                <span class="ml-2 text-sm text-shark-600">Remember me</span>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-primary-500 hover:text-primary-400">
                    Forgot Password?
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-500 hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            Log In
        </button>
    </form>

    <!-- Register Link -->
    <p class="mt-6 text-center text-sm text-shark-600">
        Don't have an account?
        <a href="{{ route('register') }}" class="text-primary-500 hover:text-primary-400">
            Create an account
        </a>
    </p>
</x-auth-layout>
