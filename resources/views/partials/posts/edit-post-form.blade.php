<div>
                        
    @session('success')
    <div class="alert alert-success bg-green-400 text-white p-2" role="alert">
        {{ $value }}
    </div>
    @endsession
  
</div>
   
<!-- Form -->
<form method="POST" action="{{ route('posts.update',$post) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
    <div class="mt-4">
        <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title" class="block mt-1 w-full" 
        type="text" name="title" :value="old('title', $post->title)" 
        autofocus autocomplete="title" 
        placeholder="title"/>
     </div>
    <!-- Title -->

  

    <div class="mt-4">
      <x-input-label for="avatar" :value="__('Avatar')" />
      <x-text-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" />
     </div>
  <!-- Avatar -->

    <div class="mt-4">
        <x-input-label for="description" :value="__('Description')" />
        <textarea name="description" id="description" 
        cols="30" rows="10"
        class="block mt-1 w-full">
        {{ old('description', $post->description) }}
        </textarea>
     </div>
    <!-- Description -->

    <div class="mt-4">
        
        <button class=" bg-blue-500 hover:bg-blue-700 text-white px-2 border-2 rounded-full"> 
            {{ __('Update') }}
        </button>
    </div>
</form>
<!-- End Form -->