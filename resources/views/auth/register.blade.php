@extends('layouts.app')
@section('title', 'Register') 
@section('content')
            
                <div class="flex mb-4">

                    <div class="w-full bg-grey h-12">

                        
                        <div class="w-1/2  max-w-xs mx-auto mt-10">
                            <h1 class="mb-5 text-center capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                                {{ __('register') }} 
                            </h1>

                            <form 
                                method="POST" 
                                action="{{ route('register') }}"
                                class="bg-teal-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                @csrf

                                <div class="mb-4">
                                
                                    <label for="name">
                                        {{ __('Name *') }}
                                    </label>
                                    
                                    <x-input
                                        name="name" 
                                        value="{{ old('name') }}"
                                        placeholder="full name"
                                        autocomplete="name"
                                        autofocus>
                                    </x-input>
                                    
                                    @error('name')
                                        <span  role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- name -->
                                
                                <div class="mb-4">

                                    <label  for="email">
                                        {{ __('Email Address *') }}
                                    </label>
                                    <x-input
                                        type="email" 
                                        name="email" 
                                        value="{{ old('email') }}"
                                        placeholder="admin@admin.com"
                                        autocomplete="email">

                                    </x-input>
                                   
                                    @error('email')
                                        <span  role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- email -->

                                <div class="mb-4">

                                    <label  for="password">
                                        {{ __('Password *') }}
                                    </label>
                                    <x-input
                                        type="password" 
                                        name="password" 
                                        value="{{ old('password') }}"
                                        placeholder="new password"
                                        autocomplete="new-password">

                                    </x-input>
                                    
                                    @error('password')
                                        <span  role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- password -->

                                <div class="mb-4">

                                    <label for="password-confirm" class="mt-4">
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <x-input
                                        type="password" 
                                        name="password_confirmation" 
                                        placeholder="password confirmation"
                                        autocomplete="new-password">
                                    </x-input>
                                </div>
                                <!-- confirm password -->

                                <div class="mb-4">
                                    
                                    <x-button>
                                        {{ __('Register') }}
                                    </x-button>
                                </div>          
                            </form>
                        </div>
                    </div>
                </div>
@endsection
