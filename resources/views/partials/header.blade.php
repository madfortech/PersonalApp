    <flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">

     
        <flux:brand href="{{('/')}}" name="Learning." class="max-lg:hidden dark:hidden" />
        
        <flux:spacer />
        <flux:navbar class="me-4">
            @auth
                @role('super-admin')
                    <flux:navbar.item icon="home" href="{{ route('admin.dashboard') }}" label="Home" />
                @else
                    <flux:navbar.item icon="home" href="{{ route('user.dashboard') }}" label="Home" />
                @endrole
            @endauth

            @guest
                <flux:navbar.item icon="lock-open" href="{{ route('login') }}" label="Login" />

            @endguest
       
        </flux:navbar>
        <flux:dropdown position="top" align="start">
            @auth
                <flux:profile name="{{ Auth::user()->name }}" />
                <flux:menu>
                    <flux:menu.separator />
                    <flux:menu.item label="Log Out">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <flux:button icon="lock-closed" type="submit" class="w-full">
                                {{ __('Log Out') }}
                            </flux:button>
                        </form>
                    </flux:menu.item>
                </flux:menu>
            @endauth
        </flux:dropdown>
    </flux:header>