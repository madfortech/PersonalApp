@extends('layouts.app')
@section('title', 'Register') 
@section('content')
            <div class="flex">
                <div class="mx-auto w-7/12  mt-24 mb-24">
                    <h1 class="text-center text-3xl">
                        register
                    </h1>
                    <div class="mx-auto lg:w-2/6">

                        <form 
                            method="POST" 
                            action="{{ route('register') }}"
                            class="mt-4 border-0 bg-gray-200 p-5">
                            @csrf

                                <div class="mt-2">
                                
                                    <label for="name">
                                        {{ __('Name') }}
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

                                <div class="mt-2">
                               
                                    <label  for="email">
                                        {{ __('Email Address') }}
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

                                <div class="mt-2">
                                 
                                    <label  for="password">
                                        {{ __('Password') }}
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

                                <div class="mt-2">
                                 
                                    <label for="password-confirm" >
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

                                    <div class="mt-2">
                                     
                                        <button 
                                            type="submit"
                                            class="w-full bg-green-900 p-1 capitalize
                                            text-white hover:bg-green-800
                                            rounded-full">
                                                {{ __('Register') }}
                                        </button>
                                    </div>

                          
                        </form>
                    </div>
                </div>
            </div>
@endsection
