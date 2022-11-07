@extends('layouts.admin')
@section('content')
                            <!-- Start Form Here -->
                            <h3 class="text-dark mb-4">
                                Add New Tag
                            </h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">
                                                Create new tags
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <form 
                                                action="{{ route("admin.tags.store") }}"
                                                enctype="multipart/form-data" 
                                                method="post">
                                                @csrf
                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="title">
                                                                <strong>Title *</strong>
                                                            </label>
                                                            <input 
                                                            class="form-control form-control-sm rounded-0
                                                            {{ $errors->has('title') ? 'is-invalid' : '' }}" 
                                                            type="text" 
                                                            id="title" 
                                                            name="title" 
                                                            placeholder="add tags with comma" 
                                                          >
                                                            @if($errors->has('title'))
                                                                <span class="text-danger">
                                                                    {{ $errors->first('title') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- title field -->

                                            

                                                <div class="mb-3">
                                                    <button 
                                                        class="btn btn-primary btn-sm rounded-0 border-0" 
                                                        type="submit">
                                                        <i class="fas fa-plus"></i>
                                                        &nbsp;Create
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="table-responsive table mt-2" 
                                                id="dataTable-1" role="grid" 
                                                aria-describedby="dataTable_info">
                                                <table class="table my-0" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                            <th>Created at</th>
                                                        </tr>
                                                         
                                                    </thead>
                                                    <tbody>
                                                    @foreach($tags as $key => $tag)
                                                    <tbody>
                                                        <tr>
                                                            <td>   {{ $tag->title ?? '' }}</td>
                                                            <td>  {{ $tag->created_at ?? '' }}</td>
                                                        </tr>
                                                         
                                                    </tbody>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Here -->    
@endsection('content')