@extends('layouts.app')
@section('title', 'Privicy') 
@section('content')

       <div class="lg:flex flex-row mb-4">
              <div class="basis-3/4">
                     <div class="p-2 mt-20 mb-20">
                            @foreach($siteprivicies as $item)
                            <div class="p-2">
                                   <div class="font-bold text-xl mb-2">
                                          {{ $item->title }} 
                                   </div>
                                                               
                                                        
                                   <p class="text-grey-darker text-base">
                                          {{$item->description }}
                                   </p>

                                   <p class="text-grey-darker text-sm">
                                          {{$item->created_at }}
                                   </p>
                                         
                                   @role('super-admin')
                                   
                                   <div class="py-4">
                                          <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                                                 <a href="{{ route('legal.siteprivicy.edit', ['siteprivicy' => $item->id]) }}" class="capitalize inline-block text-sm px-4 py-2 leading-none border rounded text-gray-600 border-white hover:border-transparent hover:text-teal-900 hover:bg-teal-300 mt-4 lg:mt-0">
                                                 edit
                                                 </a>
                                          </span>
                                   </div>
                                   @endrole
                            </div>
                            @endforeach
                     </div>
              </div>
       </div>           
@endsection