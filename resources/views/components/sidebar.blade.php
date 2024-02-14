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