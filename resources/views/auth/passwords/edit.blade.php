@extends('layouts.app')
@section('title', 'Change Password') 
@section('content')
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6">
                    <div>
                        <h2 class="text-uppercase mt-2 h2-title">
                            edit password
                        </h2>
                        <form 
                            class="mb-2 form p-2" 
                            method="post" 
                            action="{{ route("profile.password.update") }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row gx-0 mb-2">
                                
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                        {{Session::get('success')}}
                                        </div>
                                    @endif
                                <div class="col">
                                    <label class="form-label text-capitalize" for="password">
                                        new password *
                                    </label>
                                    <input 
                                    class="form-control form-control-sm
                                    {{ $errors->has('password') ? 'is-invalid' : '' }}" 
                                    type="password"
                                    minlength="8" 
                                    maxlength="8" 
                                    required=""
                                    placeholder="new password" 
                                    name="password">
                                    @if($errors->has('password'))
                                        <span class="text-danger">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif

 
                                </div>
                            </div>
                            <!-- New Password -->

                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    <label class="form-label text-capitalize" id="confirm-password" for="password_confirmation">
                                        confirm password *
                                    </label>
                                    <input 
                                    class="form-control form-control-sm
                                    {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" 
                                    type="password" 
                                    minlength="8" 
                                    maxlength="8" 
                                    name="password_confirmation"
                                    required=""
                                    placeholder="confirm password" 
                                    name="password">
                                </div>
                            </div>
                            <!-- confirm Password -->

                            <div class="row gx-0 mb-2">
                                <div class="col d-grid">
                                    <button 
                                        class="btn text-uppercase" 
                                        type="submit">
                                        <i class="fas fa-save"></i>
                                        &nbsp;update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection


                           
                         