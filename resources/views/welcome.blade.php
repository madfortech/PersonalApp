<x-app-layout>
              
@section('title','Himanshu Nishad')

<div class="lg:grid grid-rows-1 grid-cols-1 mt-12">
  <div class="w-3/4 mx-auto p-4 rounded-sm">
        @foreach($post as $key => $item)
          <article class="border-2 mt-2 p-3"> 
  
            
              @foreach($item->getMedia('posts') as $media)

                <video 
                  controls 
                  controlsList="nodownload"
                  class="aspect-video" 
                  src="{{ asset($media->getUrl()) }}"
                  type="{{ $media->mime_type }}">
                </video>
              @endforeach
          
          
            <div class="card p-3">
              <h5 class="text-3xl capitalize"> {{ $item->title ?? '' }}</h5>
              <p class="text-2xl capitalize text-gray-900">
                {{ Illuminate\Support\Str::limit($item->description ?? '', 100) }}    
              </p>

              <div class="mt-3">
                <span class="px-3 p-1 capitalize bg-red-500 rounded-full text-white">
                  {{ $item->user->name ?? 'Unknown User' }}
                </span>
              </div>
              <div class="mt-3 py-3">
                <x-nav-link :href="route('posts.show', ['post' => $item->slug])">
                  {{ __('Read more') }}
                </x-nav-link>
              </div>
            </div>
          </article>
        @endforeach
      
  </div>
 

    
</div>
</x-app-layout>


 