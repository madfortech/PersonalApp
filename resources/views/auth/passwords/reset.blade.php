@extends('layouts.app')
@section('title', 'Reset Password') 
@section('content')
        <!-- Start: 1 Row 2 Columns -->
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6">
                    <div>
                        <h2 class="text-uppercase mt-2 h2-title">
                            reset password
                        </h2>

                        <form 
                            class="mb-2 form p-2"
                            method="POST" 
                            action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row gx-0 mb-2">
                                <label for="email" class="form-label text-capitalize">
                                    {{ __('Email Address') }}
                                </label>

                                <input 
                                id="email" 
                                type="email" 
                                class="form-control form-control-sm" 
                                name="email" 
                                value="{{ $email ?? old('email') }}" 
                                disabled 
                                autocomplete="email" 
                                autofocus>
                            </div>
                            <!-- email -->

                            <div class="row gx-0 mb-2">
                                <label for="password" class="form-label text-capitalize">
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
                                class="form-control form-control-sm
                                {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password" 
                                placeholder="new password">
                            </div>
                            <!-- password -->

                            
                            <div class="row gx-0 mb-2">
                                <label for="password" class="form-label text-capitalize">
                                    {{ __('Confirm Password') }}
                                </label>
                                
                                <input 
                                id="password" 
                                type="password" 
                                class="form-control form-control-sm" 
                                name="password_confirmation" 
                                placeholder="confirm password">
                            </div>
                            <!-- password -->

                     
                            <div class="row gx-0 mb-2">
                                <div class="col d-grid">
                                    <button 
                                        class="btn text-uppercase" 
                                        type="submit">
                                        <i class="fas fa-save"></i>
                                        &nbsp; {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
                
@endsection
