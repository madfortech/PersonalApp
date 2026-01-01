    
         
            <div class="border-2 rounded-xs p-3">
              <h2 class="text-2xl capitalize">{{__('latest categories')}}</h2>  
              <ul class="list-decimal divide-y py-5 px-3">

                @foreach($latestCategory as $item)
                  <li>
                    
                    <a href="{{route('categories.index')}}"> {{ $item->name ?? '' }}</a>
                  </li>
                @endforeach 
              </ul>
             
              <a href="{{route('categories.index')}}"  class="text-blue-600 text-sm uppercase font-medium hover:text-blue-950">
                {{__('view all categories')}}
              </a>
            </div>
         