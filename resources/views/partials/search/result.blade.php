    
         
            <div class="border-2 rounded-xs p-3">
                <h2 class="text-2xl capitalize">{{__('search')}}</h2>
                <ul class="list-decimal py-5 divide-y px-3">
  
                    @if(count($results) > 0)
                    @foreach($results as $result)
                    <li class="mb-2">
                       
                            {{ $result['model'] }}: 
                            @foreach($result['fields_formatted'] as $field => $formattedField)
                                <strong>{{ $formattedField }}:</strong> {{ $result[$field] }}
                            @endforeach
                       
                    </li>
                    @endforeach

                        @else
                        <p>{{__('No results found for your search term')}}.</p>
                    @endif
                </ul>
  
               
                {{-- <a href="{{route('users.index')}}"  class="text-blue-600 text-sm uppercase font-medium hover:text-blue-950">
                  {{ __('View more') }}
                </a> --}}
              </div>
           