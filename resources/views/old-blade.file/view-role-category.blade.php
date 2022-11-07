@extends('layouts.app')

@section('title', 'Create user role category')

@section('content')

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    @include('layouts.nav')
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('sidebar.side-nav')
    </div>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Create User Role Category</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">
                        <a href="{{'view-role-category'}}">Create userrole category</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Create user role category
                    </li>
                </ol>

                <div class="mt-4 mb-3 d-md-flex flex-row justify-items-end">
                    @include('create-role-category')
                </div>
               

                <div class="card  rounded-0 mb-4">
                <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        View All UserRole Category
                        
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#Id</th>
                                    <th scope="col">Role Category</th>
                                    <th scope="col">Created</th>
                                    
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>admin</td>
                                     
                                    <td>21-10-1989</td>

                                 
                                     
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
 
@endsection