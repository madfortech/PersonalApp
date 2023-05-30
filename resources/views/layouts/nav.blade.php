 <nav class=" w-24 min-w-full bg-gray-50 min-xl:min-w-0 p-5 border-b-2 drop-shadow-md 
 fixed top-0 right-0 left-0">
     
    <div class="flex flex-row">
      <div class="p-5 max-w-screen-md mb-2 bg-green-400 hover:bg-green-500 text-center border-0 rounded-lg space-y-2">
        <a href="{{('/')}}" 
          class="text-2xl uppercase text-gray-50">
          brand
        </a>
        </div>
        <ul class="md:flex justify-end w-full text-gray-500 text-sm space-x-2">
          <li>
            <a href="{{('/')}}" class="capitalize hover:text-gray-700">terms conditions</a>
          </li>
          <li>
            <a href="{{('/')}}" class="capitalize hover:text-gray-700">privacy policy</a>
          </li>
         
          @auth
            @role('super-admin')
            <li>
              <a href="{{route('password.edit')}}" class="capitalize">account</a>
            </li>
            @endrole
          @endauth          
        </ul>
      </div>
   
      <ul class="flex space-x-2 text-gray-500  overflow-x-auto text-xl capitalize justify-center">

        <li>
          <a href="{{('/')}}" class="hover:text-gray-700">articles</a>
        </li>
        @if (Route::has('login'))
        
          @auth
            @role('super-admin')
            <li>
              <a href="{{route('admin.admin.home')}}" class="hover:text-gray-700">home</a>
            </li>
            @endrole
            <li>
              <a href="">  {{ Auth::user()->name }}</a>
            </li>
            <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a href="{{ route('logout') }}" 
                    class="lg:p-3 hover:text-gray-700"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Logout
                  </a>
            </form>
            @else
            <li>
              <a href="{{route('login')}}" class="lg:p-3 hover:text-gray-700">
                Login
              </a>
            </li>
          @endauth
        @endif
      </ul>
    </div>
 </nav>
      

 