@extends('layouts.app')
@section('title', 'Post All') 
@section('content')
                <div class="grid-rows-1 mt-20">
                    <div class="container mx-auto">
                    
                        <div class="w-50  max-w-screen-md p-7">
                            <h2 class="mb-5 text-left capitalize first-letter:text-6xlxl text-3xl first-letter:font-bold first-letter:bg-green-500">
                            {{ __('view all post') }} 
                            </h2>
                        
                            <table class="table-auto border-separate border-spacing-2 border border-slate-500">
                                <thead>
                                    <tr>
                                        <th class="border border-slate-600">Id</th>
                                        <th class="border border-slate-600">Title</th>
                                        <th class="border border-slate-600">Description</th>
                                        <th class="border border-slate-600">Author</th>
                                        <th class="border border-slate-600">Created</th>
                                        <th class="border border-slate-600">
                                            <a href="{{route('admin.admin.export')}}" 
                                                class="text-gray-500 hover:text-blue-900">
                                                Export data
                                            </a>
                                        </th>

                                    </tr>
                                </thead>
                                @foreach ($posts as $post)
                                <tbody>
                                    <tr>
                                        <td class="border border-slate-700">{{ $post->id }}</td>
                                        <td class="border border-slate-700">{{ $post->title }}</td>
                                        <td class="border border-slate-700 overflow-x-hidden">{{ $post->description }}</td>
                                        <td class="border border-slate-700">{{ $post->user->name }}</td>
                                        <td class="border border-slate-700">{{ $post->created_at }}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>
             
@endsection

 