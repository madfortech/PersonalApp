    <flux:sidebar sticky collapsible="mobile"
        class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">

        {{-- Sidebar Header --}}
        <flux:sidebar.header>
            <flux:sidebar.brand
                href="#"
                logo="https://fluxui.dev/img/demo/logo.png"
                logo:dark="https://fluxui.dev/img/demo/dark-mode-logo.png"
                name="Acme Inc."
            />
            <flux:sidebar.collapse class="lg:hidden" />
        </flux:sidebar.header>

        {{-- Sidebar Nav --}}
        <flux:sidebar.nav>

            @auth
                {{-- HOME (Role Based) --}}
                @role('super-admin')
                    <flux:sidebar.item icon="home" href="{{ route('admin.dashboard') }}" current>
                        Home
                    </flux:sidebar.item>
                @else
                    <flux:sidebar.item icon="home" href="{{ route('user.dashboard') }}" current>
                        Home
                    </flux:sidebar.item>
                @endrole

                {{-- Post Dropdown --}}
                <flux:dropdown>
                    <flux:navbar.item icon="newspaper" icon:trailing="chevron-down">
                        Post
                    </flux:navbar.item>

                    <flux:navmenu>
                        <flux:navmenu.item href="{{ ('post.create') }}">
                            Add New
                        </flux:navmenu.item>

                      
                    </flux:navmenu>
                </flux:dropdown>
            @endauth

        </flux:sidebar.nav>

        <flux:sidebar.spacer />

        {{-- Bottom Nav --}}
        <flux:sidebar.nav>
            <flux:sidebar.item icon="cog-6-tooth" href="#">
                Settings
            </flux:sidebar.item>
        </flux:sidebar.nav>

        {{-- Profile Dropdown (Desktop) --}}
        @auth
            <flux:dropdown position="top" align="start" class="max-lg:hidden">
                <flux:sidebar.profile name="{{ Auth::user()->name }}" />

                <flux:menu>
                    <flux:menu.radio.group>
                        <flux:menu.radio checked>{{ Auth::user()->email }}</flux:menu.radio>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.item icon="arrow-right-start-on-rectangle">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <flux:button type="submit" class="w-full">
                                {{ __('Log Out') }}
                            </flux:button>
                        </form>
                    </flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        @endauth

    </flux:sidebar>