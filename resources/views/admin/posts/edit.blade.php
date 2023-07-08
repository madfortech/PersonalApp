@extends('layouts.app')
@section('title', 'Post Edits') 
@section('content')
                <div class="grid-rows-1 mt-20">
                    <div class="container mx-auto">
                    
                        <div class="w-50  max-w-screen-md p-7">
                            <h2 class="mb-5 text-left capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                            {{ __('post edit') }} 
                            </h2>
                            @if (session('success'))
                            <div class="text-green-50 p-2 mb-2 bg-green-800 rounded-full">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form 
                                method="POST" 
                                action="{{ route('admin.posts.update', ['post' => $post->id]) }}"
                                enctype="multipart/form-data">
                              
                                @csrf
                                @method('PUT')
                                @honeypot
                                <div class="mb-2">
                                    
                                    <label for="title">
                                    {{ __('Title') }} 
                                    </label>
                                    
                                    <x-input
                                    type="text"
                                    name="title"
                                    value="{{ old('title', $post->title) }}"> 
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
                                        {{ __('Avatar') }} 
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
                                        {{ __('Description') }} 
                                    </label>
                                  
                                    <textarea 
                                        name="description" 
                                        id="description" 
                                        cols="30" 
                                        rows="5"
                                        class="form-textarea w-full">
                                        {{ old('description', $post->description) }}
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
                                        {{ __('Update') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection

 