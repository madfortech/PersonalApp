@extends('layouts.app')
@section('title', 'Edit Profile') 
@section('content')
            <div class="grid-rows-1 mt-44">
                <div class="container mx-auto">
                    
                    <div class="w-50  max-w-screen-md p-7">
                        <h2 class="mb-5 text-left capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                        {{ __('update profile') }} 
                        </h2>
                        
                        @if (session('success'))
                        <div class="text-green-50 p-2 mt-2 bg-green-800 rounded-full">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form 
                            method="POST" 
                            action="{{ route('profile.update') }}">
                            @csrf
                           

                                <div class="flex flex-col p-5">
                                    
                                    <label for="name" class="uppercase mt-4">
                                    {{ __('Name') }} 
                                    </label>
                                    
                                    <x-input
                                        type="text"
                                        name="name"
                                        value="{{ old('name', auth()->user()->name) }}"
                                        class="border-2 rounded-lg"> 
                                    </x-input>
                                    <!-- Name -->


                                    <label for="email" class="uppercase mt-4">
                                    {{ __('Email Address') }} 
                                    </label>
                                   
                                    <x-input
                                        type="email"
                                        name="email"
                                        readonly=""
                                        class="border-2 rounded-lg"
                                        value="{{ old('email', auth()->user()->email) }}"> 
                                    </x-input>
                                    <!-- Email -->

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
