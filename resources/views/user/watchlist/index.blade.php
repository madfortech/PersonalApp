<x-app-layout>

    @section('title', 'Watch list')
    
    @section('content')
    
  

    <div class="lg:grid grid-cols-3 gap-4 mt-12 px-4 sm:px-6 lg:px-8">
        @forelse(Auth::user()->watchlist as $post)
            <div class="p-4">
                <article class="prose lg:prose-xl rounded-md border-2 mb-4 p-4">
                    <div class="mb-4">
                        <div class="text-sm">
                            <span class="mr-2 p-1 px-1 capitalize bg-gray-500 rounded-full text-white">
                                {{ $post->user->name ?? 'Unknown User' }}
                            </span>
                        </div>
                    </div> 
                    
                    @foreach($post->getMedia('posts') as $media)
                    <video 
                        poster="{{ $media->getUrl('preview') }}" 
                        src="{{ asset($media->getUrl()) }}"
                        type="{{ $media->mime_type }}"
                        data-overlay="1" 
                        controlslist="nodownload"
                        data-color="#fff000"
                        data-ckin="default"
                        alt="{{ $post->title }}"
                        class="aspect-auto w-full" 
                        data-title="{{ $post->title }}">
                    </video>
                    @endforeach
                    <div class="card">
                        <h3 class="border-b-2 text-xl">
                            {{ $post->title }}
                        </h3>
                           
                        <a href="{{ route('posts.show', ['post' => $post->slug]) }}" 
                            class="py-1 px-3 border-0 text-gray-50 hover:text-gray-700 bg-green-700 hover:bg-green-300 rounded-full no-underline">
                            {{ __('watch now') }} 
                        </a>
                    </div>
                </article>
            </div>
            @empty
            <div class="py-2 px-3">
               
                <p class="bg-red-500 text-white py-3 px-3">
                    {{ __('No items in your watchlist.') }}
                </p>
              
            </div>
        @endforelse  
    </div>
    
    </x-app-layout>
    