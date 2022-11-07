@extends('layouts.admin')
@section('content')
                            <!-- Start Form Here -->
                            <h3 class="text-dark mb-4">
                                Add New Post
                            </h3>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">
                                                Create new post
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <form 
                                                action="{{ route("admin.posts.store") }}"
                                                enctype="multipart/form-data" 
                                                method="post">
                                               
                                                @csrf
                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="username">
                                                                <strong>Title</strong>
                                                            </label>
                                                            <input 
                                                                class="form-control form-control-sm rounded-0
                                                                {{ $errors->has('title') ? 'is-invalid' : '' }}" 
                                                                type="text" id="title" 
                                                                name="title" 
                                                                placeholder="title"> 
                                                               
                                                                @if($errors->has('title'))
                                                                <span class="text-danger">
                                                                    {{ $errors->first('title') }}
                                                                </span>
                                                                @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Title Field -->
                                            
                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="categories">
                                                                <strong>Category&nbsp;</strong>
                                                            </label>
                                                            <a class="text-decoration-none" 
                                                                href="{{ route('admin.categories.create') }}">
                                                                create
                                                            </a>
                                                            <select class="form-select form-select-sm rounded-0" 
                                                                name="categories">
                                                                <option value="13">This is item 2</option>
                                                                <option value="14">This is item 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Categories Field -->

                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="tags">
                                                                <strong>Tags&nbsp;</strong>
                                                            </label>
                                                            <a class="text-decoration-none"
                                                                href="{{ route('admin.tags.create') }}">
                                                                create
                                                            </a>
                                                            <select class="form-select form-select-sm rounded-0" 
                                                                name="tags">
                                                                <option value="13">This is item 2</option>
                                                                <option value="14">This is item 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Tags field -->

                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="avatar">
                                                                <strong>Add media</strong>
                                                            </label>
                                                            <div 
                                                                class="needsclick dropzone 
                                                                {{ $errors->has('avatar') ? 'is-invalid' : '?' }}" 
                                                                id="avatar-dropzone">
                                                            </div>
                                                            @if($errors->has('avatar'))
                                                                <span class="text-danger">
                                                                    {{ $errors->first('avatar') }}
                                                                </span>
                                                            @endif
                                                         </div>
                                                    </div>
                                                </div>
                                                <!-- Add media field -->

                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="description">
                                                                <strong>Description</strong>
                                                            </label>
                                                            <x-easy-mde 
                                                                name="description"
                                                                placeholder="write post here">
                                                                
                                                            </x-easy-mde>
                                                            @if($errors->has('description'))
                                                                <span class="text-danger">
                                                                    {{ $errors->first('description') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- description field -->

                                                <div class="mb-3">
                                                    <button 
                                                        class="btn btn-primary btn-sm rounded-0 border-0" 
                                                        type="submit">
                                                        <i class="fas fa-plus"></i>
                                                        &nbsp;Post
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Footer -->
                            <footer class="bg-white sticky-footer">
                                <div class="container my-auto">
                                    <div class="text-center my-auto copyright">
                                        <span>Copyright © AdminPanel 2022</span>
                                    </div>
                                </div>
                            </footer>
                            <!-- End Footer -->
                             
                            <a class="border rounded d-inline scroll-to-top" href="#page-top">
                                <i class="fas fa-angle-up"></i>
                            </a>





@endsection
@section('scripts')