    
          <h2 class="text-2xl capitalize">latest post</h2>
          <div class="">
              <ul class="list-disc	border-2 p-1 rounded-sm divide-y">

                @foreach($latestpost as $item)
                  <li>
                    <a href="{{route('posts.index')}}"> {{ $item->title ?? '' }}</a>
                  </li>
                @endforeach
              </ul>
              
          </div>
         