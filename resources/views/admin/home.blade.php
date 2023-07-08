@extends('layouts.app')
@section('title', 'Admin Homepage') 
@section('content')

             
             
                    
                <div class="lg:w-2/3 py-6 bg-teal-400 mx-auto fixed right-0 left-0 overflow-x-auto">
                    
                    <ul class="list-none flex justify-center">
                        <li class="mr-6">
                            <a href="{{route('admin.posts.create')}}" 
                                class="text-white hover:text-blue-900">
                                Post create
                            </a>
                        </li>

                        <li class="mr-6">
                            <a href="{{route('admin.posts.index')}}" 
                                class="text-white hover:text-blue-900">
                                View all posts
                            </a>
                        </li>

                        <li class="mr-6">
                            <a href="{{route('password.edit')}}" 
                                class="text-white hover:text-blue-900">
                                Change password
                            </a>
                        </li>

                        <li class="mr-6">
                            <a href="{{route('profile.edit')}}" 
                                class="text-white hover:text-blue-900">
                                Update profile
                            </a>
                        </li>


                        <li class="mr-6">
                            <a href="{{ route('admin.clearCache') }}"  class="text-white hover:text-blue-900">
                                Clear Cache
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="container mx-auto px-5">

               
                <div class="lg:flex mb-4 py-20">
                    
                    <!-- <div class="lg:w-1/3 bg-gray-50 h-auto mt-2 mr-2">
                        <div class="flex items-center p-5">
                            <span class="w-10 h-10 rounded-lg mr-4 bg-teal-100 text-center">
                                <i class="fa-solid fa-eye fa-xl mt-5"></i>
                            </span>
                            <div class="text-sm">
                                <p class="text-black leading-none">
                                    
                                </p>
                                <p class="text-grey-dark">
                               

                                </p>
                            </div>
                        </div>
                    </div> -->
                </div> 
@endsection
@section('scripts')
@parent

@endsection
