<x-app-layout>

    @section('title','Terms conditions')
                          
        <x-slot name="header">
            <h2 class="font-semibold text-3xl text-gray-800 text-left capitalize">
                {{__('terms conditions')}}
            </h2>
          

        </x-slot>
           
        <div class="max-w-7xl mx-auto lg:grid grid-cols-1 gap-3 mt-12">
          
                <div id="terms">
                    {!! $terms->terms !!}
                </div>
               
                <form action="{{ route('terms.store') }}" method="post">
                    @csrf
    
                    <div class="mt-4 p-1">
                        <input name="terms" type="checkbox" id="terms_and_conditions" required>
                        <label for="terms_and_conditions">{{ __('terms::terms.label') }}</label>
                        @error('terms')
                            <div class="mt-2" role="alert">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button class=" bg-blue-500 hover:bg-blue-800 text-white border-2 rounded-none px-3 p-2"> 
                          {{ __('continue') }}
                        </button>
                      </div>
                     
                </form>
            </div>
        </div>   
</x-app-layout>
