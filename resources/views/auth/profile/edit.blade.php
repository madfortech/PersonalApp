@extends('layouts.app')
@section('title', 'Edit Profile') 
@section('content')
                <div class="grid-rows-1 mt-20">
                    <div class="container mx-auto">
                    
                        <div class="w-50  max-w-screen-md p-7">
                            <h2 class="mb-5 text-left capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                            {{ __('update profile') }} 
                            </h2>
                        
                            @if (session('success'))
                            <div class="text-green-50 p-2 mb-2 bg-green-800 rounded-full">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form 
                                class="bg-teal-100 shadow-md rounded px-8 pt-6 pb-8 mb-4"
                                method="POST" 
                                action="{{ route('profile.update') }}">
                                @csrf
                           

                                <div class="mb-2">
                                    
                                    <label for="name">
                                    {{ __('Name') }} 
                                    </label>
                                    
                                    <x-input
                                        type="text"
                                        name="name"
                                        value="{{ old('name', auth()->user()->name) }}"> 
                                    </x-input>
                                </div>
                                <!-- Name -->

                                <div class="mb-2">

                                    <label for="email">
                                    {{ __('Email Address') }} 
                                    </label>
                                   
                                    <x-input
                                        type="email"
                                        name="email"
                                        readonly=""
                                        value="{{ old('email', auth()->user()->email) }}"> 
                                    </x-input>
                                </div>
                                <!-- Email -->

                                <div class="mb-2">
                                    <x-button>
                                        {{ __('Save') }}
                                    </x-button>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
        
@endsection
