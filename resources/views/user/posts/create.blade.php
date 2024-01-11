<x-app-layout>
              <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{-- {{ __('Dashboard') }} --}}
                </h2>
              </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                  <div class="max-w-lg rounded overflow-hidden shadow-lg p-8 px-4">
                    <div class="prose lg:prose-xl">
                      <h2> Add New Post</h2>
                      <div>
                        @session('status')
                        <div class="alert alert-success bg-green-400 text-white p-2" role="alert">
                            {{ $value }}
                        </div>
                        @endsession
                      </div>
                    </div>
                       
                    <!-- Form -->
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    
                        @csrf
                        <x-honeypot />
                      
                        <div class="mt-4">
                            <label for="title" :value="__('Title')" >
                              <input id="title" type="text" 
                                class="rounded border-gray-300 text-indigo-600 
                                shadow-sm focus:ring-indigo-500 w-full" 
                                name="title"
                                placeholder="Title">
                              <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </label>
                        </div>
                        <!-- Title -->

                        <div class="mt-4">

                          <label for="avatar" :value="__('Avatar')" >
                            <input id="avatar" type="file" 
                              class="rounded border-gray-300 text-indigo-600 w-full
                              shadow-sm focus:ring-indigo-500" 
                              name="avatar">
                            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                          </label>
                        </div>
                      <!-- Avatar -->

                        <div class="mt-4">
                          <label for="content" :value="__('Content')" >
                           
                            <textarea 
                            name="description" 
                            id="my-text-area"
                            :value="old('description')"
                            cols="30" rows="10" class="block mt-1 w-full"
                            class="block mt-1 w-full"
                            placeholder="write content here">
                          </textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                          </label>                         
                        </div>
                        <!-- Description -->

                        <div class="mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Post') }}
                            </x-primary-button>
                        </div>
                    </form>


                    <!-- End Form -->
                  </div>
                </div>
            </div>
             
</x-app-layout>
