<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
            {{--                <div class="shrink-0 flex items-center">--}}
            {{--                    <a href="{{ route('dashboard') }}">--}}
            {{--                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />--}}
            {{--                    </a>--}}
            {{--                </div>--}}

            <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-0 sm:flex pt-2">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Profile dropdown -->
            <div x-data="{open:false}" class="relative flex">
                <div x-on:click="open = ! open" class="pt-4 grid place-items-center cursor-pointer">
                    <button type="button"
                            class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring focus:ring-blue-300 hover:shadow "
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-10 w-10 rounded-full"
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="">
                    </button>
                    <span class="flex text-center text-xs mb-1">{{ Auth::user()->name }}</span>
                </div>


                <div x-show="open" x-on:click.away="open = false"
                     class="origin-top-right absolute right-0 top-20 mt-2 w-48 rounded-md shadow-lg py-1 bg-gray-900 ring-1 ring-black ring-opacity-5 focus:outline-none divide-y divide-gray-800"
                     role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-400" -->
                        <a href="#" class="text-gray-400 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-0">Edit</a>
                        <a href="#" class="text-gray-400 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-1">Duplicate</a>
                    </div>
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-400 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-2">Archive</a>
                        <a href="#" class="text-gray-400 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-3">Move</a>
                    </div>
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-400 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-4">Share</a>
                        <a href="#" class="text-gray-400 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-5">Add to favorites</a>
                    </div>
                    <div class="py-1 justify-center flex flex-row items-start group" role="none">
                        <div class="flex pl-4 py-2 align-start text-gray-400 group-hover:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </div>
                        <div class="flex w-full">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link-dark :href="route('logout')"
                                                      onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link-dark>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
