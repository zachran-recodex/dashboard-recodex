<x-dashboard-layout>
    <x-page-header
        title="Widget"
        :breadcrumbs="[
            ['label' => 'Dashboard', 'route' => route('admin.dashboard')],
            ['label' => 'Widget'],
        ]"
    />

    <div class="card h-full p-0 rounded-xl border-0 overflow-hidden">
        <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
            <h6 class="text-lg font-semibold mb-0">Metrics</h6>
        </div>
        <div class="card-body p-6 flex flex-col gap-6">
            <!-- AI Widgets Start -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 3xl:grid-cols-5 gap-6">
                <div class="card shadow-none border border-gray-200 dark:border-neutral-600 dark:bg-neutral-700 rounded-lg h-full bg-gradient-to-r from-cyan-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <div>
                                <p class="font-medium text-neutral-900 dark:text-white mb-1">Total Users</p>
                                <h6 class="mb-0 dark:text-white">20,000</h6>
                            </div>
                            <div class="w-[50px] h-[50px] bg-cyan-600 rounded-full flex justify-center items-center">
                                <iconify-icon icon="gridicons:multiple-users" class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="font-medium text-sm text-neutral-600 dark:text-white mt-3 mb-0 flex items-center gap-2">
                            <span class="inline-flex items-center gap-1 text-success-600 dark:text-success-400"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +4000</span>
                            Last 30 days users
                        </p>
                    </div>
                </div><!-- card end -->
                <div class="card shadow-none border border-gray-200 dark:border-neutral-600 dark:bg-neutral-700 rounded-lg h-full bg-gradient-to-r from-purple-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <div>
                                <p class="font-medium text-neutral-900 dark:text-white mb-1">Total Subscription</p>
                                <h6 class="mb-0 dark:text-white">15,000</h6>
                            </div>
                            <div class="w-[50px] h-[50px] bg-purple-600 rounded-full flex justify-center items-center">
                                <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="font-medium text-sm text-neutral-600 dark:text-white mt-3 mb-0 flex items-center gap-2">
                            <span class="inline-flex items-center gap-1 text-danger-600 dark:text-danger-400"><iconify-icon icon="bxs:down-arrow" class="text-xs"></iconify-icon> -800</span>
                            Last 30 days subscription
                        </p>
                    </div>
                </div><!-- card end -->
                <div class="card shadow-none border border-gray-200 dark:border-neutral-600 dark:bg-neutral-700 rounded-lg h-full bg-gradient-to-r from-blue-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <div>
                                <p class="font-medium text-neutral-900 dark:text-white mb-1">Total Free Users</p>
                                <h6 class="mb-0 dark:text-white">5,000</h6>
                            </div>
                            <div class="w-[50px] h-[50px] bg-blue-600 rounded-full flex justify-center items-center">
                                <iconify-icon icon="fluent:people-20-filled" class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="font-medium text-sm text-neutral-600 dark:text-white mt-3 mb-0 flex items-center gap-2">
                            <span class="inline-flex items-center gap-1 text-success-600 dark:text-success-400"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +200</span>
                            Last 30 days users
                        </p>
                    </div>
                </div><!-- card end -->
                <div class="card shadow-none border border-gray-200 dark:border-neutral-600 dark:bg-neutral-700 rounded-lg h-full bg-gradient-to-r from-success-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <div>
                                <p class="font-medium text-neutral-900 dark:text-white mb-1">Total Income</p>
                                <h6 class="mb-0 dark:text-white">$42,000</h6>
                            </div>
                            <div class="w-[50px] h-[50px] bg-success-600 rounded-full flex justify-center items-center">
                                <iconify-icon icon="solar:wallet-bold" class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="font-medium text-sm text-neutral-600 dark:text-white mt-3 mb-0 flex items-center gap-2">
                            <span class="inline-flex items-center gap-1 text-success-600 dark:text-success-400"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$20,000</span>
                            Last 30 days income
                        </p>
                    </div>
                </div><!-- card end -->
                <div class="card shadow-none border border-gray-200 dark:border-neutral-600 dark:bg-neutral-700 rounded-lg h-full bg-gradient-to-r from-red-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <div>
                                <p class="font-medium text-neutral-900 dark:text-white mb-1">Total Expense</p>
                                <h6 class="mb-0 dark:text-white">$30,000</h6>
                            </div>
                            <div class="w-[50px] h-[50px] bg-red-600 rounded-full flex justify-center items-center">
                                <iconify-icon icon="fa6-solid:file-invoice-dollar" class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="font-medium text-sm text-neutral-600 dark:text-white mt-3 mb-0 flex items-center gap-2">
                            <span class="inline-flex items-center gap-1 text-success-600 dark:text-success-400"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$5,000</span>
                            Last 30 days expense
                        </p>
                    </div>
                </div><!-- card end -->
            </div>
            <!-- AI Widgets Start -->

            <!-- CRM Widgets Start -->
            <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-6">
                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-primary-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                              <span class="mb-0 w-[44px] h-[44px] bg-primary-600 shrink-0 text-white flex justify-center items-center rounded-full h6">
                                <iconify-icon icon="mingcute:user-follow-fill" class="icon"></iconify-icon>
                              </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">New Users</span>
                                    <h6 class="font-semibold">15,000</h6>
                                </div>
                            </div>

                            <div id="new-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+200</span> this week</p>
                    </div>
                </div>

                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-success-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                              <span class="mb-0 w-[44px] h-[44px] bg-success-600 shrink-0 text-white flex justify-center items-center rounded-full h6">
                                <iconify-icon icon="mingcute:user-follow-fill" class="icon"></iconify-icon>
                              </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">Active Users</span>
                                    <h6 class="font-semibold">8,000</h6>
                                </div>
                            </div>

                            <div id="active-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+200</span> this week</p>
                    </div>
                </div>

                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-warning-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                              <span class="mb-0 w-[44px] h-[44px] bg-warning-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                <iconify-icon icon="iconamoon:discount-fill" class="icon"></iconify-icon>
                              </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">Total Sales</span>
                                    <h6 class="font-semibold">$5,00,000</h6>
                                </div>
                            </div>

                            <div id="total-sales-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-danger-100 dark:bg-danger-600/25 px-1 py-px rounded font-medium text-danger-600 dark:text-danger-400 text-sm">-$10k</span> this week</p>
                    </div>
                </div>

                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-purple-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                              <span class="mb-0 w-[44px] h-[44px] bg-purple-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                <iconify-icon icon="mdi:message-text" class="icon"></iconify-icon>
                              </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">Conversion</span>
                                    <h6 class="font-semibold">25%</h6>
                                </div>
                            </div>

                            <div id="conversion-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+5%</span> this week</p>
                    </div>
                </div>
            </div>
            <!-- CRM Widgets Start -->

            <!-- Ecommerce Widgets Start -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 border border-neutral-200 dark:border-neutral-600">
                <div class="card-body p-6 h-full flex flex-col sm:border-r border-r-0 border-neutral-200 dark:border-neutral-600 last:border-r-0 border-b lg:border-b-0">
                    <div class="flex flex-wrap items-center justify-between gap-1 mb-0.5">
                        <div>
                                <span class="w-[44px] h-[44px] text-primary-600 dark:text-primary-500 bg-primary-600/20 border border-primary-300 dark:border-primary-600/50 shrink-0 flex justify-center items-center rounded-lg h6 mb-4">
                                    <iconify-icon icon="fa-solid:box-open" class="icon"></iconify-icon>
                                </span>
                            <span class="mb-1 font-medium text-secondary-light text-base">Total Products</span>
                            <h6 class="font-semibold text-neutral-900 mt-2 mb-px">300</h6>
                        </div>
                    </div>
                    <p class="text-sm mb-0 mt-3">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-500 text-sm">+200</span> this week</p>
                </div>
                <div class="card-body p-6 h-full flex flex-col lg:border-r border-r-0 border-neutral-200 dark:border-neutral-600 last:border-r-0 border-b lg:border-b-0">
                    <div class="flex flex-wrap items-center justify-between gap-1 mb-0.5">
                        <div>
                                <span class="w-[44px] h-[44px] text-warning-600 dark:text-warning-500 bg-warning-600/20 border border-warning-300 dark:border-warning-600/50 shrink-0 flex justify-center items-center rounded-lg h6 mb-4">
                                    <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                </span>
                            <span class="mb-1 font-medium text-secondary-light text-base">Total Customer</span>
                            <h6 class="font-semibold text-neutral-900 mt-2 mb-px">50,000</h6>
                        </div>
                    </div>
                    <p class="text-sm mb-0 mt-3">Increase by  <span class="bg-danger-100 dark:bg-danger-600/25 px-1 py-0.5 rounded-sm font-medium text-danger-600 dark:text-danger-500 text-sm">-5k</span> this week</p>
                </div>
                <div class="card-body p-6 h-full flex flex-col sm:border-r border-r-0 border-neutral-200 dark:border-neutral-600 last:border-r-0 border-b sm:border-b-0">
                    <div class="flex flex-wrap items-center justify-between gap-1 mb-0.5">
                        <div>
                                <span class="w-[44px] h-[44px] text-purple-600 dark:text-purple-500 bg-purple-600/20 border border-purple-300 dark:border-purple-600/50 shrink-0 flex justify-center items-center rounded-lg h6 mb-4">
                                    <iconify-icon icon="majesticons:shopping-cart" class="icon"></iconify-icon>
                                </span>
                            <span class="mb-1 font-medium text-secondary-light text-base">Total Orders</span>
                            <h6 class="font-semibold text-neutral-900 mt-2 mb-px">1400</h6>
                        </div>
                    </div>
                    <p class="text-sm mb-0 mt-3">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-500 text-sm">+1k</span> this week</p>
                </div>
                <div class="card-body p-6 h-full flex flex-col sm:border-r border-r-0 border-neutral-200 dark:border-neutral-600 last:border-r-0">
                    <div class="flex flex-wrap items-center justify-between gap-1 mb-0.5">
                        <div>
                                <span class="w-[44px] h-[44px] text-pink-600 dark:text-pink-500 bg-pink-600/20 border border-pink-300 dark:border-pink-600/50 shrink-0 flex justify-center items-center rounded-lg h6 mb-4">
                                    <iconify-icon icon="ri:discount-percent-fill" class="icon"></iconify-icon>
                                </span>
                            <span class="mb-1 font-medium text-secondary-light text-base">Total Sales</span>
                            <h6 class="font-semibold text-neutral-900 mt-2 mb-px">$25,00,000.00</h6>
                        </div>
                    </div>
                    <p class="text-sm mb-0 mt-3">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-500 text-sm">+$10k</span> this week</p>
                </div>
            </div>
            <!-- Ecommerce Widgets End -->

            <!-- Crypto Widgets Start -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 3xl:grid-cols-5 gap-6">
                <div class="card shadow-none border-gray-200 dark:border-neutral-600 bg-gradient-to-l from-warning-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center gap-3">
                            <img src="{{ asset('') }}images/currency/crypto-img1.png" alt="" class="w-10 h-10 rounded-full shrink-0">
                            <div class="grow">
                                <h6 class="text-xl mb-1">Bitcoin</h6>
                                <p class="font-medium text-secondary-light mb-0">BTC</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap justify-between items-center gap-1">
                            <div class="">
                                <h6 class="mb-2">$45,138</h6>
                                <span class="text-success-600 text-base">+ 27%</span>
                            </div>
                            <div id="bitcoinAreaChart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border-gray-200 dark:border-neutral-600 bg-gradient-to-l from-blue-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center gap-3">
                            <img src="{{ asset('') }}images/currency/crypto-img2.png" alt="" class="w-10 h-10 rounded-full shrink-0">
                            <div class="grow">
                                <h6 class="text-xl mb-1">Ethereum </h6>
                                <p class="font-medium text-secondary-light mb-0">ETH</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap justify-between items-center gap-1">
                            <div class="">
                                <h6 class="mb-2">$45,138</h6>
                                <span class="text-danger-600 text-base">- 27%</span>
                            </div>
                            <div id="ethereumAreaChart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border-gray-200 dark:border-neutral-600 bg-gradient-to-l from-purple-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center gap-3">
                            <img src="{{ asset('') }}images/currency/crypto-img3.png" alt="" class="w-10 h-10 rounded-full shrink-0">
                            <div class="grow">
                                <h6 class="text-xl mb-1">Solana</h6>
                                <p class="font-medium text-secondary-light mb-0">SOL</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap justify-between items-center gap-1">
                            <div class="">
                                <h6 class="mb-2">$45,138</h6>
                                <span class="text-success-600 text-base">+ 27%</span>
                            </div>
                            <div id="solanaAreaChart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border-gray-200 dark:border-neutral-600 bg-gradient-to-l from-primary-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center gap-3">
                            <img src="{{ asset('') }}images/currency/crypto-img4.png" alt="" class="w-10 h-10 rounded-full shrink-0">
                            <div class="grow">
                                <h6 class="text-xl mb-1">Litecoin</h6>
                                <p class="font-medium text-secondary-light mb-0">LTE</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap justify-between items-center gap-1">
                            <div class="">
                                <h6 class="mb-2">$45,138</h6>
                                <span class="text-success-600 text-base">+ 27%</span>
                            </div>
                            <div id="litecoinAreaChart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border-gray-200 dark:border-neutral-600 bg-gradient-to-l from-warning-600/10 to-bg-white">
                    <div class="card-body p-5">
                        <div class="flex flex-wrap items-center gap-3">
                            <img src="{{ asset('') }}images/currency/crypto-img5.png" alt="" class="w-10 h-10 rounded-full shrink-0">
                            <div class="grow">
                                <h6 class="text-xl mb-1">Dogecoin</h6>
                                <p class="font-medium text-secondary-light mb-0">DOGE</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap justify-between items-center gap-1">
                            <div class="">
                                <h6 class="mb-2">$45,138</h6>
                                <span class="text-success-600 text-base">+ 27%</span>
                            </div>
                            <div id="dogecoinAreaChart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Crypto Widgets End -->
        </div>
    </div>


    <!-- Widgets Start -->
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6 mt-6">
        <div class="col-span-12 xl:col-span-12 2xl:col-span-6">
            <div class="card h-full rounded-lg border-0">
                <div class="card-body">
                    <div class="flex flex-wrap items-center justify-between">
                        <h6 class="text-lg mb-0">Sales Statistic</h6>
                        <select class="form-select bg-white dark:bg-neutral-700 form-select-sm w-auto">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                    <div class="flex flex-wrap items-center gap-2 mt-2">
                        <h6 class="mb-0">$27,200</h6>
                        <span class="text-sm font-semibold rounded-full bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border border-success-200 dark:border-success-600/50 px-2 py-1.5 line-height-1 flex items-center gap-1">
                        10% <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon>
                        </span>
                        <span class="text-xs font-medium">+ $1400 Per Day</span>
                    </div>
                    <div id="chart" class="pt-[28px] apexcharts-tooltip-style-1"></div>
                </div>
            </div>
        </div>

        <div class="col-span-12 2xl:col-span-6">
            <div class="card h-full border-0">
                <div class="card-body">
                    <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                        <h6 class="font-bold text-lg mb-0">Top Countries</h6>
                        <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                            <option>Today</option>
                            <option>Weekly</option>
                            <option>Monthly</option>
                            <option>Yearly</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div id="world-map" class="h-full border border-neutral-200 dark:border-neutral-600 rounded-lg"></div>
                        <div class="h-full border border-neutral-200 dark:border-neutral-600 p-4 pe-0 rounded-lg">
                            <div class="max-h-[266px] overflow-y-auto scroll-sm pe-6">
                                <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                                    <div class="flex items-center w-full">
                                        <img src="{{ asset('') }}images/flags/flag1.png" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
                                        <div class="grow">
                                            <h6 class="text-sm mb-0">USA</h6>
                                            <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="w-full max-w-66 ms-auto">
                                            <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary-600 rounded-full" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">80%</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                                    <div class="flex items-center w-full">
                                        <img src="{{ asset('') }}images/flags/flag2.png" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
                                        <div class="grow">
                                            <h6 class="text-sm mb-0">Japan</h6>
                                            <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="w-full max-w-66 ms-auto">
                                            <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-orange rounded-full" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">60%</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                                    <div class="flex items-center w-full">
                                        <img src="{{ asset('') }}images/flags/flag3.png" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
                                        <div class="grow">
                                            <h6 class="text-sm mb-0">France</h6>
                                            <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="w-full max-w-66 ms-auto">
                                            <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-warning-600 rounded-full" style="width: 49%;"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">49%</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                                    <div class="flex items-center w-full">
                                        <img src="{{ asset('') }}images/flags/flag4.png" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
                                        <div class="grow">
                                            <h6 class="text-sm mb-0">Germany</h6>
                                            <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="w-full max-w-66 ms-auto">
                                            <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success-600 rounded-full" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">100%</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                                    <div class="flex items-center w-full">
                                        <img src="{{ asset('') }}images/flags/flag5.png" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
                                        <div class="grow">
                                            <h6 class="text-sm mb-0">South Korea</h6>
                                            <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="w-full max-w-66 ms-auto">
                                            <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-info-600 rounded-full" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">30%</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center w-full">
                                        <img src="{{ asset('') }}images/flags/flag1.png" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
                                        <div class="grow">
                                            <h6 class="text-sm mb-0">USA</h6>
                                            <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="w-full max-w-66 ms-auto">
                                            <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary-600 rounded-full" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Client Payment Status Start -->
        <div class="col-span-12 xl:col-span-6 2xl:col-span-4">
            <div class="card h-full rounded-lg border-0">
                <div class="card-body p-6">
                    <h6 class="mb-2 font-bold text-lg">Client Payment Status</h6>
                    <span class="text-sm font-medium text-secondary-light">Weekly Report</span>

                    <ul class="flex flex-wrap items-center justify-center mt-8">
                        <li class="flex items-center gap-2 me-7">
                            <span class="w-3 h-3 rounded-full bg-success-600"></span>
                            <span class="text-secondary-light text-sm font-medium">Paid: 400</span>
                        </li>
                        <li class="flex items-center gap-2 me-7">
                            <span class="w-3 h-3 rounded-full bg-info-600"></span>
                            <span class="text-secondary-light text-sm font-medium">Pending: 400</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-warning-600"></span>
                            <span class="text-secondary-light text-sm font-medium">Overdue: 1400</span>
                        </li>
                    </ul>
                    <div class="mt-[60px]">
                        <div id="paymentStatusChart" class="margin-16-minus"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Payment Status End -->

        <!-- Earning Static start -->
        <div class="col-span-12 xl:col-span-6 2xl:col-span-8">
            <div class="card h-full rounded-lg border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <div>
                            <h6 class="mb-2 font-bold text-lg">Earning Statistic</h6>
                            <span class="text-sm font-medium text-secondary-light">Yearly earning overview</span>
                        </div>
                        <div class="">
                            <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Today</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-5 flex justify-center flex-wrap gap-3">
                        <div class="inline-flex items-center gap-2 p-2 rounded-lg border transition hover:border-primary-600 border-neutral-200 dark:border-neutral-500 dark:hover:border-primary-600 pe-[46px] br-hover-primary group">
                                <span class="bg-neutral-100 dark:bg-neutral-600 w-[44px] h-[44px] text-2xl transition rounded-lg flex justify-center items-center text-secondary-light group-hover:text-white group-hover:bg-primary-600">
                                <iconify-icon icon="fluent:cart-16-filled" class="icon"></iconify-icon>
                                </span>
                            <div>
                                <span class="text-secondary-light text-sm font-medium">Sales</span>
                                <h6 class="text-base font-semibold mb-0">$200k</h6>
                            </div>
                        </div>

                        <div class="inline-flex items-center gap-2 p-2 rounded-lg border transition hover:border-primary-600 border-neutral-200 dark:border-neutral-500 dark:hover:border-primary-600 pe-[46px] br-hover-primary group">
                                <span class="bg-neutral-100 dark:bg-neutral-600 w-[44px] h-[44px] text-2xl transition rounded-lg flex justify-center items-center text-secondary-light group-hover:text-white group-hover:bg-primary-600">
                                <iconify-icon icon="uis:chart" class="icon"></iconify-icon>
                                </span>
                            <div>
                                <span class="text-secondary-light text-sm font-medium">Income</span>
                                <h6 class="text-base font-semibold mb-0">$200k</h6>
                            </div>
                        </div>

                        <div class="inline-flex items-center gap-2 p-2 rounded-lg border transition hover:border-primary-600 border-neutral-200 dark:border-neutral-500 dark:hover:border-primary-600 pe-[46px] br-hover-primary group">
                                <span class="bg-neutral-100 dark:bg-neutral-600 w-[44px] h-[44px] text-2xl transition rounded-lg flex justify-center items-center text-secondary-light group-hover:text-white group-hover:bg-primary-600">
                                <iconify-icon icon="ph:arrow-fat-up-fill" class="icon"></iconify-icon>
                                </span>
                            <div>
                                <span class="text-secondary-light text-sm font-medium">Profit</span>
                                <h6 class="text-base font-semibold mb-0">$200k</h6>
                            </div>
                        </div>
                    </div>

                    <div id="barChart"></div>
                </div>
            </div>
        </div>
        <!-- Earning Static End -->

        <!-- Users Overview Start -->
        <div class="col-span-12 xl:col-span-6 2xl:col-span-4">
            <div class="card h-full rounded-lg border-0 overflow-hidden">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="mb-2 font-bold text-lg">Users Overview</h6>
                        <div class="">
                            <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                <option>Today</option>
                                <option>Weekly</option>
                                <option>Monthly</option>
                                <option>Yearly</option>
                            </select>
                        </div>
                    </div>
                    <div id="userOverviewDonutChart"></div>
                    <ul class="flex flex-wrap items-center justify-between mt-4 gap-3">
                        <li class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-sm bg-primary-600"></span>
                            <span class="text-secondary-light text-sm font-normal">New:
                              <span class="text-neutral-600 dark:text-neutral-200 font-semibold">400</span>
                          </span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-sm bg-warning-600"></span>
                            <span class="text-secondary-light text-sm font-normal">Subscribed:
                              <span class="text-neutral-600 dark:text-neutral-200 font-semibold">300</span>
                          </span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- Users Overview End -->

        <!-- Recent Orders Start -->
        <div class="col-span-12 xl:col-span-6 2xl:col-span-4">
            <div class="card h-full border-0 rounded-lg">
                <div class="card-body p-6">
                    <h6 class="mb-3 font-bold text-lg">Recent Orders</h6>
                    <div class="flex items-center gap-2">
                        <h6 class="font-semibold mb-0">$27,200</h6>
                        <p class="text-sm mb-0">
                                <span class="bg-success-600/20 border border-success-600/25 px-2 py-1 rounded-full font-semibold text-success-600 dark:text-success-400 text-sm inline-flex items-center gap-1">
                                    10%
                                    <iconify-icon icon="iconamoon:arrow-up-2-fill" class="icon"></iconify-icon>
                                </span>
                            Increases
                        </p>
                    </div>
                    <div id="recent-orders" class="mt-7"></div>
                </div>
            </div>
        </div>
        <!-- Recent Orders End -->

        <!-- Statistics Start -->
        <div class="col-span-12 xl:col-span-6 2xl:col-span-4">
            <div class="card h-full rounded-lg border-0">
                <div class="card-body p-6">
                    <h6 class="mb-2 font-bold text-lg">Statistic</h6>

                    <div class="mt-6">
                        <div class="flex items-center gap-1 justify-between mb-11">
                            <div>
                                <span class="text-secondary-light font-normal mb-3 text-xl">Daily Conversions</span>
                                <h5 class="font-semibold mb-0">%60</h5>
                            </div>
                            <div class="relative">
                                <div id="semiCircleGauge"></div>

                                <span class="w-9 h-9 rounded-full bg-neutral-100 flex justify-center items-center absolute left-1/2 -translate-x-1/2 translate-y-[16px] top-1/2"><iconify-icon icon="mdi:emoji" class="text-primary-600 text-base mb-0"></iconify-icon></span>
                            </div>
                        </div>

                        <div class="flex items-center gap-1 justify-between mb-11">
                            <div>
                                <span class="text-secondary-light font-normal mb-3 text-xl">Visits By Day</span>
                                <h5 class="font-semibold mb-0">20k</h5>
                            </div>
                            <div id="areaChart"></div>
                        </div>

                        <div class="flex items-center gap-1 justify-between">
                            <div>
                                <span class="text-secondary-light font-normal mb-3 text-xl">Today Income</span>
                                <h5 class="font-semibold mb-0">$5.5k</h5>
                            </div>
                            <div id="dailyIconBarChart"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Statistics End -->

    </div>
    <!-- Widgets End -->
</x-dashboard-layout>

<script>

    // ================================== Crm Home widgets charts Start =================================
    function createWidgetChart(chartId, chartColor) {

        let currentYear = new Date().getFullYear();

        var options = {
            series: [
                {
                    name: 'series1',
                    data: [35, 45, 38, 41, 36, 43, 37, 55, 40],
                },
            ],
            chart: {
                type: 'area',
                width: 100,
                height: 42,
                sparkline: {
                    enabled: true // Remove whitespace
                },

                toolbar: {
                    show: false
                },
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2,
                colors: [chartColor],
                lineCap: 'round'
            },
            grid: {
                show: true,
                borderColor: 'transparent',
                strokeDashArray: 0,
                position: 'back',
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
                row: {
                    colors: undefined,
                    opacity: 0.5
                },
                column: {
                    colors: undefined,
                    opacity: 0.5
                },
                padding: {
                    top: -3,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            fill: {
                type: 'gradient',
                colors: [chartColor], // Set the starting color (top color) here
                gradient: {
                    shade: 'light', // Gradient shading type
                    type: 'vertical',  // Gradient direction (vertical)
                    shadeIntensity: 0.5, // Intensity of the gradient shading
                    gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                    inverseColors: false, // Do not invert colors
                    opacityFrom: .75, // Starting opacity
                    opacityTo: 0.3,  // Ending opacity
                    stops: [0, 100],
                },
            },
            // Customize the circle marker color on hover
            markers: {
                colors: [chartColor],
                strokeWidth: 2,
                size: 0,
                hover: {
                    size: 8
                }
            },
            xaxis: {
                labels: {
                    show: false
                },
                categories: [`Jan ${currentYear}`, `Feb ${currentYear}`, `Mar ${currentYear}`, `Apr ${currentYear}`, `May ${currentYear}`, `Jun ${currentYear}`, `Jul ${currentYear}`, `Aug ${currentYear}`, `Sep ${currentYear}`, `Oct ${currentYear}`, `Nov ${currentYear}`, `Dec ${currentYear}`],
                tooltip: {
                    enabled: false,
                },
            },
            yaxis: {
                labels: {
                    show: false
                }
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }

    // Call the function for each chart with the desired ID and color
    createWidgetChart('new-user-chart', '#487fff');
    createWidgetChart('active-user-chart', '#45b369');
    createWidgetChart('total-sales-chart', '#f4941e');
    createWidgetChart('conversion-user-chart', '#8252e9');
    // ================================== Crm Home widgets charts End =================================

    // ================================== Crm Home widgets charts Start =================================
    function createCoinChart(chartId, chartColor) {

        let currentYear = new Date().getFullYear();

        var options = {
            series: [
                {
                    name: 'series1',
                    data: [31, 24, 30, 25, 32, 28, 40, 32, 42, 38, 40, 32, 38, 35, 45],
                },
            ],
            chart: {
                type: 'area',
                width: 150,
                height: 70,

                sparkline: {
                    enabled: true // Remove whitespace
                },

                toolbar: {
                    show: false
                },
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                },
                events: {
                    mounted: function (chartContext, config) {
                        // Apply CSS blur to markers
                        document.querySelectorAll(`#${chartId} .apexcharts-marker`).forEach(marker => {
                            marker.style.filter = 'blur(2px)';
                        });
                    },
                    updated: function (chartContext, config) {
                        // Apply CSS blur to markers
                        document.querySelectorAll(`#${chartId} .apexcharts-marker`).forEach(marker => {
                            marker.style.filter = 'blur(3px)';
                        });
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2,
                colors: [chartColor],
                lineCap: 'round'
            },
            grid: {
                show: true,
                borderColor: 'transparent',
                strokeDashArray: 0,
                position: 'back',
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
                row: {
                    colors: undefined,
                    opacity: 0.5
                },
                column: {
                    colors: undefined,
                    opacity: 0.5
                },
                padding: {
                    top: -3,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            fill: {
                type: 'gradient',
                colors: [chartColor], // Set the starting color (top color) here
                gradient: {
                    shade: 'light', // Gradient shading type
                    type: 'vertical',  // Gradient direction (vertical)
                    shadeIntensity: 0.5, // Intensity of the gradient shading
                    gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                    inverseColors: false, // Do not invert colors
                    opacityFrom: .7 , // Starting opacity
                    opacityTo: 0.3,  // Ending opacity
                    stops: [0, 100],
                },
            },
            // Customize the circle marker color on hover
            markers: {
                colors: [chartColor],
                strokeWidth: 2,
                size: 0,
                hover: {
                    size: 8
                }
            },
            xaxis: {
                labels: {
                    show: false
                },
                categories: [`Jan ${currentYear}`, `Feb ${currentYear}`, `Mar ${currentYear}`, `Apr ${currentYear}`, `May ${currentYear}`, `Jun ${currentYear}`, `Jul ${currentYear}`, `Aug ${currentYear}`, `Sep ${currentYear}`, `Oct ${currentYear}`, `Nov ${currentYear}`, `Dec ${currentYear}`],
                tooltip: {
                    enabled: false,
                },
            },
            yaxis: {
                labels: {
                    show: false
                }
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }

    // Call the function for each chart with the desired ID and color
    createCoinChart('bitcoinAreaChart', '#F98C08');
    createCoinChart('ethereumAreaChart', '#5F80FF');
    createCoinChart('solanaAreaChart', '#C817F8');
    createCoinChart('litecoinAreaChart', '#2171EA');
    createCoinChart('dogecoinAreaChart', '#C2A633');
    // ================================== Crm Home widgets charts End =================================

    // =========================== Sales Statistic Line Chart Start ===============================
    var options = {
        series: [{
            name: "This month",
            data: [10, 20, 12, 30, 14, 35, 16, 32, 14, 25, 13, 28]
        }],
        chart: {
            height: 264,
            type: 'line',
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                top: 6,
                left: 0,
                blur: 4,
                color: "#000",
                opacity: 0.1,
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            colors: ['#487FFF'], // Specify the line color here
            width: 3
        },
        markers: {
            size: 0,
            strokeWidth: 3,
            hover: {
                size: 8
            }
        },
        tooltip: {
            enabled: true,
            x: {
                show: true,
            },
            y: {
                show: false,
            },
            z: {
                show: false,
            }
        },
        grid: {
            row: {
                colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
            borderColor: '#D1D5DB',
            strokeDashArray: 3,
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return "$" + value + "k";
                },
                style: {
                    fontSize: "14px"
                }
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            tooltip: {
                enabled: false
            },
            labels: {
                formatter: function (value) {
                    return value;
                },
                style: {
                    fontSize: "14px"
                }
            },
            axisBorder: {
                show: false
            },
            crosshairs: {
                show: true,
                width: 20,
                stroke: {
                    width: 0
                },
                fill: {
                    type: 'solid',
                    color: '#487FFF40',
                    // gradient: {
                    //   colorFrom: '#D8E3F0',
                    //   // colorTo: '#BED1E6',
                    //   stops: [0, 100],
                    //   opacityFrom: 0.4,
                    //   opacityTo: 0.5,
                    // },
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    // =========================== Sales Statistic Line Chart End ===============================

    // ================================ Earning Statistics bar chart Start ================================
    var options = {
        series: [{
            name: "Sales",
            data: [{
                x: 'Jan',
                y: 84000,
            }, {
                x: 'Feb',
                y: 70000,
            }, {
                x: 'Mar',
                y: 40000,
            }, {
                x: 'Apr',
                y: 40000,
            }, {
                x: 'May',
                y: 60000,
            }, {
                x: 'Jun',
                y: 40000,
            }, {
                x: 'Jul',
                y: 40000,
            }, {
                x: 'Aug',
                y: 40000,
            }, {
                x: 'Sep',
                y: 40000,
            }, {
                x: 'Oct',
                y: 60000,
            }, {
                x: 'Nov',
                y: 30000,
            }, {
                x: 'Dec',
                y: 40000,
            }]
        }],
        chart: {
            type: 'bar',
            height: 310,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                borderRadius: 4,
                horizontal: false,
                columnWidth: '23%',
                endingShape: 'rounded',
            }
        },
        dataLabels: {
            enabled: false
        },
        fill: {
            type: 'gradient',
            colors: ['#487FFF'], // Set the starting color (top color) here
            gradient: {
                shade: 'light', // Gradient shading type
                type: 'vertical',  // Gradient direction (vertical)
                shadeIntensity: 0.5, // Intensity of the gradient shading
                gradientToColors: ['#487FFF'], // Bottom gradient color (with transparency)
                inverseColors: false, // Do not invert colors
                opacityFrom: 1, // Starting opacity
                opacityTo: 1,  // Ending opacity
                stops: [0, 100],
            },
        },
        grid: {
            show: true,
            borderColor: '#D1D5DB',
            strokeDashArray: 4, // Use a number for dashed style
            position: 'back',
        },
        xaxis: {
            type: 'category',
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return (value / 1000).toFixed(0) + 'k';
                }
            }
        },
        tooltip: {
            y: {
                formatter: function (value) {
                    return value / 1000 + 'k';
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#barChart"), options);
    chart.render();
    // ================================ Earning Statistics bar chart End ================================

    // ================================ Users Overview Donut chart Start ================================
    var options = {
        series: [400, 400, 400],
        colors: ['#FF9F29', '#487FFF', '#E4F1FF'],
        labels: ['Active', 'New', 'Total'] ,
        legend: {
            show: false
        },
        chart: {
            type: 'donut',
            height: 270,
            sparkline: {
                enabled: true // Remove whitespace
            },
            margin: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            },
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            }
        },
        stroke: {
            width: 0,
        },
        dataLabels: {
            enabled: false
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }],
    };

    var chart = new ApexCharts(document.querySelector("#userOverviewDonutChart"), options);
    chart.render();
    // ================================ Users Overview Donut chart End ================================

    // ================================ Client Payment Status chart End ================================
    var options = {
        series: [{
            name: 'Net Profit',
            data: [44, 100, 40, 56, 30, 58, 50]
        }, {
            name: 'Revenue',
            data: [90, 140, 80, 125, 70, 140, 110]
        }, {
            name: 'Free Cash',
            data: [60, 120, 60, 90, 50, 95, 90]
        }],
        colors: ['#45B369', '#144bd6', '#FF9F29'],
        labels: ['Active', 'New', 'Total'] ,

        legend: {
            show: false
        },
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false
            },
        },
        grid: {
            show: true,
            borderColor: '#D1D5DB',
            strokeDashArray: 4, // Use a number for dashed style
            position: 'back',
        },
        plotOptions: {
            bar: {
                borderRadius: 4,
                columnWidth: 8,
            },
        },
        dataLabels: {
            enabled: false
        },
        states: {
            hover: {
                filter: {
                    type: 'none'
                }
            }
        },
        stroke: {
            show: true,
            width: 0,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
        },
        yaxis: {
            categories: ['0', '10,000', '20,000', '30,000', '50,000', '1,00,000', '1,00,000'],
        },
        fill: {
            opacity: 1,
            width: 18,
        },
    };

    var chart = new ApexCharts(document.querySelector("#paymentStatusChart"), options);
    chart.render();
    // ================================ Client Payment Status chart End ================================

    // ================================ J Vector Map Start ================================
    $('#world-map').vectorMap(
        {
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            borderColor: '#fff',
            borderOpacity: 0.25,
            borderWidth: 0,
            color: '#000000',
            regionStyle : {
                initial : {
                    fill : '#D1D5DB'
                }
            },
            markerStyle: {
                initial: {
                    r: 5,
                    'fill': '#fff',
                    'fill-opacity':1,
                    'stroke': '#000',
                    'stroke-width' : 1,
                    'stroke-opacity': 0.4
                },
            },
            markers : [{
                latLng : [35.8617, 104.1954],
                name : 'China : 250'
            },

                {
                    latLng : [25.2744, 133.7751],
                    name : 'AustrCalia : 250'
                },

                {
                    latLng : [36.77, -119.41],
                    name : 'USA : 82%'
                },

                {
                    latLng : [55.37, -3.41],
                    name : 'UK   : 250'
                },

                {
                    latLng : [25.20, 55.27],
                    name : 'UAE : 250'
                }],

            series: {
                regions: [{
                    values: {
                        "US": '#487FFF ',
                        "SA": '#487FFF',
                        "AU": '#487FFF',
                        "CN": '#487FFF',
                        "GB": '#487FFF',
                    },
                    attribute: 'fill'
                }]
            },
            hoverOpacity: null,
            normalizeFunction: 'linear',
            zoomOnScroll: false,
            scaleColors: ['#000000', '#000000'],
            selectedColor: '#000000',
            selectedRegions: [],
            enableZoom: false,
            hoverColor: '#fff',
        });
    // ================================ J Vector Map End ================================

    // ================================ Total Transaction line chart Start ================================
    var options = {
        series: [{
            name: "This month",
            data: [4, 16, 12, 28, 22, 38, 23]
        }],
        chart: {
            height: 290,
            type: 'line',
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                top: 6,
                left: 0,
                blur: 4,
                color: "#000",
                opacity: 0.1,
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 3
        },
        markers: {
            size: 0,
            strokeWidth: 3,
            hover: {
                size: 8
            }
        },
        tooltip: {
            enabled: true,
            x: {
                show: true,
            },
            y: {
                show: false,
            },
            z: {
                show: false,
            }
        },
        grid: {
            row: {
                colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
            borderColor: '#D1D5DB',
            strokeDashArray: 3,
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return "$" + value + "k";
                },
                style: {
                    fontSize: "14px"
                }
            },
        },
        xaxis: {
            categories: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            tooltip: {
                enabled: false
            },
            labels: {
                formatter: function (value) {
                    return value;
                },
                style: {
                    fontSize: "14px"
                }
            },
            axisBorder: {
                show: false
            },
            crosshairs: {
                show: true,
                width: 20,
                stroke: {
                    width: 0
                },
                fill: {
                    type: 'solid',
                    color: '#B1B9C4',
                    gradient: {
                        colorFrom: '#D8E3F0',
                        colorTo: '#BED1E6',
                        stops: [0, 100],
                        opacityFrom: 0.4,
                        opacityTo: 0.5,
                    },
                }
            }
        }
    };
    // ================================ Total Transaction line chart End ================================

    // ================================ Semi Circle Gauge (Daily Conversion) chart Start ================================
    var options = {
        series: [75],
        chart: {
            height: 165,
            width: 120,
            type: 'radialBar',
            sparkline: {
                enabled: false // Remove whitespace
            },
            toolbar: {
                show: false
            },
            padding: {
                left: -32,
                right: -32,
                top: -32,
                bottom: -32
            },
            margin: {
                left: -32,
                right: -32,
                top: -32,
                bottom: -32
            }
        },
        plotOptions: {
            radialBar: {
                offsetY: -24,
                offsetX: -14,
                startAngle: -90,
                endAngle: 90,
                track: {
                    background: "#E3E6E9",
                    // strokeWidth: 32,
                    dropShadow: {
                        enabled: false,
                        top: 2,
                        left: 0,
                        color: '#999',
                        opacity: 1,
                        blur: 2
                    }
                },
                dataLabels: {
                    show: false,
                    name: {
                        show: false
                    },
                    value: {
                        offsetY: -2,
                        fontSize: '22px'
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            colors: ['#9DBAFF'],
            gradient: {
                shade: 'dark',
                type: 'horizontal',
                shadeIntensity: 0.5,
                gradientToColors: ['#487FFF'],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100]
            }
        },
        stroke: {
            lineCap: 'round',
        },
        labels: ['Percent'],
    };

    var chart = new ApexCharts(document.querySelector("#semiCircleGauge"), options);
    chart.render();
    // ================================ Semi Circle Gauge (Daily Conversion) chart End ================================

    // ================================ Area chart Start ================================
    function createChart(chartId, chartColor) {

        let currentYear = new Date().getFullYear();

        var options = {
            series: [
                {
                    name: 'series1',
                    data: [0, 10, 8, 25, 15, 26, 13, 35, 15, 39, 16, 46, 42],
                },
            ],
            chart: {
                type: 'area',
                width: 164,
                height: 72,

                sparkline: {
                    enabled: true // Remove whitespace
                },

                toolbar: {
                    show: false
                },
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2,
                colors: [chartColor],
                lineCap: 'round'
            },
            grid: {
                show: true,
                borderColor: 'transparent',
                strokeDashArray: 0,
                position: 'back',
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
                row: {
                    colors: undefined,
                    opacity: 0.5
                },
                column: {
                    colors: undefined,
                    opacity: 0.5
                },
                padding: {
                    top: -3,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            fill: {
                type: 'gradient',
                colors: [chartColor], // Set the starting color (top color) here
                gradient: {
                    shade: 'light', // Gradient shading type
                    type: 'vertical',  // Gradient direction (vertical)
                    shadeIntensity: 0.5, // Intensity of the gradient shading
                    gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                    inverseColors: false, // Do not invert colors
                    opacityFrom: .8, // Starting opacity
                    opacityTo: 0.3,  // Ending opacity
                    stops: [0, 100],
                },
            },
            // Customize the circle marker color on hover
            markers: {
                colors: [chartColor],
                strokeWidth: 2,
                size: 0,
                hover: {
                    size: 8
                }
            },
            xaxis: {
                labels: {
                    show: false
                },
                categories: [`Jan ${currentYear}`, `Feb ${currentYear}`, `Mar ${currentYear}`, `Apr ${currentYear}`, `May ${currentYear}`, `Jun ${currentYear}`, `Jul ${currentYear}`, `Aug ${currentYear}`, `Sep ${currentYear}`, `Oct ${currentYear}`, `Nov ${currentYear}`, `Dec ${currentYear}`],
                tooltip: {
                    enabled: false,
                },
            },
            yaxis: {
                labels: {
                    show: false
                }
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }

    // Call the function for each chart with the desired ID and color
    createChart('areaChart', '#FF9F29');
    // ================================ Area chart End ================================

    // ================================ Bar chart (Today Income0 Start ================================
    var options = {
        series: [{
            name: "Sales",
            data: [{
                x: 'Mon',
                y: 20,
            }, {
                x: 'Tue',
                y: 40,
            }, {
                x: 'Wed',
                y: 20,
            }, {
                x: 'Thur',
                y: 30,
            }, {
                x: 'Fri',
                y: 40,
            }, {
                x: 'Sat',
                y: 35,
            }]
        }],
        chart: {
            type: 'bar',
            width: 164,
            height: 80,
            sparkline: {
                enabled: true // Remove whitespace
            },
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                borderRadius: 6,
                horizontal: false,
                columnWidth: 14,
            }
        },
        dataLabels: {
            enabled: false
        },
        states: {
            hover: {
                filter: {
                    type: 'none'
                }
            }
        },
        fill: {
            type: 'gradient',
            colors: ['#E3E6E9'], // Set the starting color (top color) here
            gradient: {
                shade: 'light', // Gradient shading type
                type: 'vertical',  // Gradient direction (vertical)
                shadeIntensity: 0.5, // Intensity of the gradient shading
                gradientToColors: ['#E3E6E9'], // Bottom gradient color (with transparency)
                inverseColors: false, // Do not invert colors
                opacityFrom: 1, // Starting opacity
                opacityTo: 1,  // Ending opacity
                stops: [0, 100],
            },
        },
        grid: {
            show: false,
            borderColor: '#D1D5DB',
            strokeDashArray: 1, // Use a number for dashed style
            position: 'back',
        },
        xaxis: {
            labels: {
                show: false // Hide y-axis labels
            },
            type: 'category',
            categories: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat']
        },
        yaxis: {
            labels: {
                show: false,
                formatter: function (value) {
                    return (value / 1000).toFixed(0) + 'k';
                }
            }
        },
        tooltip: {
            y: {
                formatter: function (value) {
                    return value / 1000 + 'k';
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#dailyIconBarChart"), options);
    chart.render();
    // ================================ Bar chart (Today Income0 End ================================

    // ================================ Recent Orders Chart Start ================================
    function createChartTwo(chartId, chartColor) {

        var options = {
            series: [
                {
                    name: 'This Day',
                    data: [18, 25, 20, 35, 25, 55, 45, 50, 40],
                },
            ],
            chart: {
                type: 'line',
                width: '100%',
                height: 360,
                sparkline: {
                    enabled: false // Remove whitespace
                },
                toolbar: {
                    show: false
                },
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 4,
                colors: [chartColor],
                lineCap: 'round'
            },
            grid: {
                show: true,
                borderColor: '#D1D5DB',
                strokeDashArray: 1,
                position: 'back',
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: true
                    }
                },
                row: {
                    colors: undefined,
                    opacity: 0.5
                },
                column: {
                    colors: undefined,
                    opacity: 0.5
                },
                padding: {
                    top: -30,
                    right: 0,
                    bottom: -10,
                    left: 0
                },
            },
            // Customize the circle marker color on hover
            markers: {
                colors: [chartColor],
                strokeWidth: 3,
                size: 0,
                hover: {
                    size: 10
                }
            },
            xaxis: {
                labels: {
                    show: false
                },
                categories: [`Jan`, `Feb`, `Mar`, `Apr`, `May`, `Jun`, `Jul`, `Aug`, `Sep`, `Oct`, `Nov`, `Dec`],
                tooltip: {
                    enabled: false,
                },
                tooltip: {
                    enabled: false
                },
                labels: {
                    formatter: function (value) {
                        return value;
                    },
                    style: {
                        fontSize: "14px"
                    }
                },
            },
            yaxis: {
                labels: {
                    show: false
                },
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }
    createChartTwo('recent-orders', '#487fff');
    // ================================ Recent Orders Chart End ================================


</script>