    
          <h2 class="text-2xl capitalize">activity</h2>
          <div>
              <ul class="list-disc	border-2 p-1 rounded-sm">

                @foreach($latestpost as $item)
                  <li>
                    <a href="{{route('posts.index')}}"> {{ $item->title ?? '' }}</a>
                  </li>
                @endforeach
              </ul>
              
          </div>
         