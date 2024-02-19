<x-layout>


<div class="h-full m-5 ">
    <div class="h-fit m-5">
        <div class="pt-12 w-full h-full flex flex-col space-y-10 justify-center items-start">
            <a href="{{route('settings')}}">
                <i class=" fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <div class="p-4 text-center font-bold text-3xl">
            <h3>Activity Log</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2  text-sm md:table-fixed">
              <thead class="">
                <tr>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Role</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
                </tr>
              </thead>

              <tbody class="divide-y">
                <tr>
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">John Doe</td>
                  <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                  <td>
                      <a href="{{route('settings.editaccount')}}">more details</a>
                  </td> 
                </tr>

                <tr>
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Jane Doe</td>
                  <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Designer</td>
                  <td>
                      <a href="">more details</a>
                  </td>

                </tr>

                <tr>
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Gary Barlow</td>
                  <td class="whitespace-nowrap px-4 py-2 text-gray-700">Singer</td>
                  <td>
                      <a href="">more details</a>
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