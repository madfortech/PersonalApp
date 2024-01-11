@extends('errors::layout')

@section('title', __('Service Unavailable'))
@section('code', '503')
{{-- @section('message', __('Service Unavailable')) --}}

@section('message')

<div class="py-1 grid grid-rows-1 lg:grid-cols-1 gap-4">
               
    <div class="w-7/12 mx-auto sm:px-6 lg:px-8">
        <div class="lg:px-3 lg:py-3">
            <img src="{{ asset('img/https___imagecdn.copymatic.ai_c9318103-d75e-4b9f-87b4-d28718a8007e-1.PNG') }}" 
                alt="">
            
        </div>
       
        <div class="prose lg:prose-xl">
           <h3>Service Unavailable</h3>
        </div>
    </div>
  <div>
@endsection