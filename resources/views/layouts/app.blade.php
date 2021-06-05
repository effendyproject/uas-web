<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @trixassets
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <div id="main">
            <!-- Sidebar -->
            <div class="relative h-full min-h-screen bg-white shadow-sm">
                <div class="xl:py-2">
                    <div class="group relative sidebar-item with-children">
                        <a href="{{ route('dashboard') }}"
                            class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 align-middle border-r-4 hover:bg-gray-50 {{request()->routeIs('dashboard')?'border-blue-500':''}}">
                            <i class="fa fa-tachometer-alt text-xl text-gray-600 mr-4"></i>
                            <div class=" text-xs">Dashboard</div>
                        </a>
                    </div>
                    <div class="hidden xl:block uppercase font-bold text-grey-darker text-xs px-4 py-2">
                        CMS
                    </div>
                    <div class="group relative sidebar-item with-children">
                        <a href="{{ route('services') }}"
                           class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4  align-middle border-r-4 border-transparent hover:bg-gray-50 {{request()->routeIs('services')?'border-blue-500':''}}">
                            <i class="fas fa-clipboard-list text-xl text-gray-600 mr-4"></i>
                            <div class=" text-xs">Services</div>
                        </a>
                    </div>
                    <div class="group relative sidebar-item with-children">
                        <a href="{{ route('blogs') }}"
                           class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 align-middle border-r-4 border-transparent hover:bg-gray-50 {{request()->routeIs('blogs')?'border-blue-500':''}}">
                            <i class="fab fa-blogger-b text-xl text-gray-600 mr-4"></i>
                            <div class=" text-xs">Blogs</div>
                        </a>
                    </div>
                    <div class="group relative sidebar-item with-children">
                        <a href="{{ route('testimonials') }}"
                           class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 align-middle border-r-4 border-transparent hover:bg-gray-50 {{request()->routeIs('testimonials')?'border-blue-500':''}}">
                            <i class="fas fa-comment-dots text-xl text-gray-600 mr-4"></i>
                            <div class=" text-xs">Testimonials</div>
                        </a>
                    </div>
                    {{-- <div class="group relative sidebar-item with-children">
                        <a href="#"
                            class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 border-r-4 border-blue-dark xl:bg-black bg-black xl:opacity-75">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-6 w-6 text-grey-darker fill-current xl:mr-2">
                                <path
                                    d="M15 19a3 3 0 0 1-6 0H4a1 1 0 0 1 0-2h1v-6a7 7 0 0 1 4.02-6.34 3 3 0 0 1 5.96 0A7 7 0 0 1 19 11v6h1a1 1 0 0 1 0 2h-5zm-4 0a1 1 0 0 0 2 0h-2zm0-12.9A5 5 0 0 0 7 11v6h10v-6a5 5 0 0 0-4-4.9V5a1 1 0 0 0-2 0v1.1z"
                                    class="heroicon-ui"></path>
                            </svg>
                            <div class=" text-xs">Notifications</div>
                        </a>
                        <div
                            class="absolute xl:relative hidden xl:block pin-t left-full xl:pin-none w-48 xl:w-auto group-hover:block bg-black z-50 xl:z-auto">
                            <a href="#"
                                class="block text-left xl:flex xl:items-center shadow xl:shadow-none py-3 px-3 xl:px-4 border-r-4 border-transparent  hover:text-blue-dark text-xs">
                                All Notification
                            </a>
                            <a href="#"
                                class="block text-left xl:flex xl:items-center shadow xl:shadow-none py-3 px-3 xl:px-4 border-r-4 border-transparent  hover:text-blue-dark text-xs">
                                Friends
                            </a>
                            <a href="#"
                                class="block text-left xl:flex xl:items-center shadow xl:shadow-none py-3 px-3 xl:px-4 border-r-4 border-transparent  hover:text-blue-dark text-xs">
                                Other
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Content -->
            <div class="bg-grey-50 h-full pt-8">
                {{ $slot }}
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
