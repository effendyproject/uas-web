@extends('layouts.main')

@section('title', 'Service')

@section('container')

<!-- Header -->
<header class="header relative w-full h-screen bg-no-repeat bg-center">
    <div class="items-center justify-center h-full flex">
        <div class="container flex text-center flex-col">
            <h2 class="tagline">Services</h2>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Product -->
<section class="section product">
    <div class="text-center mb-5">
        <h2 class="title">Our Service</h2>
    </div>
    <div class="sm:flex block text-center">
        @foreach($services as $service)
            <div class="sm:w-4/12 w-full relative m-4">
                <div class="card card-custom bg-white border-white border-0">
                    <div class="card-custom-img">
                    </div>
                    <div class="card-custom-avatar">
                        <img class="h-20 rounded-full" src="{{ asset('storage/'.$service->image_name) }}">
                    </div>
                    <div class="card-body text-left" style="overflow-y: auto">
                        <h4 class="text-2xl"><strong>{{ $service->name }}</strong></h4>
                        <p class="card-text text-md font-bold text-yellow-600 my-2">{{ $service->format_price }}</p>
                        <p class="text-gray-900">{{ $service->description }}</p>
                        <small class="text-xs text-gray-500 mt-2">{{ $service->format_day }} day estimated delivery</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- End Product -->

<!-- Gallery -->
<section class="section gallery">
    <div class="text-center mb-5">
        <h2 class="title">Gallery</h2>
    </div>
    <div class="sm:flex block">
        <div class="sm:w-1/3 w-full mb-4 mx-2">
            <img src="https://images.unsplash.com/photo-1607227063002-677dc5fdf96f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1493946740644-2d8a1f1a6aff?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1573014089159-8ee711dc5a8e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />
        </div>

        <div class="sm:w-1/3 w-full mb-4 mx-2">
            <img src="https://images.unsplash.com/photo-1609143739217-01b60dad1c67?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8c2hpcHBpbmd8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1543709323-1f653b58d995?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1576423596782-8c5478efd11f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />
        </div>

        <div class="sm:w-1/3 w-full mb-4 mx-2">
            <img src="https://images.unsplash.com/photo-1527908147823-068bba50c255?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1449586919022-f3dfddc48a71?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1585713181935-d5f622cc2415?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />
        </div>
    </div>
</section>
<!-- End Gallery -->

@endsection
