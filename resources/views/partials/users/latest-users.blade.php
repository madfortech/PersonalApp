    
         
            <div class="border-2 rounded-xs p-3">
              <h2 class="text-2xl capitalize">{{__('recent users')}}</h2>
              <ul class="list-decimal py-5 divide-y px-3">

                @foreach($latestuser as $item)
                  <li>
                    {{ $item->email ?? '' }}
                  </li>
                @endforeach
              </ul>

             
              <a href="{{route('users.index')}}"  class="text-blue-600 text-sm uppercase font-medium hover:text-blue-950">
                {{ __('View more') }}
              </a>
            </div>
         