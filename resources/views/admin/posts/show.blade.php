@extends('layouts.app')
@section('title', 'Single Post') 
@section('content')

       <div class="grid-cols-1 gap-4 text-gray-900 md:grid">
            
              <div class="lg:w-2/4 mx-auto mt-40">
                    
                     <div class="rounded-lg border p-2 md:w-auto mb-4">
                             
                            <img src="{{$post->getFirstMediaUrl('avatars','preview') }}" 
                                   alt="{{('$post->id')}}"
                                   class="w-full">

                            <h1 class="text-lg font-bold mt-4">
                            {{ $post->title }} 
                            </h1>
                            <article class="leading-loose text-2xl py-3 whitespace-pre-line 
                                   ">
                                   {{ $post->description }} 
                            </article>
                            @role('super-admin')
                                   <a   class="border-0 rounded-lg bg-green-400 hover:bg-green-500
                                        p-1 text-gray-50
                                        capitalize mt-2"
                                        href="{{route('admin.posts.edit', ['post' => $post->id]) }}">
                                        edit
                                   </a>
                            @endrole

                            @role('super-admin')
                            <form action="{{ route('admin.posts.destroy', $post->id) }}"
                                   method="POST" 
                                   onsubmit="return confirm('{{ trans('global.areYouSure') }}');">
                                   @csrf
                                   @method('DELETE')
                                   <button class="border-0 rounded-lg bg-red-400 hover:bg-red-500
                                        p-1 text-gray-50
                                        capitalize mt-2">
                                        {{ __('Delete') }}
                                   </button>                                   
                            </form>
                            @endrole
         
                     </div>
                     
              </div>
              
       </div>
@endsection


                           
                         