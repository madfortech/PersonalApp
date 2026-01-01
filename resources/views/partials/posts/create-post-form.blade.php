  <div>
    @session('success')
    <div class="alert alert-success bg-green-400 text-white p-2" role="alert">
        {{ $value }}
    </div>
    @endsession
  </div>
   
   
  <!-- Form -->
  <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
  
    @csrf
    <x-honeypot />
  
    <div class="mt-4 border-2 p-1">
        
          <x-input-label for="title" :value="__('Title')" />
          
          <input id="title" type="text" 
            class=" border-gray-300 text-indigo-600 
            shadow-xs focus:ring-indigo-500 w-full" 
            name="title"
            placeholder="Title">
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </label>
    </div>
    <!-- Title -->
  
    <div class="mt-4 border-2 p-1">
        <x-input-label for="category" :value="__('Category')" />
        
        <a href="{{route('categories.create')}}">
          {{ __('Add new') }}
        </a>
        <select name="category_id" id="category_id" class="w-full border-gray-300 text-indigo-600 
          shadow-xs focus:ring-indigo-500">
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
        
        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
      </label>
    </div>
    <!-- Category -->
  
    <div class="mt-4 border-2 p-1">
        <x-input-label for="avatar" :value="__('Avatar')" />
        <span><i>max size 1gb only</i></span>
        <input id="avatar" type="file" 
          class="rounded border-gray-300 text-indigo-600 w-full
          shadow-xs focus:ring-indigo-500" 
          name="avatar">
        <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
      </label>
    </div>
    <!-- Avatar -->
  
    <div class="mt-4 border-2 p-1">
      <x-input-label for="description" :value="__('Description')" />
        <textarea 
          id="editor"
          name="description" 
          :value="old('description')"
          cols="30" rows="4" class="block mt-1 w-full"
          class="block mt-1 w-full"
          placeholder="write content here">
        </textarea> 
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
      </label>   
     
    <!-- Description -->
  
    <div class="mt-4">
      <button class=" bg-blue-500 hover:bg-blue-800 text-white border-2 rounded-none px-3 p-2"> 
        {{ __('Post') }}
      </button>
    </div>
  </form>
  
 