<x-dashboard-layout>
    <x-page-header
        title="Currencies"
        :breadcrumbs="[
            ['label' => 'Dashboard', 'route' => route('admin.dashboard')],
            ['label' => 'Setting'],
            ['label' => 'Currencies'],
        ]"
    />

    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="card h-full p-0 rounded-xl border-0">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                    <div class="flex items-center flex-wrap gap-3">
                        <span class="text-base font-medium text-secondary-light mb-0">Show</span>
                        <select class="form-select form-select-sm w-auto dark:bg-neutral-600 dark:text-white border-neutral-200 dark:border-neutral-500 rounded-lg">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                        <form class="navbar-search">
                            <input type="text" class="bg-white dark:bg-neutral-700 h-10 w-auto" name="search" placeholder="Search">
                            <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                        </form>
                    </div>

                    <button type="button" data-modal-target="add-currency-modal" data-modal-toggle="add-currency-modal" class="btn btn-primary text-sm btn-sm px-3 py-3 rounded-lg flex items-center gap-2">
                        <iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>
                        Add Currency
                    </button>
                </div>
                <div class="card-body p-6">
                    <div class="relative overflow-x-auto">
                        <table class="table bordered-table sm-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col"> S.L</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Symbol</th>
                                <th scope="col" class="text-center">Code</th>
                                <th scope="col" class="text-center">Is Cryptocurrency</th>
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td class="text-center">Dollars(Default)</td>
                                <td class="text-center">$ </td>
                                <td class="text-center">USD</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td class="text-center">Taka</td>
                                <td class="text-center">৳ </td>
                                <td class="text-center">BDT</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td class="text-center">Rupee</td>
                                <td class="text-center">₹</td>
                                <td class="text-center">INR</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td class="text-center">Dollars</td>
                                <td class="text-center">$ </td>
                                <td class="text-center">USD</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td class="text-center">Taka</td>
                                <td class="text-center">৳ </td>
                                <td class="text-center">BDT</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="text-center">Rupee</td>
                                <td class="text-center">₹</td>
                                <td class="text-center">INR</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="text-center">Dollars</td>
                                <td class="text-center">$ </td>
                                <td class="text-center">USD</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="text-center">Taka</td>
                                <td class="text-center">৳ </td>
                                <td class="text-center">BDT</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="text-center">Rupee</td>
                                <td class="text-center">₹</td>
                                <td class="text-center">INR</td>
                                <td class="text-center">No</td>
                                <td>
                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center gap-3 justify-center">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 bg-hover-success-200 font-medium w-10 h-10 flex justify-center items-center rounded-full" data-modal-target="edit-currency-modal" data-modal-toggle="edit-currency-modal">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </button>
                                        <button type="button" class="remove-item-button bg-danger-100 bg-hover-danger-200 text-danger-600 font-medium w-10 h-10 flex justify-center items-center rounded-full">
                                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex items-center justify-between flex-wrap gap-2 mt-6">
                        <span>Showing 1 to 10 of 12 entries</span>
                        <ul class="pagination flex flex-wrap items-center gap-2 justify-center">
                            <li class="page-item">
                                <a class="page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class=""></iconify-icon></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base bg-primary-600 text-white" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class=""></iconify-icon> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Currency Modal -->
    <div id="add-currency-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add New Currency
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-currency-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <form action="#">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="sm:col-span-6">
                                <label for="nameTwo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Name </label>
                                <input type="text" id="nameTwo" class="form-control rounded-lg" placeholder="Enter Name">
                            </div>
                            <div class="sm:col-span-6">
                                <label for="country" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Country </label>
                                <select class="form-control rounded-lg form-select" id="country">
                                    <option selected disabled>Select symbol</option>
                                    <option>$</option>
                                    <option>৳</option>
                                    <option>₹</option>
                                </select>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="code" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Code </label>
                                <select class="form-control rounded-lg form-select" id="code">
                                    <option selected disabled>Select Code</option>
                                    <option>15</option>
                                    <option>26</option>
                                    <option>64</option>
                                    <option>25</option>
                                    <option>92</option>
                                </select>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="currency" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Is Cryptocurrency </label>
                                <select class="form-control rounded-lg form-select" id="currency">
                                    <option selected disabled>No</option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="col-span-12 flex items-center justify-center gap-3 mt-6">
                                <button type="reset" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg">
                                    Save Change
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Currency Modal -->
    <div id="edit-currency-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit Currency
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-currency-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <form action="#">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="sm:col-span-6">
                                <label for="name" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Name </label>
                                <input type="text" id="name" class="form-control rounded-lg" placeholder="Enter Name">
                            </div>
                            <div class="sm:col-span-6">
                                <label for="countryTwo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Country </label>
                                <select class="form-control rounded-lg form-select" id="countryTwo">
                                    <option selected disabled>Select symbol</option>
                                    <option>$</option>
                                    <option>৳</option>
                                    <option>₹</option>
                                </select>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="codeTwo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Code </label>
                                <select class="form-control rounded-lg form-select" id="codeTwo">
                                    <option selected disabled>Select Code</option>
                                    <option>15</option>
                                    <option>26</option>
                                    <option>64</option>
                                    <option>25</option>
                                    <option>92</option>
                                </select>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="currencyTwo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Is Cryptocurrency </label>
                                <select class="form-control rounded-lg form-select" id="currencyTwo">
                                    <option selected disabled>No</option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="col-span-12 flex items-center justify-center gap-3 mt-6">
                                <button type="reset" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg">
                                    Save Change
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>

<script>
    // Remove Tr when click on delete button js
    $('.remove-item-button').on('click', function () {
        $(this).closest('tr').addClass('hidden');
    });
</script>