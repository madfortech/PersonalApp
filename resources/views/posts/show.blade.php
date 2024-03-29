<x-app-layout>

@section('title','Post')
                      
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight text-center">
      {{ $post->title }}
    </h2>
  </x-slot>

  <div class="lg:grid grid-cols-2 gap-3 mt-12">
      <div class="max-w-5xl p-5">
        <article class="prose lg:prose-xl rounded-md border-2 mb-4 p-4 max-w-md w-full">  
          
          <div class="mb-4">
          
            <div class="text-sm"> 
              <span class="p-1 capitalize bg-red-500 rounded-full text-white">
                {{ $post->user->name ?? 'Unknown User' }}
              </span>
            
              <span class="p-1 capitalize bg-red-500 rounded-full text-white">
                {{ $post->created_at }}
              </span>

            
                <span class="p-1 capitalize bg-red-500 rounded-full text-white">
                  @foreach($post->categories as $category)
                  {{ $category->name }}
                  @endforeach

                </span>
            

            </div>
          </div>

          @if($post->hasMedia('posts'))
            @foreach($post->getMedia('posts') as $media)

            
              <video 
                poster="{{ $media->getUrl('preview') }}" 
                src="{{ asset($media->getUrl()) }}"
                type="{{ $media->mime_type }}"
                data-overlay="1" 
                data-color="#fff000"
                data-ckin="default"
                alt=" {{ $post->title }}"
                class="aspect-auto w-full" 
                data-title="{{ $post->title }}">
              </video>
            @endforeach
          @endif

          <div class="card">
            <p class="text-2xl capitalize text-gray-900">
              {{ $post->description ?? '' }}
            </p>              
          </div>
        </article>
      </div>

      <div>
        aa
      </div>
    
    
  </div>

</x-app-layout>
 
 
 