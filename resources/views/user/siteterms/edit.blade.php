@extends('layouts.app')
@section('title', 'Edit') 
@section('content')
                <div class="grid-rows-1 mt-20">
                    <div class="container mx-auto">
                    
                        <div class="w-50  max-w-screen-md p-7">
                            <h2 class="mb-5 text-left capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                            {{ __('term condition edit') }} 
                            </h2>
                            @if (session('success'))
                            <div class="text-green-50 p-2 mb-2 bg-green-800 rounded-full">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form 
                                method="POST" 
                                action="{{ route('legal.siteterms.update', ['siteterm' => $siteterms->id]) }}"
                                enctype="multipart/form-data">
                              
                                @csrf
                                @method('PUT')

                                <div class="mb-2">
                                    
                                    <label for="title">
                                    {{ __('Title') }} 
                                    </label>
                                    
                                    <x-input
                                    type="text"
                                    name="title"
                                    value="{{ old('title', $siteterms->title) }}"> 
                                    </x-input>
                                </div>
                                <!-- title -->

                              
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
                                        {{ old('description', $siteterms->description) }}
                                    </textarea>
                                   
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

 