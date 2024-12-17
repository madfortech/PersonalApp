<x-admin-layout>

    @section('title','Admin Dashboard')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('search') }}
        </h2>
        
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 grid-flow-col gap-4 mt-10">

            <div>
                <ul class="list-none border-2 px-3 py-3">
                    <li>
                        @if(count($results) > 0)
                            @foreach($results as $result)
                                @foreach($result['fields_formatted'] as $field => $formattedField)
                                <li class="mb-2">
                                
                                    {{ $result['model'] }}: 
                                    
                                    <strong>{{ $formattedField }}:</strong> 
                                    {{ $result[$field] }}
                                
                            
                                </li>
                                @endforeach
                            @endforeach
    
                            @else
                            <p>{{__('No results found for your search term')}}.</p>
                        @endif
                    </li>
                </ul>
            </div>

            <div>
                a1
            </div>

        </div>
    </div>

    
  
</x-app-layout>

 