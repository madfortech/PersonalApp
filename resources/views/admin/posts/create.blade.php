@extends('layouts.app')
@section('title', 'Post Create') 
@section('content')
            <div class="grid-rows-1 mt-44">
                <div class="container mx-auto">
                    
                    <div class="w-50  max-w-screen-md p-7">
                        <h2 class="mb-5 text-left capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                        {{ __('post create') }} 
                        </h2>
                        
                        @if (session('success'))
                        <div class="text-green-50 p-2 mt-2 bg-green-800 rounded-full">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form 
                            method="POST" 
                            action="{{ route('admin.posts.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                           

                                <div class="flex flex-col p-5">
                                    
                                    <label for="title" class="mt-4">
                                    {{ __('Title *') }} 
                                    </label>
                                    
                                    <x-input
                                    type="text"
                                    name="title"
                                    class="border-2 rounded-lg"
                                    placeholder="title"> 
                                    </x-input>
                                    @if($errors->has('title'))
                                        <span class="text-red-900">
                                            {{ $errors->first('title') }}
                                        </span>
                                    @endif
                                    <!-- title -->

                                    <label for="avatar" class="mt-4">
                                        {{ __('Avatar *') }} 
                                    </label>
                                    
                                    <x-input
                                        type="file"
                                        name="avatar"
                                        class="border-2 rounded-lg"> 
                                    </x-input>
                                    
                                    @if($errors->has('avatar'))
                                        <span class="text-red-900">
                                            {{ $errors->first('avatar') }}
                                        </span>
                                    @endif
                                    <!-- avatar -->


                                    <label for="description" class="mt-4">
                                        {{ __('Description *') }} 
                                    </label>
                                  
                                    <textarea name="description" 
                                        id="description" 
                                        class="border-2 rounded-lg"
                                        cols="30" rows="5">

                                    </textarea>
                                    @if($errors->has('description'))
                                        <span class="text-red-900">
                                            {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                    <!-- description -->

                                    <button class="border-0 rounded-lg bg-green-400 hover:bg-green-500
                                        p-1 text-gray-50
                                        capitalize mt-2">
                                        {{ __('Save') }}
                                    </button>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection

 