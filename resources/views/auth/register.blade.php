@extends('layouts.app')
@section('title', 'Register') 
@section('content')
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-uppercase text-center mt-2 h1-title">
                            register
                        </h1>
                        <form 
                            method="POST" 
                            action="{{ route('register') }}"
                            class="mb-2 form">
                            @csrf

                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    <label class="form-label text-capitalize" for="name">
                                        {{ __('Name') }}
                                    </label>
                                    
                                    <input 
                                    class="form-control form-control-sm
                                    @error('name') is-invalid @enderror" 
                                    type="text" 
                                    required=""
                                    name="name" 
                                    value="{{ old('name') }}"
                                    placeholder="full name"
                                    autocomplete="name"
                                    autofocus>
                                    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                  
                                </div>
                            </div>
                            <!-- name -->

                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    <label class="form-label text-capitalize" for="email">
                                        {{ __('Email Address') }}
                                    </label>
                                    <input 
                                    class="form-control form-control-sm
                                    @error('email') is-invalid @enderror" 
                                    type="email" 
                                    required=""
                                    name="email" 
                                    value="{{ old('email') }}"
                                    placeholder="admin@admin.com"
                                    autocomplete="email">
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
 
                                </div>
                            </div>
                            <!-- email -->

                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    <label class="form-label text-capitalize" for="password">
                                        {{ __('Password') }}
                                    </label>
                                    <input 
                                    class="form-control form-control-sm
                                    @error('password') is-invalid @enderror" 
                                    type="password" 
                                    required=""
                                    name="password" 
                                    value="{{ old('password') }}"
                                    placeholder="new password"
                                    autocomplete="new-password">
                                    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- password -->

                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    <label class="form-label text-capitalize" for="password-confirm" >
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <input 
                                    class="form-control form-control-sm" 
                                    type="password" 
                                    required=""
                                    name="password_confirmation" 
                                    placeholder="password confirmation"
                                    autocomplete="new-password">
                                </div>
                            </div>
                            <!-- password -->

                            
                            <div class="row gx-0 mb-2">
                                <div class="col d-grid">
                                    <button 
                                        class="btn text-uppercase" 
                                        type="submit">
                                            {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                          
                        </form>
                    </div>
                </div>
            </div>
        </div> 
@endsection
