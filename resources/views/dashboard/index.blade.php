<x-dashboard-layout>
    <div class="space-y-6">
        <!-- Welcome Message -->
        <div class="bg-white rounded-lg shadow-sm border border-shark-100 p-6">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-shark-900">Welcome back, {{ Auth::user()->name }}!</h2>
                <!-- Kutipan Inspirasional -->
                <div class="mt-4 p-4 bg-primary-50 rounded-lg">
                    <p class="text-sm italic text-shark-700">{!! $quote !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
