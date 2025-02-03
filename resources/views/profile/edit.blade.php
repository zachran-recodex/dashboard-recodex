<x-dashboard-layout>
    <div class="space-y-6">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-shark-950">Profile</h1>
                <p class="mt-1 text-sm text-shark-500">Manage your profile information</p>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('profile.partials.update-password-form')
            </div>

            <div class="col-span-2 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-dashboard-layout>
