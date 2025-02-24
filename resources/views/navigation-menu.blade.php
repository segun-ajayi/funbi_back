{{--<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">--}}
{{--    <!-- Primary Navigation Menu -->--}}
{{--    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="flex justify-between h-16">--}}
{{--            <div class="flex">--}}
{{--                <!-- Logo -->--}}
{{--                <div class="shrink-0 flex items-center">--}}
{{--                    <a href="{{ route('dashboard') }}">--}}
{{--                        <x-application-mark class="block h-9 w-auto" />--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <!-- Navigation Links -->--}}
{{--                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">--}}
{{--                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--                        {{ __('Dashboard') }}--}}
{{--                    </x-nav-link>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="hidden sm:flex sm:items-center sm:ms-6">--}}
{{--                <!-- Teams Dropdown -->--}}
{{--                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())--}}
{{--                    <div class="ms-3 relative">--}}
{{--                        <x-dropdown align="right" width="60">--}}
{{--                            <x-slot name="trigger">--}}
{{--                                <span class="inline-flex rounded-md">--}}
{{--                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        {{ Auth::user()->currentTeam->name }}--}}

{{--                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                </span>--}}
{{--                            </x-slot>--}}

{{--                            <x-slot name="content">--}}
{{--                                <div class="w-60">--}}
{{--                                    <!-- Team Management -->--}}
{{--                                    <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                                        {{ __('Manage Team') }}--}}
{{--                                    </div>--}}

{{--                                    <!-- Team Settings -->--}}
{{--                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">--}}
{{--                                        {{ __('Team Settings') }}--}}
{{--                                    </x-dropdown-link>--}}

{{--                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())--}}
{{--                                        <x-dropdown-link href="{{ route('teams.create') }}">--}}
{{--                                            {{ __('Create New Team') }}--}}
{{--                                        </x-dropdown-link>--}}
{{--                                    @endcan--}}

{{--                                    <!-- Team Switcher -->--}}
{{--                                    @if (Auth::user()->allTeams()->count() > 1)--}}
{{--                                        <div class="border-t border-gray-200"></div>--}}

{{--                                        <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                                            {{ __('Switch Teams') }}--}}
{{--                                        </div>--}}

{{--                                        @foreach (Auth::user()->allTeams() as $team)--}}
{{--                                            <x-switchable-team :team="$team" />--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </x-slot>--}}
{{--                        </x-dropdown>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <!-- Settings Dropdown -->--}}
{{--                <div class="ms-3 relative">--}}
{{--                    <x-dropdown align="right" width="48">--}}
{{--                        <x-slot name="trigger">--}}
{{--                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())--}}
{{--                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">--}}
{{--                                    <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />--}}
{{--                                </button>--}}
{{--                            @else--}}
{{--                                <span class="inline-flex rounded-md">--}}
{{--                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        {{ Auth::user()->name }}--}}

{{--                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                </span>--}}
{{--                            @endif--}}
{{--                        </x-slot>--}}

{{--                        <x-slot name="content">--}}
{{--                            <!-- Account Management -->--}}
{{--                            <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                                {{ __('Manage Account') }}--}}
{{--                            </div>--}}

{{--                            <x-dropdown-link href="{{ route('profile.show') }}">--}}
{{--                                {{ __('Profile') }}--}}
{{--                            </x-dropdown-link>--}}

{{--                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())--}}
{{--                                <x-dropdown-link href="{{ route('api-tokens.index') }}">--}}
{{--                                    {{ __('API Tokens') }}--}}
{{--                                </x-dropdown-link>--}}
{{--                            @endif--}}

{{--                            <div class="border-t border-gray-200"></div>--}}

{{--                            <!-- Authentication -->--}}
{{--                            <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                                @csrf--}}

{{--                                <x-dropdown-link href="{{ route('logout') }}"--}}
{{--                                         @click.prevent="$root.submit();">--}}
{{--                                    {{ __('Log Out') }}--}}
{{--                                </x-dropdown-link>--}}
{{--                            </form>--}}
{{--                        </x-slot>--}}
{{--                    </x-dropdown>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Hamburger -->--}}
{{--            <div class="-me-2 flex items-center sm:hidden">--}}
{{--                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
{{--                    <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Responsive Navigation Menu -->--}}
{{--    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">--}}
{{--        <div class="pt-2 pb-3 space-y-1">--}}
{{--            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </x-responsive-nav-link>--}}
{{--        </div>--}}

{{--        <!-- Responsive Settings Options -->--}}
{{--        <div class="pt-4 pb-1 border-t border-gray-200">--}}
{{--            <div class="flex items-center px-4">--}}
{{--                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())--}}
{{--                    <div class="shrink-0 me-3">--}}
{{--                        <img class="size-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div>--}}
{{--                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>--}}
{{--                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="mt-3 space-y-1">--}}
{{--                <!-- Account Management -->--}}
{{--                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">--}}
{{--                    {{ __('Profile') }}--}}
{{--                </x-responsive-nav-link>--}}

{{--                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())--}}
{{--                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">--}}
{{--                        {{ __('API Tokens') }}--}}
{{--                    </x-responsive-nav-link>--}}
{{--                @endif--}}

{{--                <!-- Authentication -->--}}
{{--                <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                    @csrf--}}

{{--                    <x-responsive-nav-link href="{{ route('logout') }}"--}}
{{--                                   @click.prevent="$root.submit();">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-responsive-nav-link>--}}
{{--                </form>--}}

{{--                <!-- Team Management -->--}}
{{--                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())--}}
{{--                    <div class="border-t border-gray-200"></div>--}}

{{--                    <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                        {{ __('Manage Team') }}--}}
{{--                    </div>--}}

{{--                    <!-- Team Settings -->--}}
{{--                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">--}}
{{--                        {{ __('Team Settings') }}--}}
{{--                    </x-responsive-nav-link>--}}

{{--                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())--}}
{{--                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">--}}
{{--                            {{ __('Create New Team') }}--}}
{{--                        </x-responsive-nav-link>--}}
{{--                    @endcan--}}

{{--                    <!-- Team Switcher -->--}}
{{--                    @if (Auth::user()->allTeams()->count() > 1)--}}
{{--                        <div class="border-t border-gray-200"></div>--}}

{{--                        <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                            {{ __('Switch Teams') }}--}}
{{--                        </div>--}}

{{--                        @foreach (Auth::user()->allTeams() as $team)--}}
{{--                            <x-switchable-team :team="$team" component="responsive-nav-link" />--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<div class="sidebar-left">
    <div class="sidebar-left-info">

        <div class="user-box">
            <div class="d-flex justify-content-center">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="" class="img-fluid rounded-circle">
            </div>
            <div class="text-center text-white mt-2">
                <h6>{{ Auth::user()->name }}</h6>
                <p class="text-muted m-0">{{ Auth::user()->designation }}</p>
            </div>
        </div>

        <!--sidebar nav start-->
        <ul class="side-navigation">
            <li>
                <h3 class="navigation-title">Navigation</h3>
            </li>
            <li class="{{ request()->routeIs('dashboard') ? 'nav-active active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="mdi mdi-gauge"></i> <span>Choose Website</span></a>
            </li>
            <li>
                <h3 class="navigation-title">EDIT WEBSITE</h3>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"><i class="mdi mdi-buffer"></i> <span>Menu</span></a>
            </li>
            <li class="menu-list"><a href=""><i class="mdi mdi-google-circles-extended"></i> <span>About Us <span
                            class="badge badge-primary noti-arrow pull-right"></span> </span></a>
                <ul class="child-list">
                    <li><a href="components-grid.html"> Grid</a></li>
                    <li><a href="components-calendar.html"> Calendar</a></li>
                    <li><a href="components-sweet-alerts.html"> Sweet Alerts </a></li>
                    <li><a href="components-portlets.html"> Portlets </a></li>
                    <li><a href="components-widgets.html"> Widgets </a></li>
                    <li><a href="components-nestable.html"> Nestable </a></li>
                    <li><a href="components-range-slider.html"> Range Slider </a></li>
                </ul>
            </li>
        </ul>
        <!--sidebar nav end-->
    </div>
</div>
