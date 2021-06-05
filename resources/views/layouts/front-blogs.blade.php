@extends('layouts.main')

@section('title', 'Blog | '.$data->slug)

@section('container')

    <!-- Header -->
    <header class="header relative w-full h-screen bg-no-repeat bg-center">
        <div class="items-center justify-center h-full flex">
            <div class="container flex text-center flex-col">
                <h2 class="tagline">Blogs</h2>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <div class="bg-gray-100 p-8">
        <div class="bg-white m-8 rounded-md p-16">
            <nav class="mt-5" aria-label="breadcrumb">
                <ol class="flex leading-none text-indigo-600 divide-x divide-indigo-400">
                    <li class="px-4"><a href="#">blog</a></li>
                    <li class="px-4 text-gray-700" aria-current="page">{{ $data->slug }}</li>
                </ol>
            </nav>
            <div class="lg:flex lg:items-center lg:justify-between mx-4 mt-2">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        {{ $data->title }}
                    </h2>
                    @if (!empty($data->sub_title))
                        <h4 class="text-sm leading-7 text-gray-500 sm:text-sm sm:truncate">
                            {{ $data->sub_title }}
                        </h4>
                    @endif
                    <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            Today
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5 mx-4 text-gray-900">
                {!! $data->content !!}
            </div>
        </div>
    </div>

@endsection
