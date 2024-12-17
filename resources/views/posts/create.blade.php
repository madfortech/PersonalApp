              <x-app-layout>

                @section('title','Post Create')

                <x-slot name="header">
                  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Add new posts') }}
                  </h2>
                </x-slot>

                  <div class="lg:grid grid-rows-1 max-w-7xl mx-auto	gap-3 p-3 rounded-sm">
                    
                      <div class="max-w-3xl border-2 py-2 px-3">
                        @include('partials.posts.create-post-form')
                      </div>
 
                
                  </div>
              
              </x-app-layout>
