@extends('errors::layout')

@section('title', __('Not Found'))
@section('message')

<div class="py-1 grid grid-rows-1 lg:grid-cols-1 gap-4">
               
    <div class="w-7/12 mx-auto sm:px-6 lg:px-8">
        <div class="lg:px-3 lg:py-3">
            <img src="{{ asset('img/https___imagecdn.copymatic.ai_img-DBi2KXLANvG3ApOPF1Zi2AsW-removebg-preview.PNG') }}" 
                alt="">
            
        </div>
       
        <div class="prose lg:prose-xl">
           <h3>Unsure of Where to Go Next? Break Free from the Familiar and Open Doors to New Possibilities</h3>
        </div>
    </div>
  <div>
@endsection
