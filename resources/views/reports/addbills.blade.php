<x-layout>

    <div class="h-fit m-5">
        <div class="w-full flex flex-col pt-3 justify-center items-start">
            <a href="{{route('reports.accountingbills')}}">
                <i class=" fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="text-start text-2xl pt-3 m-3 font-bold">Accounting Bills - Electric Cost</h2>
        </div>
        <div class="grid grid-rows-2 items-start pt-10 w-60 space-y-3">
            <div>
                <label for="datepicker" class="block text-xl font-medium text-black">Date</label>
                <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
            </div>
            <div>
                <label for="electriccost" class="block text-xl font-medium text-black">Electric Cost </label>
                <input type="text" placeholder="E.G 10000" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div>
                <button type="button" class="text-white  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Save</button>
            </div>
        </div>
    </div>

</x-layout>