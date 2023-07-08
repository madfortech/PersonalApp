@extends('layouts.app')
@section('title', 'Post') 
@section('content')

              <div class="lg:flex flex-row mb-4">

                     <div class="basis-3/4 bg-teal-50 shadow-lg mx-auto">
                            <div class="p-2 border-b-4 mt-10 mb-20">
                                   <div class="aspect-w-16 aspect-h-9">
                                          <iframe 
                                                 src="{{$post->getFirstMediaUrl('avatars','preview') }}" 
                                                 frameborder="0" 
                                                 allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                 allowfullscreen
                                                 alt="{{('$post->id')}}">
                                          </iframe>
                                   </div>
                            </div>

                            <div class="px-6 py-4">
                                   <div class="font-bold text-xl mb-2">
                                          {{ $post->title }} 
                                   </div>
                                   <p class="text-grey-darker text-base">
                                          {{($post->description) }}
                                   </p>
                            </div>

                            <div class="px-6 py-4">
                                   <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                                          {{ $post->user->name }}
                                   </span>
                                   @role('super-admin')
                                   <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                                          <a href="{{route('admin.posts.edit', ['post' => $post->id]) }}" 
                                                 class="capitalize inline-block text-sm px-4 py-2 leading-none border rounded text-gray-600 border-white hover:border-transparent hover:text-teal-900 hover:bg-teal-300 mt-4 lg:mt-0">
                                                 edit
                                          </a>
                                   </span>
                                         
                                   <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">
                                          <form 
                                                 action="{{ route('admin.posts.destroy', $post->id) }}"
                                                 method="POST">
                                                 @csrf
                                                 @method('DELETE')
                                                 <x-button>
                                                        {{ __('Delete') }}
                                                 </x-button>                                   
                                          </form>
                                   </span>

                                   
                                   @endrole
                            </div>
                     </div>
              </div>
@endsection


                           
                         