<x-admin-layout>
              @section('title','Edit Post')
              <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Dashboard') }}
                </h2>
              </x-slot>

              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:flex flex-row gap-3 p-3 rounded-sm">
                    <div class="basis-1/3 p-5 border-2 rounded-sm">
                      @include('partials.posts.latest-posts')

                      <div class="mt-3 p-2 py-4">
                        @include('partials.categories.latest-categories')
                      </div>
                    
                    </div>
                
                    <div class="basis-1/2 p-5 border-2 rounded-sm">
                      
                      @include('partials.posts.edit-post-form')
                    </div>
                 
                
                </div>
              </div>
             
            
            
</x-admin-layout>
 