@extends('layouts.app')
@section('title', 'Reset Password') 
@section('content')
            <div class="flex">
                <div class="mx-auto w-7/12  mt-24 mb-24">
                    <h1 class="text-center text-3xl">
                        reset password
                    </h1>
                    <div class="mx-auto lg:w-2/6">
                        <form 
                            method="POST" 
                            action="{{ route('password.email') }}"
                            class="mt-4 border-0 bg-gray-200 p-5">
                            @csrf

                                <div class="mt-2">
                                    <label  for="email">
                                    {{ __('Email Address') }} 
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

                            <div class="mt-2">
                                
                                    <button 
                                        class="w-full bg-green-900 p-1 
                                        capitalize
                                         text-white hover:bg-green-800
                                         rounded-full" 
                                            type="submit">
                                            {{ __('Send Password Reset Link') }}
                                    </button>
                               
                            </div>
 
                        </form>
                    </div>
                </div>
            </div>
@endsection
