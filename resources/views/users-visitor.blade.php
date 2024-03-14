@extends('layouts.user')

@section('title', 'users visitor')

@section('content')

<div class="lg:grid grid-rows-1  gap-3 grid-cols-1 mt-12 px-4 sm:px-6 lg:px-8">
  
  <div class="p-4 divide-y divide-blue-200">
    @include('partials.visitor-information')
  </div>
  
</div>

@endsection
