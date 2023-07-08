@extends('layouts.app')
@section('title', 'Reset Password') 
@section('content')
            <!-- Start: 1 Row 2 Columns -->
            <div class="grid-rows-1 mt-44">
                <div class="container mx-auto">
                    
                    <div class="w-50 mx-auto  max-w-screen-md p-7">
                        <h2 class="mb-5 text-center capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                        {{ __('reset password') }} 
                        </h2>

                        <form 
                            class="mb-2 form p-2"
                            method="POST" 
                            action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="flex flex-col p-5">
                                <label for="email" class="mt-4">
                                    {{ __('Email Address') }}
                                </label>

                                <input 
                                id="email" 
                                type="email" 
                                name="email" 
                                value="{{ $email ?? old('email') }}" 
                                readonly 
                                autocomplete="email" 
                                class="border-2 rounded-lg"
                                autofocus>
                                <!-- email -->

                                <label for="password" class="mt-4">
                                    {{ __('New Password') }}
                                </label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <input 
                                id="password" 
                                type="password" 
                                class="border-2 rounded-lg"
                                {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password" 
                                placeholder="new password">
                                <!-- password -->


                                <label for="password" class="mt-4">
                                    {{ __('Confirm Password') }}
                                </label>
                                
                                <input 
                                id="password" 
                                type="password" 
                                class="border-2 rounded-lg"
                                name="password_confirmation" 
                                placeholder="confirm password">
                                <!-- password -->

                                <button 
                                    class="border-0 rounded-lg bg-green-400 p-1 hover:bg-green-500
                                     text-gray-50
                                        capitalize mt-2" 
                                    type="submit">
                                    &nbsp; {{ __('Reset Password') }}
                                </button>

                            </div>
                      
                       
                        </form>
                    </div>
                </div>
            </div>
         
@endsection
