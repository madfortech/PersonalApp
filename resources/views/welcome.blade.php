<x-app-layout>
              {{-- <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Dashboard') }}
                </h2>
              </x-slot> --}}

              <div class="py-12 grid grid-rows-1 lg:grid-cols-1 gap-4">
               
                <div class="w-7/12 mx-auto sm:px-6 lg:px-8">
                 
                  <article class="prose lg:prose-xl">
                    @foreach($posts as $post)
                      <div class="border-2 mb-3 lg:px-3 lg:py-3 mx-auto">
                        <iframe class="w-full aspect-video" 
                          src="{{ $post->getFirstMediaUrl('avatar','preview') }}"
                          type="video/mp4"
                          controls
                          controlsList="nodownload">
                        </iframe>  
                        <div class="border-2 lg:py-3 lg:px-3">
                          <time>Publish on {{ \Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</time>
                          <h2>  {{ $post->title }}</h2>
                          <p class="line-clamp-3">  {{ $post->description }}</p>
                          <div>
                            <x-nav-link :href="route('posts.show', $post->slug)" class="no-underline">
                              {{ __('Read more') }}
                            </x-nav-link>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </article>
                </div>
              <div>
 
             
</x-app-layout>
