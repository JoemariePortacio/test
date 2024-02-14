<x-layout>


<div class="h-full m-5 ">
    <div class="h-fit m-5">
        <div class="pt-12 w-full h-full flex flex-col space-y-10 justify-center items-start">
            <a href="{{route('settings')}}">
                <i class=" fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <div class="p-4 text-center font-bold text-3xl">
            <h3>Accounts</h3>
        </div>
        <div class="flex justify-between my-5 p-3 ">
            <a href="">
            <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="{{route('settings.addaccount')}}" class="block rounded-lg bg-slate-300 px-4 py-2 text-sm font-medium text-gray-700">
                <p>Add Account</p>
            </a>
        </div>
        <div class="p-10 items-center h-full rounded-lg text-center shadow-2xl">
            <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

          <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2  text-sm">
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
        </div>
    </div>
</div>
</x-layout>