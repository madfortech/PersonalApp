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
                      <h2> Update Post</h2>
                      <div>
                        @if(session('success'))
                          <div class="alert alert-success text-gray-900 bg-green-800">
                              {{ session('success') }}
                          </div>
                        @endif
                      </div>
                    </div>
                       
                    <!-- Form -->
                    <form method="POST" action="{{ route('posts.update',$post) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      
                        <div class="mt-4">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" 
                            type="text" name="title" :value="old('title', $post->title)" 
                            autofocus autocomplete="title" 
                            placeholder="title"/>
                         </div>
                        <!-- Title -->

                        <div class="mt-4">
                          <x-input-label for="avatar" :value="__('Avatar')" />
                          <x-text-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" />
                         </div>
                      <!-- Avatar -->

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea name="description" id="description" 
                            cols="30" rows="10" class="block mt-1 w-full"
                            class="block mt-1 w-full">
                            {{ old('description', $post->description) }}
                            </textarea>
                         </div>
                        <!-- Description -->

                        <div class="mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Update Post') }}
                            </x-primary-button>
                        </div>
                    </form>
                    <!-- End Form -->
                  </div>
                </div>
            </div>
            
</x-app-layout>
 