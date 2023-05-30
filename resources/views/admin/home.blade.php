@extends('layouts.app')
@section('title', 'Admin Homepage') 
@section('content')

        <div class="grid-rows-1 mt-44">
            <div class="container mx-auto">
                    
                <div class="w-50  max-w-screen-md p-7">
                    <ul class="flex justify-start capitalize text-white">
                        <li>
                            <a href="{{route('admin.posts.create')}}" 
                                class="bg-green-500 p-5 mx-1 hover:bg-green-600">
                                post create
                            </a>
                        </li>

                        <li>
                            <a href="{{route('account.index')}}" 
                                class="bg-green-500 hover:bg-green-600 p-5 mx-1">
                                account
                            </a>
                        </li>
                    </ul>
                </div>

               
            </div>
        </div>
     
@endsection
