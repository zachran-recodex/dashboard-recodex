<x-dashboard-layout>
    <x-page-header
        title="Table Data"
        :breadcrumbs="[
            ['label' => 'Dashboard', 'route' => route('admin.dashboard')],
            ['label' => 'Table'],
            ['label' => 'Data'],
        ]"
    />

    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="card border-0 overflow-hidden">
                <div class="card-header">
                    <h6 class="card-title mb-0 text-lg">Default Datatables</h6>
                </div>
                <div class="card-body">
                    <table id="selection-table" class="border border-neutral-200 dark:border-neutral-600 rounded-lg border-separate	">
                        <thead>
                        <tr>
                            <th scope="col" class="text-neutral-800 dark:text-white">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" id="serial" type="checkbox">
                                    <label class="ms-2 form-check-label" for="serial">
                                        S.L
                                    </label>
                                </div>
                            </th>
                            <th scope="col" class="text-neutral-800 dark:text-white">
                                <div class="flex items-center gap-2">
                                    Invoice
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="text-neutral-800 dark:text-white">
                                <div class="flex items-center gap-2">
                                    Name
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="text-neutral-800 dark:text-white">
                                <div class="flex items-center gap-2">
                                    Issued Date
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="text-neutral-800 dark:text-white">
                                <div class="flex items-center gap-2">
                                    Amount
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="text-neutral-800 dark:text-white">
                                <div class="flex items-center gap-2">
                                    Status
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="text-neutral-800 dark:text-white">
                                <div class="flex items-center gap-2">
                                    Action
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        01
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list1.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Kathryn Murphy</h6>
                                </div>
                            </td>
                            <td>25 Jan 2024</td>
                            <td>$200.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        02
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#696589</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list2.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Annette Black</h6>
                                </div>
                            </td>
                            <td>25 Jan 2024</td>
                            <td>$200.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        03
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list3.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Ronald Richards</h6>
                                </div>
                            </td>
                            <td>10 Feb 2024</td>
                            <td>$200.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        04
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526587</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list4.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Eleanor Pena</h6>
                                </div>
                            </td>
                            <td>10 Feb 2024</td>
                            <td>$150.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        05
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#105986</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list5.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Leslie Alexander</h6>
                                </div>
                            </td>
                            <td>15 March 2024</td>
                            <td>$150.00</td>
                            <td> <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm">Pending</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        06
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526589</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list6.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Albert Flores</h6>
                                </div>
                            </td>
                            <td>15 March 2024</td>
                            <td>$150.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        07
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526520</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list7.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Jacob Jones</h6>
                                </div>
                            </td>
                            <td>27 April 2024</td>
                            <td>$250.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        08
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list8.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Jerome Bell</h6>
                                </div>
                            </td>
                            <td>27 April 2024</td>
                            <td>$250.00</td>
                            <td> <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm">Pending</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        09
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#200257</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list9.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Marvin McKinney</h6>
                                </div>
                            </td>
                            <td>30 April 2024</td>
                            <td>$250.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        10
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526525</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list10.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Cameron Williamson</h6>
                                </div>
                            </td>
                            <td>30 April 2024</td>
                            <td>$250.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        01
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list1.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Kathryn Murphy</h6>
                                </div>
                            </td>
                            <td>25 Jan 2024</td>
                            <td>$200.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        02
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#696589</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list2.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Annette Black</h6>
                                </div>
                            </td>
                            <td>25 Jan 2024</td>
                            <td>$200.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        03
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list3.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Ronald Richards</h6>
                                </div>
                            </td>
                            <td>10 Feb 2024</td>
                            <td>$200.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        04
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526587</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list4.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Eleanor Pena</h6>
                                </div>
                            </td>
                            <td>10 Feb 2024</td>
                            <td>$150.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        05
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#105986</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list5.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Leslie Alexander</h6>
                                </div>
                            </td>
                            <td>15 March 2024</td>
                            <td>$150.00</td>
                            <td> <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm">Pending</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        06
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526589</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list6.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Albert Flores</h6>
                                </div>
                            </td>
                            <td>15 March 2024</td>
                            <td>$150.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        07
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526520</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list7.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Jacob Jones</h6>
                                </div>
                            </td>
                            <td>27 April 2024</td>
                            <td>$250.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        08
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list8.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Jerome Bell</h6>
                                </div>
                            </td>
                            <td>27 April 2024</td>
                            <td>$250.00</td>
                            <td> <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm">Pending</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        09
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#200257</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list9.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Marvin McKinney</h6>
                                </div>
                            </td>
                            <td>30 April 2024</td>
                            <td>$250.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="ms-2 form-check-label">
                                        10
                                    </label>
                                </div>
                            </td>
                            <td><a href="javascript:void(0)" class="text-primary-600">#526525</a></td>
                            <td>
                                <div class="flex items-center">
                                    <img src="{{ asset('') }}images/user-list/user-list10.png" alt="" class="shrink-0 me-3 rounded-lg">
                                    <h6 class="text-base mb-0 font-medium grow">Cameron Williamson</h6>
                                </div>
                            </td>
                            <td>30 April 2024</td>
                            <td>$250.00</td>
                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>

<script>
    if (document.getElementById("selection-table") && typeof simpleDatatables.DataTable !== 'undefined') {

        let multiSelect = true;
        let rowNavigation = false;
        let table = null;

        const resetTable = function() {
            if (table) {
                table.destroy();
            }

            const options = {
                columns: [
                    { select: [0, 6], sortable: false } // Disable sorting on the first column (index 0 and 6)
                ],
                rowRender: (row, tr, _index) => {
                    if (!tr.attributes) {
                        tr.attributes = {};
                    }
                    if (!tr.attributes.class) {
                        tr.attributes.class = "";
                    }
                    if (row.selected) {
                        tr.attributes.class += " selected";
                    } else {
                        tr.attributes.class = tr.attributes.class.replace(" selected", "");
                    }
                    return tr;
                }
            };
            if (rowNavigation) {
                options.rowNavigation = true;
                options.tabIndex = 1;
            }

            table = new simpleDatatables.DataTable("#selection-table", options);

            // Mark all rows as unselected
            table.data.data.forEach(data => {
                data.selected = false;
            });

            table.on("datatable.selectrow", (rowIndex, event) => {
                event.preventDefault();
                const row = table.data.data[rowIndex];
                if (row.selected) {
                    row.selected = false;
                } else {
                    if (!multiSelect) {
                        table.data.data.forEach(data => {
                            data.selected = false;
                        });
                    }
                    row.selected = true;
                }
                table.update();
            });
        };

        // Row navigation makes no sense on mobile, so we deactivate it and hide the checkbox.
        const isMobile = window.matchMedia("(any-pointer:coarse)").matches;
        if (isMobile) {
            rowNavigation = false;
        }

        resetTable();
    }
</script>