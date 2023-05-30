@extends('layouts.app')
@section('title', 'Login') 
@section('content')
            <div class="grid-rows-1 mt-44">
                <div class="container mx-auto">
                    
                    <div class="w-50 mx-auto  max-w-screen-md p-7">
                        <h2 class="mb-5 text-center capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                        {{ __('login') }} 
                        </h2>
                        <form 
                            method="POST" 
                            action="{{ route('login') }}">
                            @csrf

                                <div class="flex flex-col p-5">
                                 
                                    <label for="email" class="uppercase mt-4">
                                    {{ __('Email Address *') }} 
                                    </label>
                                   
                                    <x-input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    autofocus
                                    placeholder="admin@admin.com" 
                                    class="border-2 rounded-lg">
                                        
                                    </x-input>
                                    @error('email')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- email -->

                                    <label for="password" class="mt-4">
                                    {{ __('Password *') }} 
                                    </label>
                                  
                                    <x-input
                                    type="password"
                                    name="password"
                                    autocomplete="current-password"
                                    autofocus
                                    value="{{ old('email') }}"
                                    placeholder="password" 
                                    class="border-2 rounded-lg">
                                    
                                    </x-input>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- password -->

                                    <div class="mt-4">
                                        <input type="checkbox"   name="remember" class="border-2 rounded-lg" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="" class="mt-4"  for="remember">
                                        {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <!-- remember me -->

                                    <div class="mt-4">
                                        @if (Route::has('password.request'))
                                        <a class="capitalize" 
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                    <!-- forget password -->

                                    <button class="border-0 rounded-lg bg-green-400 p-1 hover:bg-green-500
                                         text-gray-50
                                        capitalize mt-2">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </div>
@endsection
