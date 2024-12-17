<x-app-layout>

    @section('title','Dashboard')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid grid-cols-2	 gap-3 p-3">
            <div class="max-w-2xl font-semibold border-r-2 p-3">
                <p class="text-2xl capitalize font-semibold">
                    {{('User activity this device')}}
                </p>
                <ul class="mt-3 list-none text-2xl leading-10 bg-gray-600 hover:bg-gray-700 py-2 px-3 rounded-lg text-white">
                   <li>
                        Ip address ::
                   </li>
                   <li>
                    Country ::
                   </li>
                </ul>
            </div>

            <div class="max-w-2xl  py-2 px-3 rounded-lg font-semibold mx-auto">
                
            </div>
        </div>
    </div>
  

</x-app-layout>
