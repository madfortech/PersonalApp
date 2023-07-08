@extends('layouts.app')
@section('title', 'Verify Email Address') 
@section('content')
            <div class="grid-rows-1 mt-44">
                <div class="container mx-auto">
                    
                    <div class="w-50 mx-auto  max-w-screen-md p-7">
                        <h2 class="mb-5 text-center capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                        {{ __('Verify Email Address') }} 
                        </h2>
                        <h4 class="text-uppercase text-center mt-2 h2-title">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}
                        </h4>

                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                      
                        <form 
                            class="mb-2 form p-2"
                            method="POST" 
                            action="{{ route('verification.resend') }}">
                            @csrf
                            <div class="flex flex-col p-5">
                                <button class="border-0 rounded-lg bg-green-400 p-1 hover:bg-green-500
                                    text-gray-50
                                    capitalize mt-2">
                                    {{ __('click here to request another') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
@endsection
