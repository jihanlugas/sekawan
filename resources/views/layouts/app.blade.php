<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Wow') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flatpickr.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    {{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
    {{--        <div class="container">--}}
    {{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
    {{--                {{ config('app.name', 'Laravel') }}--}}
    {{--            </a>--}}
    {{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
    {{--                    aria-controls="navbarSupportedContent" aria-expanded="false"--}}
    {{--                    aria-label="{{ __('Toggle navigation') }}">--}}
    {{--                <span class="navbar-toggler-icon"></span>--}}
    {{--            </button>--}}

    {{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                <!-- Left Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav mr-auto">--}}

    {{--                </ul>--}}

    {{--                <!-- Right Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav ml-auto">--}}
    {{--                    <!-- Authentication Links -->--}}
    {{--                    @guest--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
    {{--                        </li>--}}
    {{--                        @if (Route::has('register'))--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}
    {{--                    @else--}}
    {{--                        @if(Auth::user()->is_complete)--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" href="{{ route('request') }}">{{ __('Request') }}</a>--}}
    {{--                            </li>--}}

    {{--                            <li class="nav-item dropdown">--}}
    {{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
    {{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
    {{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--                                </a>--}}

    {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--                                    <a class="dropdown-item" href="{{ route('profile') }}"> {{ "Profile" }}</a>--}}

    {{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--                                       onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                                        {{ __('Logout') }}--}}
    {{--                                    </a>--}}

    {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
    {{--                                          style="display: none;">--}}
    {{--                                        @csrf--}}
    {{--                                    </form>--}}
    {{--                                </div>--}}
    {{--                            </li>--}}
    {{--                        @else--}}
    {{--                            <li class="nav-item dropdown">--}}
    {{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
    {{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
    {{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--                                </a>--}}

    {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--                                       onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                                        {{ __('Logout') }}--}}
    {{--                                    </a>--}}

    {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
    {{--                                          style="display: none;">--}}
    {{--                                        @csrf--}}
    {{--                                    </form>--}}
    {{--                                </div>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}
    {{--                    @endguest--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}


    {{--    <nav class="bg-blue-900 shadow mb-8 py-6">--}}
    {{--        <div class="container mx-auto px-6 md:px-0">--}}
    {{--            <div class="flex items-center justify-center">--}}
    {{--                <div class="mr-6">--}}
    {{--                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">--}}
    {{--                        {{ config('app.name', 'Laravel') }}--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="flex-1 text-right">--}}
    {{--                    @guest--}}
    {{--                        <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
    {{--                        @if (Route::has('register'))--}}
    {{--                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
    {{--                        @endif--}}
    {{--                    @else--}}
    {{--                        @if(Auth::user()->is_complete)--}}
    {{--                            <a href="{{ route('request') }}"--}}
    {{--                               class="no-underline hover:underline text-gray-300 text-sm p-3">{{ __('Request') }}</a>--}}

    {{--                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>--}}

    {{--                            <a href="{{ route('logout') }}"--}}
    {{--                               class="no-underline hover:underline text-gray-300 text-sm p-3"--}}
    {{--                               onclick="event.preventDefault();--}}
    {{--                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
    {{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
    {{--                                {{ csrf_field() }}--}}
    {{--                            </form>--}}
    {{--                        @else--}}
    {{--                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>--}}

    {{--                            <a href="{{ route('logout') }}"--}}
    {{--                               class="no-underline hover:underline text-gray-300 text-sm p-3"--}}
    {{--                               onclick="event.preventDefault();--}}
    {{--                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
    {{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
    {{--                                {{ csrf_field() }}--}}
    {{--                            </form>--}}
    {{--                        @endif--}}
    {{--                    @endguest--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}


    <div>
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-on-dark.svg"
                                 alt="Workflow logo">
                        </div>
                        @guest
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline">
                                    {{--                                        <a href="#"--}}
                                    {{--                                           class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>--}}
                                    <a href="{{ route('beranda') }}"
                                       class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Beranda</a>
                                    <a href="{{ route('tentang') }}"
                                       class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Tentang</a>
                                    <a href="{{ route('tentang') }}"
                                       class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Testimoni</a>
                                    <a href="{{ route('tentang') }}"
                                       class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Kegiatan Sosial</a>
                                </div>
                            </div>
                        @else
                            @if(Auth::user()->is_complete)
                                <div class="hidden md:block">
                                    <div class="ml-10 flex items-baseline">
{{--                                        <a href="#"--}}
{{--                                           class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>--}}
                                        <a href="{{ route('beranda') }}"
                                           class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Beranda</a>
                                        <a href="{{ route('tentang') }}"
                                           class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Tentang</a>
                                        <a href="{{ route('tentang') }}"
                                           class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Testimoni</a>
                                        <a href="{{ route('tentang') }}"
                                           class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Kegiatan Sosial</a>
                                    </div>
                                </div>
                            @else
                            @endif
                        @endguest

                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <div class="ml-3 relative">
                                @guest
                                    <div class="ml-10 flex items-baseline">
                                        <a href="{{ route('login') }}"
                                           class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Login</a>
                                        <a href="{{ route('register') }}"
                                           class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Register</a>
                                    </div>
                                @else
                                    <div>
                                        <button
                                            class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid"
                                            id="user-menu-toggle" aria-label="User menu" aria-haspopup="true">
                                            <img class="h-8 w-8 rounded-full"
                                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt="">
                                        </button>
                                    </div>
                                    <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg hidden c-tw-js"
                                         id="user-menu-context">
                                        <div class="py-1 rounded-md bg-white shadow-xs" role="menu"
                                             aria-orientation="vertical" aria-labelledby="user-menu">
                                            @if(Auth::user()->is_complete)
                                            <a href="{{ route('profile') }}"
                                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                               role="menuitem">Profile</a>
                                            @endif
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                               role="menuitem">Sign out</a>
                                        </div>
                                    </div>
                                @endguest

                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button id="nav-toggle"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!--
              Mobile menu, toggle classes based on menu state.

              Open: "block", closed: "hidden"
            -->
            <div class="hidden md:hidden c-tw-js" id="nav-context">
                <div class="px-2 pt-2 pb-3 sm:px-3">
{{--                    <a href="#"--}}
{{--                       class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>--}}
                    <a href="{{ route('beranda') }}"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Beranda</a>
                    <a href="{{ route('tentang') }}"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Tentang</a>
                    <a href="{{ route('tentang') }}"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Testimoni</a>
                    <a href="{{ route('tentang') }}"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Kegiatan Sosial</a>
                </div>
                <div class="pt-3 pb-3 border-t border-gray-700">
                    @guest
                        <div class="px-2">
                            <a href="{{ route('login') }}"
                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Login</a>
                            <a href="{{ route('register') }}"
                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Register</a>
                        </div>
                    @else
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="">
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                <div class="mt-1 text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                            </div>
                        </div>
                        <div class="mt-3 px-2">
                            @if(Auth::user()->is_complete)
                            <a href="{{ route('profile') }}"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Your
                                Profile</a>
                            @endif
                            <a href="#"
                               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                Sign out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="p-4 max-w-3xl mx-auto">
                <h1 class="text-3xl font-bold leading-tight text-gray-900">
                    @yield('header')
                </h1>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"
            integrity="sha512-3WGIRFCuTpZhqYujwLp5RtARPkOy3uRtc3RXB31bJ9/i6VH2C66Z0WBV6gHhdhbUIDKFx8yTkLfEjdQM5Wl+ZQ=="
            crossorigin="anonymous"></script>
    @stack('script')
    <script>

    </script>
</div>
</body>
</html>
