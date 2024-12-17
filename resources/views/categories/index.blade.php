<x-app-layout>
    @section('title','View All Category')
      <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
        </h2>
      </x-slot>

     
        <div class="lg:flex flex-row gap-3 p-3 rounded-sm">
          <div class="basis-1/3 p-5 border-2 rounded-sm">
            @include('partials.posts.latest-posts')

            <div class="mt-3 p-2 py-4">
              @include('partials.categories.latest-categories')
            </div>
          </div>

          <div class="basis-1/2 p-5 border-2 rounded-sm">
            @include('partials.categories.view-all-categories')
          </div>
    
        </div>
</x-app-layout>

