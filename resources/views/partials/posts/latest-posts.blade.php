    
         
            <div class="border-2 rounded-xs p-3">
              <h2 class="text-2xl capitalize">{{__('recently post')}}</h2>  
              <ul class="list-decimal	divide-y py-5 px-3">

                @foreach($latestpost as $item)
                  <li>
                    <a href="{{route('posts.index')}}"> 
                      {{ $item->title ?? '' }}
                    </a>
                    <span>  {{ $item->created_at ?? '' }}</span>
                  </li>
                @endforeach

              

                <a href="{{route('posts.index')}}"  class="text-blue-600 text-sm uppercase font-medium hover:text-blue-950">
                  {{__('view all posts')}}
                </a>
               
              </ul>
              
           </div>
         