@extends('layouts.app')

@section('title', 'View All Role')

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
                <h1 class="mt-4">View All Role</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">
                        <a href="{{'view-all-role'}}">View All Role</a>
                    </li>
                    <li class="breadcrumb-item active">
                        View All Role
                    </li>
                </ol>

                <div class="mt-4 mb-3 d-md-flex flex-row justify-items-end">
                    
                    <a class="btn border border-1 rounded-0" 
                        href="{{'create-role'}}">
                        Create Role
                    </a>
                </div>
               

                <div class="card  rounded-0 mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        View All Role
                        
                    </div>

                  
     

                    <div class="card-body">
                        <table class="table">
                       
                            <thead>
                                <tr>
                                    <th scope="col">#Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                           
                            @foreach ($users as $user)
                           
                            <tbody>
                                @if ($loop->depth)
                                <tr>
                              
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <th scope="col">Role</th>
                                    <th scope="col">{{$user->created_at}}</th>
                                    <th scope="col"><a href="">Remove</a></th>
                                    
                                </tr>
                                @endif
                           
                            </tbody>
                            @endforeach
                            
                          
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
 
@endsection