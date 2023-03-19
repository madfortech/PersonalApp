<div class="flex w-full min-h-11 p-5 bg-gray-200">
      <ul class="sm:flex w-3/12 justify-start">
        <li class="mx-1 text-2xl mt-5">
          <a href="{{('/')}}" class="font-bold">app</a>
        </li>
         
      </ul>

      <ul class="lg:flex flex-row w-full p-5 justify-end 
          text-2xl font-light">
      @if (Route::has('login'))

        <li class="mx-1">
          <a href="{{('article')}}">article</a>
        </li>
                
        @auth
          <li class="mx-1">
            <a href="{{url('/home')}}">home</a>
          </li>
          
          <li class="mx-1">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a hover:text-zinc-900" 
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">           
                Logout
              </a>
            </form>
          </li>

          @else
          <li class="mx-1">
            <a href="{{route('login')}}">login</a>
          </li class="mx-1">
            
        @endauth
      @endif
      </ul>
</div>

 