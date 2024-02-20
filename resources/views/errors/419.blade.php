@extends('errors::layout')

@section('title', __('Page Expired'))
@section('code', '419')
{{-- @section('message', __('Page Expired')) --}}

@section('message')

<div class="py-1 grid grid-rows-1 lg:grid-cols-1 gap-4">
               
    <div class="w-7/12 mx-auto sm:px-6 lg:px-8">
        <div class="lg:px-3 lg:py-3">
            <img src="{{ asset('img/404-error.png') }}" 
                alt=""
                class="w-auto h-96 pt-12 mt-6">
        </div>
        
        <div class="prose lg:prose-xl">
           <h3>Page Expired</h3>
        </div>
    </div>
  <div>
@endsection