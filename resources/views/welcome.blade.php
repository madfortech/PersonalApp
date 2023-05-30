@extends('layouts.app')
@section('title', 'Welcome') 
@section('content')

       <div class="grid-cols-1 gap-4 text-gray-900 md:grid">
            
              <div class="lg:w-2/4 mx-auto mt-40">
                     @foreach($posts as $post)
                     <div class="rounded-lg border p-2 md:w-auto mb-4">
                            <img src="{{$post->getFirstMediaUrl('avatars','preview') }}" 
                                   alt="{{('$post->id')}}"
                                   class="w-full">
                          
                            <h1 class="text-lg font-bold mt-4">
                            {{ $post->title }} 
                            </h1>
                            <article class="leading-loose text-2xl py-3 whitespace-pre-line">
                                   {{ \Illuminate\Support\Str::limit($post->description, 250) }}
                            </article>
                            <a href="{{route('posts.show', ['post' => $post->id]) }}"
                                   class="border-0 rounded-lg bg-green-400 hover:bg-green-500
                                        p-1 text-gray-50
                                        capitalize">
                                readmore
                            </a>
                     </div>
                     @endforeach
              </div>
              
       </div>
@endsection


                           
                         