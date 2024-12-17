<x-app-layout>

@section('title', 'Himanshu Nishad')

@section('content')

<div class="lg:grid grid-cols-4 gap-4 mt-12 px-4 sm:px-6 lg:px-8">
  @foreach($post as $key => $item)
    <div class="p-4  origin-center rotate-1 hover:rotate-2">
 
      <article class="prose lg:prose-xl rounded-md border-2 mb-4 p-4">
       
        <div class="mb-4">
         
          <div class="text-sm">
            <span class="mr-2 p-1 px-1 capitalize bg-gray-500 rounded-full text-white">
              {{ $item->user->name ?? 'Unknown User' }}
            </span>
         
          </div>
        </div>
        
        @foreach($item->getMedia('posts') as $media)
          <video 
            poster="{{ $media->getUrl('preview') }}" 
            src="{{ asset($media->getUrl()) }}"
            type="{{ $media->mime_type }}"
            data-overlay="1" 
            controlslist="nodownload"
            data-color="#fff000"
            data-ckin="default"
            alt=" {{ $item->title }}"
            class="aspect-auto w-full" 
            data-title="{{ $item->title }}">
          </video>
          
        @endforeach
        <div class="card">
          <h3 class="border-b-2 text-xl">
            {{ $item->title }}
          </h3>
          <p class="text-2xl capitalize text-gray-900">
            {{ Illuminate\Support\Str::limit($item->description ?? '', 100) }}    
          </p>      

            <a href="{{ route('posts.show', ['post' => $item->slug]) }}" 
              class="capitalize text-sm py-1 px-3 border-0 text-gray-50 hover:text-gray-700 bg-green-700 hover:bg-green-300 rounded-full no-underline">
              {{ __('Watch now') }} 
            </a>
        

            <form method="POST" action="{{ route('watchlist.store', $item->id) }}">
              @csrf
              <button class="mx-1 text-sm py-1 px-3 capitalize no-underline text-gray-50 hover:text-gray-700 bg-green-700 hover:bg-green-300 rounded-full"> 
                <i class="fa-solid fa-plus"></i> 
                {{('add to watchlist')}}
              </button>
            </form>
           
        </div>
         
      </article>
   
    </div>

  @endforeach
</div>


</x-app-layout>
 