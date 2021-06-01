@extends('layouts.main')

@section('title', 'Home')

@section('container')

    <!-- Header -->
    <header class="header relative w-full h-screen bg-no-repeat bg-center">
        <div class="items-center justify-center h-full flex">
            <div class="container flex text-center flex-col">
                <h2 class="tagline">PT. Mover Logistic</h2>
                <p class="tagline-sub">
                    Speed and goods Security is Priority Service Guarantee
                </p>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Introduction -->
    <section class="section introduction">
        <div class="container">
            <div class="items-center justify-between md:flex block">
                <div class="md:w-1/2 w-full">
                    <div class="ratio ratio-16x9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/2JcHMhtH6_s?rel=0"
                                title="Mover Logistic Introduction" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="md:w-1/2 w-full">
                    <div class="content">
                        <h2 class="mb-3">Why Mover Logistic?</h2>
                        <p class="text-introduction">
                            We have reached 21 countries in Asia covering countries such as china trading countries,
                            Japan, Korea, etc. Also we
                            provide our store are almost in every city in the country Several in south asia. We have
                            also been working with several
                            startups in Southeast Asia for easy providing
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Introduction -->

    <!-- Amount -->
    <section class="section amount">
        <div class="container">
            <div class="sm:flex block">
                <div class="sm:w-1/4 w-full">
                    <div class="card-amount mb-5">
                        <h1 class="text-white text-4xl"><strong>21</strong></h1>
                        <h6 class="text-white">Country</h6>
                    </div>
                </div>
                <div class="sm:w-1/4 w-full">
                    <div class="card-amount mb-5">
                        <h1 class="text-white text-4xl"><strong>472</strong></h1>
                        <h6 class="text-white">City</h6>
                    </div>
                </div>
                <div class="sm:w-1/4 w-full">
                    <div class="card-amount mb-5">
                        <h1 class="text-white text-4xl"><strong>120</strong></h1>
                        <h6 class="text-white">Fleet</h6>
                    </div>
                </div>
                <div class="sm:w-1/4 w-full">
                    <div class="card-amount">
                        <h1 class="text-white text-4xl"><strong>26</strong></h1>
                        <h6 class="text-white">Partner</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Amount -->

    <!-- Testimonial -->
    <section class="section testimonial">
        <div class="container">
            <div class="text-center mb-10">
                <h2 class="title">Testimonials</h2>
            </div>
            <div class="sm:flex block mt-5">
                @foreach($data as $testimonial)
                    <div class="sm:w-1/2 w-full p-4">
                        <div class="card">
                            <div class="sm:flex block">
                                <div class="sm:w-1/3 w-full">
                                    <img class="w-full" src="{{ asset('storage/'.$testimonial->image_name) }}" alt="...">
                                </div>
                                <div class="sm:w-8/12 w-full">
                                    <div class="card-body p-5">
                                        <p class="card-text">{{$testimonial->text}}</p>
                                        <p class="card-text"><small class="text-muted">- {{$testimonial->name}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Testimonial -->

    <!-- Partner -->
    <section class="section partner mb-10">
        <div class="container">
            <div class="text-center mb-10">
                <h2 class="title">Our Clients</h2>
            </div>
            <div class="sm:flex block justify-center items-center">
                <div class="sm:w-1/6 w-full text-center p-4">
                    <img src="{{asset('assets/img/client/blibli.png')}}" alt="blibli">
                </div>
                <div class="sm:w-1/6 w-full text-center p-4">
                    <img src="{{asset('assets/img/client/bukalapak.png')}}" alt="bukalapak">
                </div>
                <div class="sm:w-1/6 w-full text-center p-4">
                    <img src="{{asset('assets/img/client/jd.id.png')}}" alt="jd.id">
                </div>
                <div class="sm:w-1/6 w-full text-center p-4">
                    <img src="{{asset('assets/img/client/lazada.png')}}" alt="lazada">
                </div>
                <div class="sm:w-1/6 w-full text-center p-4">
                    <img src="{{asset('assets/img/client/shopee.png')}}" alt="shopee">
                </div>
                <div class="sm:w-1/6 w-full text-center p-4">
                    <img src="{{asset('assets/img/client/tokopedia.png')}}" alt="tokopedia">
                </div>
            </div>
        </div>
    </section>
    <!-- End Partner -->

@endsection
