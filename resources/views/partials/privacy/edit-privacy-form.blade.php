<div>
                        
    @session('success')
    <div class="alert alert-success bg-green-400 text-white p-2" role="alert">
        {{ $value }}
    </div>
    @endsession
  
</div>
   
<!-- Form -->
<form method="POST" action="{{ route('privacy.update',$privacy) }}">
    @csrf
    @method('PUT')
   
    <div class="mt-4">
        <x-input-label for="privacy" :value="__('Privacy')" />
        <textarea name="privacy" id="privacy" 
        cols="30" rows="10"
        class="block mt-1 w-full">
        {{ old('privacy', $privacy->privacy) }}
        </textarea>
     </div>
    <!-- terms -->

    <div class="mt-4">
         <x-primary-button class="text-white border-2 rounded-none px-3 p-2">
                {{ __('Update') }}
            </x-primary-button>
        
    </div>
</form>
<!-- End Form -->