<x-app-layout>

    @section('title','Category Create')

    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
      </h2>
    </x-slot>

      <div class="lg:flex flex-row gap-3 p-3 rounded-xs">
        <div class="basis-1/3 p-5 border-2 rounded-xs">
          @include('partials.posts.latest-posts')

         
          <div class="mt-3 p-2 py-4">
            @include('partials.categories.latest-categories')
          </div>
        
        </div>
    
        <div class="basis-1/2 p-5 border-2 rounded-xs">
          <h2 class="text-2xl">Add new category</h2>
          @include('partials.categories.create-category-form')
        </div>
    
      </div>
  
  </x-app-layout>
