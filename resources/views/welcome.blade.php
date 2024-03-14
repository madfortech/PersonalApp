@extends('layouts.user')

@section('title', 'Himanshu Nishad')

@section('content')

<div class="lg:grid grid-rows-1  gap-3 grid-cols-2 mt-12 px-4 sm:px-6 lg:px-8">
  
  <div class="p-4 divide-y divide-blue-200">
    @foreach($post as $key => $item)
      <article class="prose lg:prose-xl rounded-md border-2 mb-4 p-4 max-w-md w-full">
       
        <div class="mb-4">
         
          <div class="text-sm">
            <span class="mr-2 p-1 capitalize bg-red-500 rounded-full text-white">
              {{ $item->user->name ?? 'Unknown User' }}
            </span>
           
            <span class=" p-1 capitalize bg-red-500 rounded-full text-white">
              {{ $item->created_at }}
            </span>
          </div>
        </div>
        
        @foreach($item->getMedia('posts') as $media)
          <video 
            controls 
            controlsList="nodownload"
            class="aspect-video" 
            src="{{ asset($media->getUrl()) }}"
            type="{{ $media->mime_type }}">
          </video>
        @endforeach

        <div class="card">
          <h1 class="border-b-2">
            {{ $item->title }}
          </h1>
          <p class="text-2xl capitalize text-gray-900">
            {{ Illuminate\Support\Str::limit($item->description ?? '', 100) }}    
          </p>       
          
          <a href="{{ route('posts.show', ['post' => $item->slug]) }}" 
            class="py-1 px-3 border-2 text-gray-700 bg-green-400 rounded-full">
            {{ __('Read more') }} 
          </a>
        
        </div>
         
      </article>

      
    @endforeach
  </div>

  
{{-- 
  <div class="bg-gray-300-200 border-2 p-3">
    aa
  </div> --}}
</div>

{{-- <footer class="p-5 grid grid-cols-1 gap-4 text-gray-700 capitalize">
  @include('layouts.footer')
</footer> --}}
@endsection
