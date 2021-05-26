<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title') | PT. Mover Logistic</title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
              integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

        <!-- custom styles -->
        <link rel="stylesheet" href="../css/app.css" />
    </head>

    <body>
        <!-- Navbar -->
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" >
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ url('/') }}">
                                <x-jet-application-mark class="block h-9 w-auto" />
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-nav-link href="{{ url('/') }}" :active="request()->routeIs('/')">
                                {{ __('Home') }}
                            </x-jet-nav-link>
                            <x-jet-nav-link href="{{ url('/about') }}" :active="request()->routeIs('about')">
                                {{ __('About') }}
                            </x-jet-nav-link>
                            <x-jet-nav-link href="{{ url('/service') }}" :active="request()->routeIs('service')">
                                {{ __('Service') }}
                            </x-jet-nav-link>
                            <x-jet-nav-link href="{{ url('/contact') }}" :active="request()->routeIs('contact')">
                                {{ __('Contact') }}
                            </x-jet-nav-link>
                            <x-jet-nav-link href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
                                {{ __('Login') }}
                            </x-jet-nav-link>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-jet-responsive-nav-link href="{{ url('/') }}" :active="request()->routeIs('/')">
                        {{ __('Home') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ url('/about') }}" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ url('/service') }}" :active="request()->routeIs('service')">
                        {{ __('Service') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ url('/contact') }}" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Login') }}
                    </x-jet-responsive-nav-link>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        @yield('container')

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 col-sm-6">
                        <div class="card text-center h-100">
                            <i class="fas fa-envelope"></i>
                            <h4>Email</h4>
                            <p>ptmoverlogistic@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 col-sm-6">
                        <div class="card text-center h-100">
                            <i class="fas fa-map-marked-alt"></i>
                            <h4>Address</h4>
                            <p>
                                Jl. Gading Serpong Boulevard padang golf no.74,
                                Tangerang
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 col-sm-6">
                        <div class="card text-center h-100">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Phone</h4>
                            <ul class="phone-lists">
                                <li>+62 822 88888 111</li>
                                <li>+62 815 5555 7755</li>
                                <li>+62 838 999999 22</li>
                                <li>021 99123456</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="copyright col-md-12 text-center">
                        <p>Copyright © PT Mover Logistic 2021</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->

        <script src="./js/script.js"></script>
    </body>

</html>
