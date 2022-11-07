@extends('layouts.app')

@section('title', 'Create Role')

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
                <h1 class="mt-4">Create Role</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">
                        <a href="{{'create-role'}}">Create Role</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Create Role
                    </li>
                </ol>

                <div class="mt-4 mb-3 d-md-flex flex-row justify-items-end">
                    @include('form.create-role')
                </div>
               

               
            </div>
        </main>
    </div>
 
@endsection