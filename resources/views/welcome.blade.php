@extends('layouts.user')

@section('title', 'Himanshu Nishad')

@section('content')

<div class="lg:grid grid-rows-1  gap-3 grid-cols-1 mt-12 px-4 sm:px-6 lg:px-8">
  
  <div class="p-4 divide-y divide-blue-200">
    @foreach($post as $key => $item)
      <article class="prose lg:prose-xl rounded-md border-2 mb-4 p-4 max-w-md w-full mx-auto">
       
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
          <h1 class="border-b-2 text-2xl">
            {{ $item->title }}
          </h1>
         

            <p class="text-2xl capitalize text-gray-900">
              {{ Illuminate\Support\Str::limit($item->description ?? '', 100) }}    
            </p>       
           

          <a href="{{ route('posts.show', ['post' => $item->slug]) }}" 
            class="py-1 px-3 border-2 text-gray-700 bg-green-400 rounded-full no-underline">
            {{ __('Read more') }} 
          </a>
        
        </div>
         
      </article>
    @endforeach
  </div>

</div>
@endsection 
 