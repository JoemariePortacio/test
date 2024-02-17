<x-layout>


    <div class="h-full m-5  ">
        <div class="h-fit m-5">
            <div class="pt-12 w-full h-full flex flex-col space-y-10 justify-center items-start">
                <a href="{{route('settings')}}">
                    <i class=" fa-solid fa-arrow-left"></i>
                </a>
            </div>
            <div class="p-4 text-center font-bold text-3xl">
                <h3>Permission for Access Module</h3>
            </div>
            
            <fieldset class="w-full p-1 space-y-1 dark:text-black">
                <label for="Search" class="hidden">Search</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
                            <svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 dark:text-black">
                                <path d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z"></path>
                            </svg>
                        </button>
                    </span>
                    <input type="search" name="Search" placeholder="Search..." class="w-32 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none bg-slate-200">
                </div>
            </fieldset>

            <div class="overflow-x-auto p-5">
                <table class="min-w-full divide-y-2 text-sm">
                  <thead class="">
                    <tr>
                      <th class="whitespace-nowrap px-4 py-2 text-start font-medium text-gray-900">First Name</th>
                      <th class="whitespace-nowrap px-4 py-2 text-start font-medium text-gray-900">Last Name</th>
                      <th class="whitespace-nowrap px-4 py-2 text-start font-medium text-gray-900">Email</th>
                      <th class="whitespace-nowrap px-4 py-2 text-start font-medium text-gray-900">Role</th>
                      <th class="whitespace-nowrap px-4 py-2 text-start font-medium text-gray-900">Action</th>
                    </tr>
                  </thead>
    
                  <tbody class="divide-y-2">
                    <tr>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">John</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Doe</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">JohnDoe@gmail.com</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Purchasing</td>
                      <td>
                        <a href="{{route('settings.updateusers')}}">
                            <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-green-500 dark:text-gray-800">Permission</button>
                        </a>
                      </td> 
                    </tr>
    
                    <tr>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Jane</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Doe</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">JaneDoe@gmail.com</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Feedmill Manager</td>
                      <td>
                        <a href="{{route('settings.updateusers')}}">
                            <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-green-500 dark:text-gray-800">Permission</button>
                        </a>
                      </td>
    
                    </tr>
    
                    <tr>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Gary</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Barlow</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">GaryBarlow@gmail.com</td>
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Purchasing</td>
                      <td>
                        <a href="{{route('settings.updateusers')}}">
                            <button type="button" class="px-1 py-1 font-semibold rounded dark:bg-green-500 dark:text-gray-800">Permission</button>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
            <div class="w-full flex justify-between my-5 p-3">
                <div class="w-full flex justify-between my-5 p-3 text-xs font-medium">
                <div>
                    <a
                    href="#"
                    class="inline-flex size-8 items-center justify-center rounded border border-slate-300 hover:bg-slate-300 bg-white text-gray-900 rtl:rotate-180"
                    >
                    <span class="sr-only">Prev Page</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-3 w-3"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                        fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        />
                    </svg>
                    </a>
                    <a
                    href="#"
                    class="inline-flex size-8 rounded justify-center items-center border border-slate-300 hover:bg-slate-300 bg-white text-gray-900 rtl:rotate-180"
                    >
                    <span class="sr-only">Next Page</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-3 w-3"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        />
                    </svg>
                    </a>
                </div>
                <div class="flex justify-between">
                <div>
                    <a
                    href="#"
                    class="block size-8 rounded border border-slate-300 hover:bg-slate-300 bg-white text-center leading-8 text-gray-900"
                    >
                    1
                    </a>
                    
                </div>
    
                <div class="block size-8 rounded border-slate-300 hover:bg-slate-300 bg-white text-center leading-8 text-gray-900">
                    2
                </div>
    
                <div>
                    <a
                    href="#"
                    class="block size-8 rounded border border-slate-300 hover:bg-slate-300 bg-white text-center leading-8 text-gray-900"
                    >
                    3
                    </a>
                </div>
    
                <div>
                    <a
                    href="#"
                    class="block size-8 rounded border border-slate-300 hover:bg-slate-300 bg-white text-center leading-8 text-gray-900"
                    >
                    4
                    </a>
                </div>
                </div>
                </div>
            </div>
        </div>
</x-layout>