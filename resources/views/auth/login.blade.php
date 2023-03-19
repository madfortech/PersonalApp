@extends('layouts.app')
@section('title', 'Login') 
@section('content')
            <div class="flex">
                <div class="mx-auto w-7/12  mt-24 mb-24">
                    <h1 class="text-center text-3xl">
                        login
                    </h1>
                    <div class="mx-auto lg:w-2/6">

                        <form 
                            method="POST" 
                            action="{{ route('login') }}"
                            class="mt-4 border-0 bg-gray-200 p-5">
                            @csrf

                                <div class="mt-2">
                                 
                                    <label for="email">
                                    {{ __('Email Address') }} 
                                    </label>
                                   
                                    <x-input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    autofocus
                                    placeholder="admin@admin.com" >
                                        
                                    </x-input>
                                    @error('email')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Email -->

                            <div class="mt-2">
                                <div class="col">
                                    <label for="password">
                                    {{ __('Password') }} 
                                    </label>
                                  
                                    <x-input
                                    type="password"
                                    name="password"
                                    autocomplete="current-password"
                                    autofocus
                                    value="{{ old('email') }}"
                                    placeholder="password" >
                                        
                                    </x-input>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Password -->

                            <div class="mt-2">
                                
                                <input 
                                    type="checkbox" 
                                    name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label  for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <!-- Remember -->
                          
                            <div class="mt-2">
                                <div>
                                    @if (Route::has('password.request'))
                                    <a class="capitalize" 
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}?
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <!-- Reset email -->

                                <div class="mt-2">
                                    <button 
                                        class="w-full bg-green-900 p-1 capitalize
                                         text-white hover:bg-green-800
                                         rounded-full"                                        
                                         type="submit">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
