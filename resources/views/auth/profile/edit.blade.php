@extends('layouts.app')
@section('title', 'Edit Profile') 
@section('content')
        <!-- Start: 1 Row 2 Columns -->
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6">
                    <div>
                        <h2 class="text-uppercase mt-2 h2-title">
                            edit profile
                        </h2>
                        <form 
                            class="mb-2 form p-2" 
                            method="post" 
                            action="{{ route("profile.profile.update") }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row gx-0 mb-2">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                        {{Session::get('success')}}
                                        </div>
                                    @endif
                                <div class="col">
                                    <label class="form-label text-capitalize" for="email">
                                        email
                                    </label>
                                    <input 
                                    class="form-control form-control-sm
                                    {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                                    type="email" 
                                    name="email" 
                                    value="{{ old('email', auth()->user()->email) }}"
                                    disabled>
                                </div>
                            </div>
                            <!-- email -->

                            <div class="row gx-0 mb-2">
                                <div class="col">
                                    <label class="form-label text-capitalize" for="name">
                                        name
                                    </label>
                                    <input 
                                    class="form-control form-control-sm
                                    {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                    type="text" 
                                    name="name" 
                                    value="{{ old('name', auth()->user()->name) }}">
                                  
                                </div>
                            </div>
                            <!-- name -->

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
        <!-- End: 1 Row 2 Columns -->
@endsection