<x-layout>


<div class="h-fit m-5">
    <div class="pt-24 w-full h-full flex flex-col space-y-10 justify-center items-center">
        <h3 class="w-full mx-auto text-center text-4xl font-semibold"> 
            Setting
        </h3>
        <div class="grid grid-cols-2 gap-10 items-center pt-10 "> 
            <a href="{{route('settings.account')}}" class="p-10 rounded-lg items-center text-center shadow-xl hover:bg-slate-300   hover:text-gray-700">
                <i class="text-6xl fa-solid fa-users"></i>
                <div class="p-2 items-center text-center">
                    <h2 class="p2">Account</h2>
                    <p class="p-2">Manage Employee Account</p>
                </div>
            </a>
            <div class="p-10 items-center rounded-lg text-center shadow-xl hover:bg-slate-300   hover:text-gray-700">
                <i class="text-6xl fa-solid fa-address-book"></i>
                <div class="items-center text-center">
                    <h2 class="p-2">Activity Log</h2>
                    <p class="p-2">Manage your Business Activity</p>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>