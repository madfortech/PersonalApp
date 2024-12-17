<x-app-layout>

@section('title','Post')
                      
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight text-center">
      {{ $post->title }}
    </h2>
  </x-slot>

  <div class="lg:grid grid-cols-2 gap-3 mt-12">
      <div class="p-5">
        <article class="prose lg:prose-xl rounded-md border-2 mb-4 p-4 bg-gray-200">  
          
          <div class="mb-4">
            <div class="text-sm"> 
              <span class="mr-2 p-1 px-2 capitalize bg-gray-500 rounded-full text-white">
                {{ $post->user->name ?? 'Unknown User' }}
              </span>
            
              <span class="mr-2 p-1 px-2 capitalize bg-gray-500 rounded-full text-white">
                {{ $post->created_at }}
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

       
          <div class="grid grid-cols-2 gap-2 mb-3 border border-gray-300 bg-gray-200 px-1 rounded-md w-2/3">
            <div>
            @auth

              @if(Auth::user()->hasLiked($post))
                  <form action="{{ route('posts.unlike', $post->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit">
                          <i class="fa-solid fa-thumbs-down"></i>
                           
                      </button>
                  </form>
              @else
                  <form action="{{ route('posts.like', $post->id) }}" method="post">
                      @csrf
                      <button type="submit">
                          <i class="fa-solid fa-thumbs-up"></i>
                         
                      </button>
                  </form>
              @endif
            @endauth
            @guest
              <div>
                <a href="{{ route('login') }}" class="text-blue-600 no-underline">{{__('Login to Like')}}</a>
              </div>
            @endguest
          </div>
            <div>
                Likes: {{ $post->likers()->count() }}
            </div>
          </div>
       
          
          <div class="grid grid-cols-2 gap-2">
            @can('postupdate',$post)
              <a href=" {{route('posts.edit',$post->id )}}" class="p-3 bg-green-600 hover:bg-green-500 text-gray-50 rounded-none border-2 no-underline">
                <i class="fa-solid fa-pen-to-square"></i>
                {{__('Edit')}}
              </a>
            @endcan

            @can('postdelete',$post)
              <form action="{{route('posts.destroy',$post->id)}}" method="post">
                @csrf
                @method('DELETE')
                <div>
              
                  <button class=" bg-red-600 hover:bg-red-400 text-white border-2 rounded-none p-3"> 
                    <i class="fa-solid fa-trash"></i>
                    {{ __('Trash') }}
                  </button>
                </div>
              </form>
            @endcan
          </div>
         
         
        </article>
      </div>
  </div>
</x-app-layout>
 
   
 