    <nav class="navbar navbar-light navbar-expand-md sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{('/')}}">
                personal app
            </a>
            <button 
                data-bs-toggle="collapse" 
                class="navbar-toggler rounded-0 border-0" 
                data-bs-target="#navcol">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol">
                <ul class="navbar-nav d-flex flex-row flex-grow-1 flex-shrink-0 justify-content-center mx-auto" 
                    data-bs-target="#navcol" 
                    data-bs-smooth-scroll="true">
                    <li class="nav-item mx-1 my-1">
                        <a class="nav-link" href="#">
                            Articles
                        </a>
                    </li>
                    <li class="nav-item mx-1 my-1">
                        <a class="nav-link" href="#">
                            podcast
                        </a>
                    </li>
                    <li class="nav-item mx-1 my-1">
                        <a class="nav-link" href="#">
                            videos
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto" data-bs-target="#navcol" data-bs-smooth-scroll="true">
                @if (Route::has('login'))
                    @auth

                    <li class="nav-item mx-1 my-1">
                        <a class="nav-link active" href="{{url('/home') }}">
                            home
                        </a>
                    </li>

                    <li class="nav-item mx-1 my-1">
                        <a class="nav-link active" href="{{route('users.index') }}">
                            manage users
                        </a>
                    </li>

                    <li class="nav-item dropdown mx-1 my-1">
                        <a class="dropdown-toggle nav-link" 
                            aria-expanded="false" 
                            data-bs-toggle="dropdown" 
                            href="#">
                            {{ Auth::user()->name }}   
                        </a>
                        <div class="dropdown-menu mt-5">
                            <a class="dropdown-item" href="{{ route('profile.profile.edit') }}">
                                Edit profile
                            </a>
                           
                            <a class="dropdown-item" href="{{ route('profile.password.edit') }}">
                                Edit password
                            </a>
                            
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        
                                    Logout
                                </a>
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item mx-1 my-1">
                        <a class="nav-link" href="{{(url('login'))}}">
                            Login
                        </a>
                    </li>
                    @endauth
                @endif
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar Comment-->

   