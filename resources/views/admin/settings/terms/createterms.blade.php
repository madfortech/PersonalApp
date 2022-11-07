@extends('layouts.admin')
@section('content')
                            <h3 class="text-dark mb-4">
                                Terms
                            </h3>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">
                                                Site Terms info
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <form 
                                                enctype="multipart/form-data" 
                                                method="post">
                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="title">
                                                                <strong>Site terms title *</strong><br>
                                                            </label>
                                                            <input 
                                                            class="form-control form-control-sm rounded-0" 
                                                            type="text" 
                                                            name="title" 
                                                            placeholder="site terms title"
                                                            required="">
                                                        </div>
                                                    </div>
                                                    <!-- End title field -->
                                                </div>
                                                <div class="mb-3">
                                                    <button 
                                                        class="btn btn-primary btn-sm rounded-0 border-0" 
                                                        type="submit">
                                                        <i class="fas fa-plus" style="font-size: 15px;"></i>
                                                        &nbsp;create
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection('content')