<x-app-layout>
              @section('title','View All Post')
                <x-slot name="header">
                  <h2 class="font-semibold text-xl text-gray-800">
                    {{ __('All posts') }}
                  </h2>
                </x-slot>

               
                  <div class="lg:grid grid-cols-1 p-3 max-w-7xl mx-auto rounded-sm">
                   
                    <div class="p-5">
                      @include('partials.posts.view-all-posts')
                    </div>
                   
                  </div>
</x-app-layout>
 
 