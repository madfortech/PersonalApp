@extends('layouts.admin')
@section('content')
                    <h3 class="text-dark mb-4">
                        View all posts
                    </h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">
                                Post Info
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" 
                                role="grid" 
                                aria-describedby="dataTable_info">
                                <table class="table my-0" 
                                    id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th> Created at</th>
                                            <th> Updated at</th>
                                            <th>Deleted at</th>
                                        </tr>
                                    </thead>
                                    @foreach($blogpost as $key => $blogposts)
                                    <tbody>
                                        <tr>
                                            <td> 
                                                {{ $blogposts->id ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blogposts->title ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blogposts->description ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blogposts->created_at ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blogposts->updated_at ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blogposts->deleted_at ?? '' }}
                                            </td>
                                            <td>
                                                <a class=""
                                                    href="{{ route('admin.posts.edit', $blogposts->id) }}">
                                                    Edit
                                                </button>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.posts.destroy', $blogposts->id) }}" 
                                                    method="POST" 
                                                    onsubmit="return confirm('are you sure')" 
                                                    style="display: inline-block;">
                                                    @method('delete')
                                                    @csrf
                                                    <button 
                                                        class="btn
                                                        btn-sm rounded-0 border-0" 
                                                        type="submit"
                                                        value="{{ trans('global.delete') }}">
                                                        <i class="fas fa-remove"></i>
                                                        &nbsp;Delete Post
                                                    </button>
                                                </form>
                                            </td>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
 
    

@endsection
@section('scripts')
