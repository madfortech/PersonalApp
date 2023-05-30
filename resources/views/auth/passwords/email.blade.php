@extends('layouts.app')
@section('title', 'Reset Password') 
@section('content')
                <div class="grid-rows-1 mt-44">
                    <div class="container mx-auto">
                    
                        <div class="w-50 mx-auto  max-w-screen-md p-7">
                            <h1 class="mb-5 text-center capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                                {{ __('Reset Password') }} 
                            </h1>
                            <form 
                                method="POST" 
                                action="{{ route('password.email') }}">
                                @csrf

                                <div class="flex flex-col p-5">
                                    <label for="email" class="uppercase mt-4">
                                        {{ __('Email Address *') }} 
                                    </label>
                                    <x-input
                                        type="email" 
                                        name="email" 
                                        value="{{ old('email') }}"
                                        placeholder="admin@admin.com" 
                                        autocomplete="email" 
                                        autofocus
                                        class="border-2 rounded-lg">
                                    </x-input>
                                   
                                    @error('email')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <button class="border-0 rounded-lg bg-green-400 p-1
                                    hover:bg-green-500
                                     text-gray-50
                                        capitalize mt-2">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                                <!-- Email -->

                            </form>
                        </div>
                    </div>
                </div>
@endsection
