<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="lg:grid grid-rows-1 grid-cols-3 grid-flow-col gap-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <div class="max-w-md w-full lg:flex border-2 border-purple-600 mt-2">
            <div class="flex items-center py-5 px-6">
                <i data-feather="user"></i>
                <div class="text-sm ms-2 font-semibold">
                    <x-nav-link :href="route('users.create')" :active="request()->routeIs('users.create')">
                        {{ __('Users') }}
                    </x-nav-link>
                    
                    <p class="text-grey-dark">
                        {{ __(' create') }}
                    </p>
                </div>
            </div>
        </div>
        <!-- Users -->

        <div class="max-w-md w-full lg:flex border-2 border-purple-600 mt-2">
            <div class="flex items-center py-5 px-6">
                <i data-feather="user"></i>
                <div class="text-sm ms-2 font-semibold">
                    <x-nav-link :href="route('permissions.create')" :active="request()->routeIs('permissions.create')">
                        {{ __('Permission') }}
                    </x-nav-link>
                    
                    <p class="text-grey-dark">
                        {{ __(' create') }}
                    </p>
                </div>
            </div>
        </div>
        <!-- Permissions -->

    </div>

    <div class="lg:grid grid-cols-2 grid-flow-col gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
        <div class="chart-container">
           
        </div>
    </div>
   
       
</x-app-layout>

 
 