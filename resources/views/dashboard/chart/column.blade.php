<x-dashboard-layout>
    <x-page-header
        title="Chart Column"
        :breadcrumbs="[
            ['label' => 'Dashboard', 'route' => route('admin.dashboard')],
            ['label' => 'Chart'],
            ['label' => 'Column']
        ]"
    />

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Column Charts</h6>
            </div>
            <div class="card-body p-6">
                <div id="columnChart" class=""></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Column Charts</h6>
            </div>
            <div class="card-body p-6">
                <div id="columnGroupBarChart" class=""></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Group Column</h6>
            </div>
            <div class="card-body p-6">
                <div id="groupColumnBarChart" class=""></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Simple Column</h6>
            </div>
            <div class="card-body p-6">
                <div id="upDownBarchart"></div>
            </div>
        </div>
    </div>
</x-dashboard-layout>

<script src="{{ asset('js/columnChartPageChart.js') }}"></script>