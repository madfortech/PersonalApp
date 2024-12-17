<div>
    @session('success')
    <div class="alert alert-success bg-green-400 text-white p-2" role="alert">
        {{ $value }}
    </div>
    @endsession
  </div>
   
   
  <!-- Form -->
  <form method="POST" action="{{ route('categories.store') }}">
  
    @csrf
    <x-honeypot />
  
    <div class="mt-4 border-2 p-3"  x-data="{ message: '' }">
        <label for="title" :value="__('Name')" >
          {{('Name')}}
          <input 
            id="name" 
            type="text" 
            class=" border-gray-300 text-indigo-600 
            shadow-sm focus:ring-indigo-500 w-full" 
            name="name"
            placeholder="name"
            x-model="message">
            <span x-text="message"></span>
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </label>
    </div>
    <!-- Name -->
   
  
    <div class="mt-4">
        
        <button class="bg-blue-700 px-4 py-2 rounded-full text-white border-2"> 
          {{ __('Save') }}
        </button>
    </div>
  </form>
  