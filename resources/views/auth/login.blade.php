@extends('layouts.app')
@section('title', 'Login') 
@section('content')
                <div class="flex mb-4">

                    <div class="w-full bg-grey h-12">

                        
                        <div class="w-1/2  max-w-xs mx-auto mt-10">
    
                            <h2 class="mb-5 text-center capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                            {{ __('login') }} 
                            </h2>
                            <form 
                                method="POST" 
                                action="{{ route('login') }}"
                                class="bg-teal-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                @csrf
                                @honeypot
                                <div class="mb-4 ">
                                 
                                    <label for="email">
                                    {{ __('Email Address *') }} 
                                    </label>
                                   
                                    <x-input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    autofocus
                                    placeholder="admin@admin.com">
                                        
                                    </x-input>
                                    @error('email')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- email -->

                                <div class="mb-4">
                                    <label for="password">
                                    {{ __('Password *') }} 
                                    </label>
                                  
                                    <x-input
                                    type="password"
                                    name="password"
                                    autocomplete="current-password"
                                    autofocus
                                    value="{{ old('email') }}"
                                    placeholder="password">
                                    
                                    </x-input>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- password -->

                                <div class="mb-4">
                                    <input 
                                    type="checkbox"   
                                    name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"  for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <!-- remember me -->

                                <div class="mb-4">
                                    @if (Route::has('password.request'))
                                    <a class="capitalize" 
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                                <!-- forget password -->

                                <div class="mb-4">
                                    <x-button type="submit">
                                            {{ __('Login') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
