<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                            class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 border-l-4 border-transparent hover:bg-gray-50 {{request()->routeIs('dashboard')?'border-blue-dark':''}}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-6 w-6 text-grey-darker fill-current xl:mr-2">
                                <path
                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"
                                    class="heroicon-ui"></path>
                            </svg>
                            <div class=" text-xs">Dashboard</div>
                        </a>
                    </div>
                    <div class="hidden xl:block uppercase font-bold text-grey-darker text-xs px-4 py-2">
                        CMS
                    </div>
                    <div class="group relative sidebar-item with-children">
                        <a href="{{ route('services') }}"
                           class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 border-l-4 border-transparent hover:bg-gray-50 {{request()->routeIs('services')?'border-blue-dark':''}}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                 class="h-6 w-6 text-grey-darker fill-current xl:mr-2">
                                <path
                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"
                                    class="heroicon-ui"></path>
                            </svg>
                            <div class=" text-xs">Services</div>
                        </a>
                    </div>
                    <div class="group relative sidebar-item with-children">
                        <a href="{{ route('blogs') }}"
                           class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 border-l-4 border-transparent hover:bg-gray-50 {{request()->routeIs('blogs')?'border-blue-dark':''}}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                 class="h-6 w-6 text-grey-darker fill-current xl:mr-2">
                                <path
                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"
                                    class="heroicon-ui"></path>
                            </svg>
                            <div class=" text-xs">Blogs</div>
                        </a>
                    </div>
                    {{-- <div class="group relative sidebar-item with-children">
                        <a href="#"
                            class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 border-l-4 border-blue-dark xl:bg-black bg-black xl:opacity-75">
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
                                class="block text-left xl:flex xl:items-center shadow xl:shadow-none py-3 px-3 xl:px-4 border-l-4 border-transparent  hover:text-blue-dark text-xs">
                                All Notification
                            </a>
                            <a href="#"
                                class="block text-left xl:flex xl:items-center shadow xl:shadow-none py-3 px-3 xl:px-4 border-l-4 border-transparent  hover:text-blue-dark text-xs">
                                Friends
                            </a>
                            <a href="#"
                                class="block text-left xl:flex xl:items-center shadow xl:shadow-none py-3 px-3 xl:px-4 border-l-4 border-transparent  hover:text-blue-dark text-xs">
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
