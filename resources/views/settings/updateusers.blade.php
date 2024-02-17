<x-layout>


<div class="h-fit m-5">
    <div class=" pt-8 w-full h-full flex flex-col space-y-10 justify-center items-start">
        <a href="{{route('settings.permissions')}}">
            <i class=" fa-solid fa-arrow-left"></i>
        </a>
    </div>
    <div class="p-4 text-center font-bold text-3xl">
        <h3>Access Control of User</h3>
    </div>
    <div class="flex justify-end my-5 p-3 ">
        <a href="" class="block rounded-lg bg-slate-300 px-4 py-2 text-sm font-medium text-gray-700">
            <p>Save</p>
        </a>
    </div>
    <div class="overflow-x-auto mt-7 flex flex-col space-y-5 divide-y divide-gray-400 ">
        <table class="table-row-group w-full">
            <tbody>
                <tr class="w-full flex justify-center items-center">
                    <td class="font-bold w-52">Dashboard</td>
                    <td class="flex justify-center items-center flex-col gap-2 mx-5 w-36">
                        <h1 class="text-sm  text-center">module</h1>
                        <input type="checkbox" class="size-8 rounded border-gray-300" />
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table-row-group pt-2 w-full">
            <tbody>
                <tr class="w-full flex justify-center items-center">
                    <td class="font-bold w-52">Settings</td>
                    <td class="flex justify-center items-center flex-col gap-2 mx-5 w-36">
                        <h1 class="text-sm  text-center">Account</h1>
                        <input type="checkbox" class="size-8 rounded border-gray-300" />
                    </td>
                    <td class="flex justify-center items-center flex-col gap-2 mx-5 w-36">
                        <h1 class="text-sm  text-center">Activity Log</h1>
                        <input type="checkbox" class="size-8 rounded border-gray-300" />
                    </td>
                    <td class="flex justify-center items-center flex-col gap-2 mx-5 w-36">
                        <h1 class="text-sm  text-center">Permission</h1>
                        <input type="checkbox" class="size-8 rounded border-gray-300" />
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>

</x-layout>