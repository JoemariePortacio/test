<x-layout>


<div class="h-full m-5 ">
    <div class="h-fit m-5">
        <div class="pt-12 w-full h-full flex flex-col space-y-10 justify-center items-start">
            <a href="{{route('settings.account')}}">
                <i class=" fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <div class="grid grid-cols-2 p-10 items-center">
            <div class="w-60 text-center space-y-3 items-center">
                <img src="{{asset('img/BGC-transparent.png')}}" alt="">
                <h3 class="font-bold">Rodgel Dantes</h3>
                <h2>ADMIN</h2>

            </div>
            <div class="p-10 rounded-lg w-full h-96 space-y-3 font-bold text-lg shadow-xl hover:text-gray-700">
                    <h3 class="font-bold text-xl">Details</h3>
                    <h3>User Name:</h3>
                    <h3>Contacts:</h3>
                    <h3>Email Address:</h3>
                    <div class="space-y-4 space-x-4">
                    <button type="button" class="px-8 py-3 font-semibold rounded dark:bg-green-500 dark:text-gray-800">Update</button>
                    <button type="button" class="px-8 py-3 font-semibold rounded dark:bg-red-500 dark:text-gray-800">Delete</button>
                    </div>
            </div>
        </div>
    </div>
</div>
</x-layout>