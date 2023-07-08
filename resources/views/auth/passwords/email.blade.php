@extends('layouts.app')
@section('title', 'Reset Password') 
@section('content')
                <div class="flex mb-4">

                    <div class="w-full bg-grey h-12">

                        
                        <div class="w-1/2  max-w-xs mx-auto mt-10">
                            <h1 class="mb-5 text-center capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                                {{ __('Reset Password') }} 
                            </h1>

                            <form 
                                method="POST" 
                                action="{{ route('password.email') }}"
                                class="bg-teal-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                @csrf

                                <div class="mb-4">
                                    <label for="email">
                                        {{ __('Email Address *') }} 
                                    </label>
                                    <x-input
                                        type="email" 
                                        name="email" 
                                        value="{{ old('email') }}"
                                        placeholder="admin@admin.com" 
                                        autocomplete="email" 
                                        autofocus>
                                    </x-input>
                                   
                                    @error('email')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Email -->
                                
                                <div class="mb-4">
                                    <x-button>
                                        {{ __('Send Password Reset Link') }}
                                    </x-button>
                                </div>
                                <!-- Button -->

                            </form>
                        </div>
                    </div>
                </div>
@endsection
