@extends('layouts.app')
@section('title', 'Homepage') 
@section('content')
          <div class="container">
            <div class="row g-0">
              <div class="col-sm-12 col-md-6">
                  <div class="p-2">
                     
                    <h1 class="text-uppercase">
                      welcome 
                      <span class="badge bg-success rounded-0">
                        {{ Auth::user()->name }}   
                      </span>
                    </h1>
                  </div>
              </div>


            </div>
          </div> 
@endsection
