<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Work with me') }}
      </h2>
    </x-slot>

    <div class="py-12 grid grid-rows-1 lg:grid-cols-1 gap-4">
     
      <div class="lg:w-7/12 sm:px-6 lg:px-8">
       
        <article class="prose lg:prose-xl ms-3">
            <h1>Work with me</h1>
                <!-- Form -->
                <form method="POST" action="{{route('contact.store') }}">
                    
                    @csrf
                    <x-honeypot />

                    <div class="mt-4">
                        <label for="name" :value="__('Name')" >
                          <input id="text" type="text" 
                            class="rounded border-gray-300 text-indigo-600 
                            shadow-sm focus:ring-indigo-500 w-full" 
                            name="name"
                            placeholder="Full name">
                        
                        </label>
                    </div>
                    <!-- Email -->
                  
                    <div class="mt-4">
                        <label for="number" :value="__('Email')" >
                          <input id="number" type="email" 
                            class="rounded border-gray-300 text-indigo-600 
                            shadow-sm focus:ring-indigo-500 w-full" 
                            name="number"
                            placeholder="mail@example.com (optional)">
                        
                        </label>
                    </div>
                    <!-- Email -->

                    <div class="mt-4">

                      <label for="avatar" :value="__('Number')" >
                        <input id="number" type="tel" 
                          class="rounded border-gray-300 text-indigo-600 w-full
                          shadow-sm focus:ring-indigo-500" 
                          name="number" 
                          placeholder="mobile number">
                        <x-input-error :messages="$errors->get('number')" class="mt-2" />
                      </label>
                    </div>
                  <!-- Number -->

                    <div class="mt-4">
                      <label for="Message" :value="__('Message')" >
                        <textarea name="message" id="description" 
                        :value="old('Message')"
                        cols="30" rows="10" class="block mt-1 w-full"
                        class="block mt-1 w-full"
                        placeholder="Say hello">
                      </textarea>
                        <x-input-error :messages="$errors->get('Message')" class="mt-2" />
                      </label>                         
                    </div>
                    <!-- Message -->

                    <div class="mt-4">
                        <x-primary-button>
                            {{ __('Send Message') }}
                        </x-primary-button>
                    </div>
                </form>


                <!-- End Form -->
        </article>
      </div>
    <div>

   
</x-app-layout>
