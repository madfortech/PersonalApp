<x-app-layout>

    @section('title','Dashboard')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

        {{-- <div class="lg:flex flex-row gap-3 p-3 rounded-sm">
            <div class="basis-1/3 p-5 border-2 rounded-sm">
                
            </div>
        
            <div class="basis-1/2 p-5 border-2 rounded-sm">
                
            </div>
        
            <div class="basis-1/6 p-5 border-2 rounded-sm">
              
            </div>
        
        </div> --}}
     
</x-app-layout>
