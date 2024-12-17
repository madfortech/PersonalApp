<div>
                        
    @session('success')
    <div class="alert alert-success bg-green-400 text-white p-2" role="alert">
        {{ $value }}
    </div>
    @endsession
  
</div>
   
<!-- Form -->
<form method="POST" action="{{ route('terms.update',$term) }}">
    @csrf
    @method('PUT')
   
    <div class="mt-4">
        <x-input-label for="terms" :value="__('Terms')" />
        <textarea name="terms" id="terms" 
        cols="30" rows="10"
        class="block mt-1 w-full">
        {{ old('terms', $term->terms) }}
        </textarea>
     </div>
    <!-- terms -->

    <div class="mt-4">
        
        <button class=" bg-blue-500 hover:bg-blue-700 text-white px-2 border-2 rounded-full"> 
            {{ __('Update') }}
        </button>
    </div>
</form>
<!-- End Form -->