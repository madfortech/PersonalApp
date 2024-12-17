<x-admin-layout>

    @section('title','Admin Dashboard')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
            {{ Auth::user()->name }}
        </h2>
        
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid grid-cols-2	 gap-3 p-3 rounded-sm">
          

            <div class="py-2 px-3 font-semibold border-gray-400 border-2 rounded capitalize mb-2 hover:border-gray-500">
               <a href="{{route('chart.index')}}">
                    <p class="text-xl mb-3"> business & analytics</p>
                
                    <p class="text-sm">download report</p>
               </a>
            </div>

            
            <div class="py-2 px-3 font-semibold border-gray-400 border-2 rounded capitalize mb-2 hover:border-gray-500">
                <a href="{{route('profile.edit')}}">
                    <p class="text-xl mb-3"> login & security</p>
             
                    <p class="text-sm">edit name profile</p>
                </a>
            </div>

        </div>
    </div>

    
  
</x-app-layout>

 