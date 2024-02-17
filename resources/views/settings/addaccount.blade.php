<x-layout>


<div class="h-fit m-5 ">
    <div class="h-fit m-5">
        <section class="p-6 bg-white">
            <form novalidate="" action="" class="container flex flex-col mx-auto space-y-12">
                    <div class="pt-12 w-full h-full flex flex-col space-y-10 justify-center items-start">
                            <a href="{{route('settings.account')}}">
                                <i class=" fa-solid fa-arrow-left"></i>
                            </a>
                        </div>
                    <div class="p-2 text-center font-bold text-3xl">
                            <h3>Create Account For Employee</h3>
                    </div>
                    <div class="flex flex-col space-y-3 items-center justify-center">
                        <div class="w-96 space-y-4">
                            <div>
                            <label for="HeadlineAct" class="block text-sm font-medium text-black"> Role </label>
                            <select
                                name="HeadlineAct"
                                id="HeadlineAct"
                                class="mt-1.5 w-full rounded-md border border-black  sm:text-sm"
                            >
                                <option value="">Please select</option>
                                <option value="JM">Admin</option>
                                <option value="SRV">Feedmill Manager</option>
                                <option value="SRV">Purchasing</option>
                            </select>
                            </div>
                            <div class="w-full ">
                                <x-input title="First Name"  />
                            </div>
                            <div class="w-full">
                                <x-input title="Last Name"  />
                            </div>
                            <div class="w-full">
                                <x-input title="Contact"  />
                            </div>
                            <div class="w-full">
                                <x-input title="User Name"  />
                            </div>
                            <div class="w-full">
                                <x-input title="Email Address"  />
                            </div>
                            <div class="w-full">
                                <x-input title="Password"  />
                            </div>
                            <div class="w-full">
                                <x-input title="Confirm Password"  />
                            </div>
                            <fieldset class="w-full space-y-1 text-black">
                                <label for="files" class="block text-lg font-medium">Attachments</label>
                                <div class="flex">
                                    <input type="file" name="files" id="files" class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 text-black bg-white">
                                </div>
                            </fieldset>
                            <span class=" inline-flex -space-x-px overflow-hidden rounded-md border bg-white shadow-sm">
                            <button
                                class="inline-block px-4 py-2 text-lg font-medium text-gray-700 hover:bg-slate-300 focus:relative"
                            >
                            <h2>Create</h2>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</x-layout>