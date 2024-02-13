<!DOCTYPE html>
<html lang="en" ng-app>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
  <body class="grid overflow-y-hidden grid-cols-5 grid-rows-10 md:w-screen h-screen">
      <div class="col-span-5 row-span-1 size-full">
        <nav class="bg-gray-700">
          <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
              <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="absolute -inset-0.5"></span>
                  <span class="sr-only">Open main menu</span>
                  <!--
                    Icon when menu is closed.
        
                    Menu open: "hidden", Menu closed: "block"
                  -->
                  <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                  <!--
                    Icon when menu is open.
        
                    Menu open: "block", Menu closed: "hidden"
                  -->
                  <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                  <img class="h-10 w-auto" src="{{asset('img/output-onlinepngtools.png')}}" alt="Your Company">
                </div>
              </div>
              <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">View notifications</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                  </svg>
                </button>
        
                <!-- Profile dropdown -->
                <div ng-init="profileTab = false" class="relative ml-3">
                  <div>
                    <button ng-click="profileTab = !profileTab" type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                      <img class="h-8 w-8 rounded-full" src="{{asset('img/joesss.jpg')}}" alt="">
                    </button>
                  </div>
        
                  <!--
                    Dropdown menu, show/hide based on menu state.
        
                    Entering: "transition ease-out duration-100"
                      From: "transform opacity-0 scale-95"
                      To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                      From: "transform opacity-100 scale-100"
                      To: "transform opacity-0 scale-95"
                  -->
                  <div ng-show="profileTab" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="{{route('settings')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="bg-gray-700 overflow-y-auto col-span-7 md:col-span-1 row-span-11 md:row-span-9 ">
        <div class="flex h-screen flex-col justify-between border-e ">
          <div class="px-4 py-6">
        
            <ul class="mt-6 space-y-1">
              <li>
                <a href="{{route('dashboard')}}" class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700">
                  Dashboard
                </a>
              </li>
        
              <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-white hover:bg-gray-100 hover:text-gray-700"
                  >
                    <span class="text-sm font-medium"> Formulation Storage </span>
        
                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </span>
                  </summary>
        
                  <ul class="mt-2 space-y-1 px-4">
                    <li>
                      <a
                        href="{{route('formulationstorage.micro')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Micro Storage
                      </a>
                    </li>

                    <li>
                      <a
                        href="{{route('formulationstorage.macro')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Macro Storage
                      </a>
                    </li>

                    <li>
                      <a
                        href="{{route('formulationstorage.medicine')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Medicine Storage
                      </a>
                    </li>
        
                    <li>
                      <a
                        href="{{route('formulationstorage.formulation')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Formulation
                      </a>
                    </li>
                  </ul>
                </details>
              </li>
        
              <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-white hover:bg-gray-100 hover:text-gray-700"
                  >
                    <span class="text-sm font-medium"> Records Inventory Management </span>
        
                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </span>
                  </summary>
        
                  <ul class="mt-2 space-y-1 px-4">
                    <li>
                      <a
                        href="{{route('recordsinventorysystem.feedrequest')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Feed Request Records
                      </a>
                    </li>
        
                    <li>
                      <a
                        href="{{route('recordsinventorysystem.farminformation')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Farm Informations
                      </a>
                    </li>

                    <li>
                      <a
                        href="{{route('recordsinventorysystem.accountingbills')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Accounting Bills
                      </a>
                    </li>

                    <li>
                      <a
                        href="{{route('recordsinventorysystem.accountingpayrolls')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Accounting Payrolls
                      </a>
                    </li>

                    <li>
                      <a
                        href="{{route('recordsinventorysystem.pivotlogs')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Pivot Logs
                      </a>
                    </li>

                    <li>
                      <a
                        href="{{route('recordsinventorysystem.auditlogs')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Audit Logs
                      </a>
                    </li>
                  </ul>
                </details>
              </li>
        
              <li>
              <details class="group [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-white hover:bg-gray-100 hover:text-gray-700"
                  >
                    <span class="text-sm font-medium"> Forecasting </span>
        
                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </span>
                  </summary>
        
                  <ul class="mt-2 space-y-1 px-4">
                    <li>
                      <a
                        href="{{route('forecasting.monitoringinventorylevels')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Monitoring Inventory Levels
                      </a>
                    </li>
        
                    <li>
                      <a
                        href="{{route('forecasting.messageonasana')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Message on Asana
                      </a>
                    </li>
                  </ul>
                </details>
              </li>
        
              <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-white hover:bg-gray-100 hover:text-gray-700"
                  >
                    <span class="text-sm font-medium"> Production Management </span>
        
                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </span>
                  </summary>
        
                  <ul class="mt-2 space-y-1 px-4">
                    <li>
                      <a
                        href="{{route('productionmanagement.productionorder')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Production Order
                      </a>
                    </li>
        
                    <li>
                      <a
                        href="{{route('productionmanagement.premixes')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Premixes
                      </a>
                    </li>

                    <li>
                      <a
                        href="{{route('productionmanagement.feedsinformation')}}"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                      >
                        Feeds Information
                      </a>
                    </li>

                  </ul>
                </details>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=" bg-white col-span-5  md:col-span-4 row-span-8 md:row-span-9 w-full overflow-y-auto">
            {{$slot}}
      </div>
  </body>
</html>