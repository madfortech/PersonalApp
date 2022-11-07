@extends('layouts.admin')
@section('content')
                            <h3 class="text-dark mb-4">
                                Edit Post
                            </h3>
                            <!-- Start Form Here -->
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                         
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">
                                                edit new post
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <form 
                                                enctype="multipart/form-data"
                                                method="post"
                                                action="{{ route("admin.posts.update", [$post->id]) }}">
                                               
                                                @method('PUT')
                                                @csrf
           
                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="title">
                                                                <strong>Title</strong>
                                                            </label>
                                                            <input 
                                                                class="form-control form-control-sm rounded-0" 
                                                                type="text" id="title" 
                                                                name="title"
                                                                value="{{ old('title',$post->title) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Title Field -->
 

                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="description">
                                                                <strong>Description</strong>
                                                            </label>
                                                            <x-easy-mde 
                                                                name="description"
                                                                value="{{ old('description', $post->description)}}">
                                                                
                                                            </x-easy-mde>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- description field -->

                                                <div class="mb-3">
                                                    <button 
                                                        class="btn btn-primary btn-sm rounded-0 border-0" 
                                                        type="submit">
                                                        <i class="fas fa-save"></i>
                                                        &nbsp;Update
                                                    </button>
                                                </div>
                                                <!-- Button -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Footer -->
                            <footer class="bg-white sticky-footer">
                                <div class="container my-auto">
                                    <div class="text-center my-auto copyright">
                                        <span>Copyright © AdminPanel 2022</span>
                                    </div>
                                </div>
                            </footer>
                            <!-- End Footer -->
                             
                            <a class="border rounded d-inline scroll-to-top" href="#page-top">
                                <i class="fas fa-angle-up"></i>
                            </a>





@endsection

@section('scripts')
<script>
    var uploadedAvatarMap = {}
// Dropzone.options.avatarDropzone = {
//     url: '{{ ('admin.photos.storeMedia') }}',
//     maxFilesize: 2, // MB
//     acceptedFiles: '.jpeg,.jpg,.png,.gif',
//     addRemoveLinks: true,
//     headers: {
//       'X-CSRF-TOKEN': "{{ csrf_token() }}"
//     },
//     params: {
//       size: 2,
//       width: 4096,
//       height: 4096
//     },
//     success: function (file, response) {
//       $('form').append('<input type="hidden" name="avatar[]" value="' + response.name + '">')
//       uploadedAvatarMap[file.name] = response.name
//     },
//     removedfile: function (file) {
//       console.log(file)
//       file.previewElement.remove()
//       var name = ''
//       if (typeof file.file_name !== 'undefined') {
//         name = file.file_name
//       } else {
//         name = uploadedAvatarMap[file.name]
//       }
//       $('form').find('input[name="avatar[]"][value="' + name + '"]').remove()
//     },
//     init: function () {
// @if(isset($photo) && $photo->avatar)
//       var files = {!! json_encode($photo->avatar) !!}
//           for (var i in files) {
//           var file = files[i]
//           this.options.addedfile.call(this, file)
//           this.options.thumbnail.call(this, file, file.preview)
//           file.previewElement.classList.add('dz-complete')
//           $('form').append('<input type="hidden" name="avatar[]" value="' + file.file_name + '">')
//         }
// @endif
//     },
//      error: function (file, response) {
//          if ($.type(response) === 'string') {
//              var message = response //dropzone sends it's own error messages in string
//          } else {
//              var message = response.errors.file
//          }
//          file.previewElement.classList.add('dz-error')
//          _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
//          _results = []
//          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
//              node = _ref[_i]
//              _results.push(node.textContent = message)
//          }

//          return _results
//      }
// }
</script>
@endsection