<x-app-layout>

    @section('title','Privacy conditions')
                          
        <x-slot name="header">
            <h2 class="font-semibold text-3xl text-gray-800 text-left capitalize">
                {{__('privacy conditions')}}
            </h2>
          

        </x-slot>
           
        <div class="max-w-7xl mx-auto lg:grid grid-cols-1 gap-3 mt-12">
 
            @foreach ($item as $data)
                <div id="terms">
                    {!! $data->privacy !!}
                </div>
                
                 @role('super-admin')
               
                <div class="mt-6">
                    <a class="p-3 bg-green-600 hover:bg-green-500 text-gray-50 rounded-none border-2 no-underline" href="{{ route('privacy.edit', $data->id) }}">
                        {{__('Edit privacy')}}
                    </a>
                </div>
                @endrole
            @endforeach
            
        </div>   
</x-app-layout>
