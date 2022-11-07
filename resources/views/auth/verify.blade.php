@extends('layouts.app')
@section('title', 'Verify Email Address') 
@section('content')
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 offset-md-3">
                    <div>
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
                            <div class="row gx-0 mb-2">
                                <div class="col d-grid">
                                    <button 
                                        class="btn text-uppercase" 
                                        type="submit">
                                            {{ __('click here to request another') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
