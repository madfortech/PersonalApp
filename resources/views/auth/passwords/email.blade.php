@extends('layouts.app')
@section('title', 'Reset Password') 
@section('content')
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-uppercase text-center mt-2 h1-title">
                            reset password
                        </h1>

                        <form 
                            method="POST" 
                            action="{{ route('password.email') }}"
                            class="mb-2 form">
                            @csrf

                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    <label class="form-label text-capitalize" for="email">
                                    {{ __('Email Address') }} 
                                    </label>
                                    <input 
                                    class="form-control form-control-sm
                                    @error('email') is-invalid @enderror" 
                                    type="email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                    placeholder="admin@admin.com" 
                                    autocomplete="email" 
                                    autofocus
                                    required="">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Email -->

                            <div class="row gx-0 mb-2">
                                <div class="col d-grid">
                                    <button 
                                        class="btn text-uppercase" 
                                        type="submit">
                                            {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
 
                        </form>
                    </div>
                </div>
            </div>
        </div> 
@endsection
