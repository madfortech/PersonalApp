<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
  <div class="flex items-center flex-no-shrink text-white mr-6">
    <span class="font-semibold text-xl tracking-tight">
      <a href="{{('/')}}">re use code</a>
    </span>
  </div>
  
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <!-- Navbar Link -->
      @auth
        <a href="{{route('admin.posts.create')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-900 hover:bg-teal-300  mt-4 lg:mt-0">
          add post
        </a>
      @endauth
    </div>
    <div>
      @if (Route::has('login'))
        
        @auth
          @role('super-admin')
            <a href="{{route('admin.admin.home')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-900 hover:bg-teal-300  mt-4 lg:mt-0">
              Home
            </a>
          @endrole
          <a href="" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-900 hover:bg-teal-300 mt-4 lg:mt-0">
            {{ Auth::user()->name }}
          </a>
          <a  class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-900 hover:bg-teal-300 mt-4 lg:mt-0"
            href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-lock"></i>
            {{ __('Logout') }}
          </a>
          <form 
          id="logout-form" 
          action="{{ route('logout') }}" 
          method="POST" 
          style="display: none;">
            @csrf
          </form>
          @else
          <a href="{{ route('login') }}" 
            class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-900 
            border-white hover:border-transparent hover:text-teal-100
             hover:bg-teal-300 mt-4 lg:mt-0">
            {{ __('Login') }}
          </a>
        @endauth
      @endif
    </div>
  </div>
</nav>
