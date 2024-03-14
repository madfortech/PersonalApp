<x-admin-layout>
              @section('title','Edit Post')
              <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{-- {{ __('Dashboard') }} --}}
                </h2>
              </x-slot>

              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:flex flex-row gap-3 p-3 rounded-sm">
                    <div class="basis-1/3 p-5 border-2 rounded-sm">
                      @include('partials.latest-posts')
                    </div>
                
                    <div class="basis-1/2 p-5 border-2 rounded-sm">
                      
                      @include('partials.edit-post-form')
                    </div>
                
                    {{-- <div class="basis-1/6 p-5 border-2 rounded-sm">
                       a
                    </div> --}}
                
                </div>
              </div>
             
            
            
</x-admin-layout>
 