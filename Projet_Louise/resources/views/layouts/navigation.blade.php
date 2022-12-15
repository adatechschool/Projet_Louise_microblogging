<nav x-data="{ open: false }" class=" flex grid items-stretch place-content-between bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                @auth
                <div class="text-center flex space-x-2 sm:space-x-8 sm:my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('post.index')" :active="request()->routeIs('post.index')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Profil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
                        {{ __('Créer un post') }}
                    </x-nav-link>
                    <!-- Logo -->
                    <img src="{{ asset('img/cat.png') }}" alt="a cute kitten" class="mr-2">
                </div>
                @endauth
                @guest
                <!-- Logo -->
                <img src="{{ asset('img/cat.png') }}" alt="a cute kitten" class="mr-2">
                @endguest
            </div>
        </div>
    </div>
    <!-- Settings Dropdown -->
    <div class="flex items-center sm:ml-6">
        @auth
        <x-dropdown align="left" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center m-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>
                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Compte') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Se déconnecter') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
        @endauth
        @guest
        <x-dropdown align="left" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center m-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>Menu</div>
                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
            <x-slot name="content">
                <!-- Authentication -->
                <x-dropdown-link :href="route('login')">{{ __('Se connecter') }}</x-dropdown-link>
                <x-dropdown-link :href="route('register')">{{ __('S\'enregistrer') }}</x-dropdown-link>
            </x-slot>
        </x-dropdown>
        @endguest
    </div>
</nav>