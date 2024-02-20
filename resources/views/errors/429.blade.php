@extends('errors::layout')

@section('title', __('Too Many Requests'))
@section('code', '429')
{{-- @section('message', __('Too Many Requests')) --}}

@section('message')

<div class="py-1 grid grid-rows-1 lg:grid-cols-1 gap-4">
               
    <div class="w-7/12 mx-auto sm:px-6 lg:px-8">
        <div class="lg:px-3 lg:py-3">
            <img src="{{ asset('img/404-error.png') }}" 
                alt=""
                class="w-auto h-96 pt-12 mt-6">
        </div>
       
        <div class="prose lg:prose-xl">
           <h3>Too Many Requests</h3>
        </div>
    </div>
  <div>
@endsection