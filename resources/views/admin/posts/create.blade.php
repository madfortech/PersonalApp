@extends('layouts.app')
@section('title', 'Post Create') 
@section('content')
                <div class="grid-rows-1 mt-20">
                    <div class="container mx-auto">
                    
                        <div class="w-50  max-w-screen-md p-7">
                            <h2 class="mb-5 text-left capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                            {{ __('post create') }} 
                            </h2>
                        
                            @if (session('success'))
                            <div class="text-green-50 p-2 mb-2 bg-green-800 rounded-full">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form 
                                method="POST" 
                                action="{{ route('admin.posts.store') }}"
                                enctype="multipart/form-data"
                                class="bg-teal-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                @csrf
                           
                                @honeypot
                                <div class="mb-2">
                                    
                                    <label for="title">
                                    {{ __('Title *') }} 
                                    </label>
                                    
                                    <x-input
                                    type="text"
                                    name="title"
                                    placeholder="title"
                                    class="{{ $errors->has('description')}}"> 
                                    {{ old('title') }}
                                    </x-input>
                                    @if($errors->has('title'))
                                        <span class="text-red-900">
                                            {{ $errors->first('title') }}
                                        </span>
                                    @endif
                                </div>
                                <!-- title -->

                               

                                <div class="mb-2">
                                    <label for="avatar">
                                        {{ __('Avatar *') }} 
                                    </label>
                                    
                                    <x-input
                                        type="file"
                                        name="avatar"> 
                                    </x-input>
                                    
                                    @if($errors->has('avatar'))
                                        <span class="text-red-900">
                                            {{ $errors->first('avatar') }}
                                        </span>
                                    @endif
                                </div>
                                <!-- avatar -->

                                <div class="mb-2">

                                    <label for="description">
                                        {{ __('Description *') }} 
                                    </label>
                                  
                                    <textarea 
                                        name="description" 
                                        id="description" 
                                        cols="30" 
                                        rows="5"
                                        placeholder="content here"
                                        class="form-textarea w-full {{ $errors->has('description')}}">
                                        {{ old('description') }}
                                    </textarea>
                                    @if($errors->has('description'))
                                        <span class="text-red-900">
                                            {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                </div>
                                <!-- description -->

                                <div class="mb-2">
                                    <x-button>
                                        {{ __('Save') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
             
@endsection

 