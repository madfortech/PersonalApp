@extends('layouts.app')
@section('title', 'Welcome') 
@section('content')

                                   <div class="lg:flex flex-row mb-4">
                                          <div class="basis-3/4">
                                                 @foreach($posts as $post)
                                                        <div class="p-2 border-b-4 mt-20 mb-20 bg-teal-50 shadow-lg w-2/3 mx-auto">
                                                               <div class="aspect-w-16 aspect-h-9">
                                                                      <iframe 
                                                                             src="{{$post->getFirstMediaUrl('avatars','preview') }}" 
                                                                             frameborder="0" 
                                                                             allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                                             allowfullscreen
                                                                             alt="{{('$post->id')}}">
                                                                      </iframe>
                                                               </div>
 
                                                               <div class="px-6 py-4 font-bold text-xl mb-2">
                                                                      <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                                                                             {{ $post->title }} 
                                                                      </a>
                                          
                                                                      <p class="text-gray-500">
                                                                             post created
                                                                             {{ $post->created_at->format(date('H:i:s')) }}
                                                                      </p>
                                                                      <p class="text-grey-darker text-base">
                                                                             {{ \Illuminate\Support\Str::limit($post->description, 350) }}
                                                                      </p>
                                                               </div>
                                                               <div class="px-6 py-4">
                                                                      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                                                                             {{ $post->user->name }}
                                                                      </span>
                                                                      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                                                                             <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" 
                                                                                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-600 border-white hover:border-transparent hover:text-teal-900 hover:bg-teal-300 mt-4 lg:mt-0">
                                                                                    readmore
                                                                             </a>
                                                                      </span>
                                                               </div>
                                                        </div>
                                                 @endforeach
                                          </div>

                                          <div class="basis-1/3 mt-20 mb-20  lg:fixed right-0 p-2">
                                                 <ul class="flex flex-row">
                                                        <li class="mr-3">
                                                               <a class="text-blue-500 hover:text-blue-900" href="{{route('legalsiteprivicy.index')}}">
                                                                      Terms conditions 
                                                               </a>
                                                        </li>
                                                        <li class="mr-3">
                                                               <a class="text-blue-500 hover:text-blue-900" href="{{route('legalsiteterm.index')}}">
                                                                      Privacy policy  
                                                               </a>
                                                        </li>
                                                 </ul>
                                          </div>
                                   </div>
@endsection


                           
                         