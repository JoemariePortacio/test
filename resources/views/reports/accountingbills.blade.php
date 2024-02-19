<x-layout>


    <div class="h-fit m-5">
        <h2 class="text-start text-2xl pt-3 m-3 font-bold">Accounting Bills - Electric Cost</h2>
        <h2 class="text-start text-2xl pt-3 m-3 font-bold">REPORTS</h2>
        <div class="pt-5 w-24">
            <a href="{{route('accountingbills.addbill')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <p class="text-center">Add Bills</p>  
            </a>
        </div>
        <div class="overflow-x-auto p-5">
            <table class="min-w-full divide-y-2 text-sm">
              <thead class="">
                <tr>
                  <th class="whitespace-nowrap px-4 py-2 text-start font-medium text-gray-900">Date</th>
                  <th class="whitespace-nowrap px-4 py-2 text-start font-medium text-gray-900">Action</th>
                </tr>
              </thead>

              <tbody class="divide-y-2">
                <tr>
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">January 31 2024</td>
                  <td>
                    <a href="{{route('accountingbills.viewbill')}}">
                      <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-green-500 dark:text-gray-800">View</button>
                    </a>
                    <a href="">
                      <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-red-500 dark:text-gray-800">Delete</button>
                    </a>
                  </td> 
                </tr>

                <tr>
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">January 31 2024</td>
                  <td>
                    <a href="{{route('accountingbills.viewbill')}}">
                      <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-green-500 dark:text-gray-800">View</button>
                    </a>
                    <a href="">
                      <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-red-500 dark:text-gray-800">Delete</button>
                    </a>
                  </td>

                </tr>

                <tr>
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">January 31 2024</td>
                  <td>
                    <a href="{{route('accountingbills.viewbill')}}">
                      <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-green-500 dark:text-gray-800">View</button>
                    </a>
                    <a href="">
                      <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-red-500 dark:text-gray-800">Delete</button>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
    

</x-layout>

    {{-- <div class="grid grid-rows-2 items-start pt-10 w-60 space-y-3">
        <div class="">
            <label for="datepicker" class="block text-xl font-medium text-black">Date</label>
            <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
        </div>
        <div class="">
            <label for="electriccost" class="block text-xl font-medium text-black">Electric Cost </label>
            <input type="text" placeholder="E.G 10000" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
    </div> --}}