@extends('layouts.app')
@section('title', 'Login') 
@section('content')
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-uppercase text-center mt-2 h1-title">
                            login
                        </h1>
                        <form 
                            method="POST" 
                            action="{{ route('login') }}"
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
                                <div class="col">
                                    <label class="form-label text-capitalize" for="password">
                                    {{ __('Password') }} 
                                    </label>
                                    <input 
                                    class="form-control form-control-sm
                                    @error('password') is-invalid @enderror" 
                                    type="password" 
                                    name="password" 
                                    value="{{ old('email') }}"
                                    placeholder="password" 
                                    autocomplete="current-password"
                                    autofocus
                                    required="">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Password -->

                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    <input 
                                    type="checkbox" 
                                    name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-label text-capitalize" for="remember">
                                    {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <!-- Remember -->
                          
                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    @if (Route::has('password.request'))
                                    <a class="text-capitalize link-dark text-decoration-none" 
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}?
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <!-- Reset email -->

                            <div class="row gx-0 mb-2">
                                <div class="col d-grid">
                                    <button 
                                        class="btn text-uppercase" 
                                        type="submit">
                                            {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
