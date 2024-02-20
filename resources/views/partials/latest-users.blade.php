    
          <h2 class="text-2xl capitalize">recent users</h2>
          <div>
              <ul class="list-disc border-2 p-1 rounded-sm">

                @foreach($latestuser as $item)
                  <li>
                    {{ $item->email ?? '' }}
                  </li>
                @endforeach
              </ul>

              <x-nav-link :href="route('users.index')" class="text-blue-500">
                {{ __('View more') }}
            </x-nav-link>
          </div>
         