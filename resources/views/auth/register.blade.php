@extends('layouts.app')
@section('title', 'Register') 
@section('content')
            <div class="grid-rows-1 mt-44">
                <div class="container mx-auto">
                    
                    <div class="w-50 mx-auto  max-w-screen-md p-7">
                        <h1 class="mb-5 text-center capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                            {{ __('register') }} 
                        </h1>
                        <form 
                            method="POST" 
                            action="{{ route('register') }}">
                            @csrf

                                <div class="flex flex-col p-5">
                                
                                    <label for="name" class="uppercase mt-4">
                                        {{ __('Name *') }}
                                    </label>
                                    
                                    <x-input
                                        name="name" 
                                        value="{{ old('name') }}"
                                        placeholder="full name"
                                        autocomplete="name"
                                        class="border-2 rounded-lg"
                                        autofocus>
                                    </x-input>
                                    
                                    @error('name')
                                        <span  role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- name -->

                                    <label  for="email" class="mt-4">
                                        {{ __('Email Address *') }}
                                    </label>
                                    <x-input
                                        type="email" 
                                        name="email" 
                                        value="{{ old('email') }}"
                                        placeholder="admin@admin.com"
                                        autocomplete="email"
                                        class="border-2 rounded-lg">

                                    </x-input>
                                   
                                    @error('email')
                                        <span  role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- email -->

                                    <label  for="password" class="mt-4">
                                        {{ __('Password *') }}
                                    </label>
                                    <x-input
                                        type="password" 
                                        name="password" 
                                        value="{{ old('password') }}"
                                        placeholder="new password"
                                        autocomplete="new-password"
                                        class="border-2 rounded-lg">

                                    </x-input>
                                    
                                    @error('password')
                                        <span  role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- password -->

                                    <label for="password-confirm" class="mt-4">
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <x-input
                                        type="password" 
                                        name="password_confirmation" 
                                        placeholder="password confirmation"
                                        autocomplete="new-password"
                                        class="border-2 rounded-lg">
                                    </x-input>
                                    <!-- confirm password -->

                                    
                                    <button class="border-0 rounded-lg bg-green-400 p-1 
                                    hover:bg-green-500
                                    text-gray-50
                                        capitalize mt-2">
                                        {{ __('Register') }}
                                    </button>
                                    
                                </div>          
                        </form>
                    </div>
                </div>
            </div>
@endsection
