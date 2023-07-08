@extends('layouts.app')
@section('title', 'Change Password') 
@section('content')
                <div class="grid-rows-1 mt-20">
                    <div class="container mx-auto">
                    
                        <div class="w-50  max-w-screen-md p-7">
                            <h1 class="mb-5 text-left capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                            {{ __('update password') }} 
                            </h1>

                            @if (session('success'))
                            <div class="text-green-50 p-2 mb-2 bg-green-800 rounded-full">
                                {{ session('success') }}
                            </div>
                            @endif
                        
                            <form 
                                class="bg-teal-100 shadow-md rounded px-8 pt-6 pb-8 mb-4"
                                method="post" 
                                action="{{ route("password.update") }}"
                                enctype="multipart/form-data">
                                @csrf

                                
                                @if(Session::has('success'))
                                    <div class="text-green-800">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                <div class="mb-2">
                                     
                                    <label for="password">
                                    {{ __('Password *') }} 
                                    </label>

                                    <x-input
                                        class="{{ $errors->has('password') ? 'is-invalid' : '' }}" 
                                        type="password"
                                        minlength="8" 
                                        maxlength="8" 
                                        
                                        placeholder="new password" 
                                        name="password">
                                        @if($errors->has('password'))
                                            <span class="text-danger">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </x-input>
                                    @error('password')
                                        <span class="text-red-900" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                                <!-- New Password -->

                                <div class="mb-2">
                                        
                                    <label for="password_confirmation">
                                        {{ __('Confirm Password *') }} 
                                    </label>

                        
                                    <x-input 
                                    class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" 
                                    type="password" 
                                    minlength="8" 
                                    maxlength="8" 
                                    name="password_confirmation"
                                    
                                    placeholder="confirm password" 
                                    name="password">
                                    </x-input>
                                    @error('password')
                                        <span class="text-red-900" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                                <!-- confirm Password -->

                            
                                <div class="mb-2">
                                    <x-button type="submit">
                                        {{ __('Update') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
@endsection


                           
                         