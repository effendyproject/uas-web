@extends('layouts.main')

@section('title', 'Home')

@section('container')

    <!-- Header -->
    <header class="relative w-full h-screen">
        <div class="container d-flex h-100 align-items-center justify-content-center">
            <div class="header-wrap text-center">
                <h2 class="tagline">PT. Mover Logistic</h2>
                <p>
                    Speed and goods Security is Priority Service Guarantee
                </p>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Introduction -->
    <section class="section introduction">
        <div class="container">
            <div class="row justify-content-between align-items-center no-gutters">
                <div class="col-md-6">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/2JcHMhtH6_s?rel=0"
                                title="Mover Logistic Introduction" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
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
            <div class="row">
                <div class="col-md-3">
                    <div class="card-amount">
                        <h1 class="text-white"><strong>21</strong></h1>
                        <h6 class="text-white">Country</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-amount">
                        <h1 class="text-white"><strong>472</strong></h1>
                        <h6 class="text-white">City</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-amount">
                        <h1 class="text-white"><strong>120</strong></h1>
                        <h6 class="text-white">Fleet</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-amount">
                        <h1 class="text-white"><strong>26</strong></h1>
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
            <div class="text-center">
                <h2 class="logintitle border-green mb-5">Testimonials</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row justify-content-center g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1585846416120-3a7354ed7d39?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=150&h=150&q=80" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">It has never been this easy and efficient in terms of shipping and logistics at Tokopedia. I highly recommend it</p>
                                    <p class="card-text"><small class="text-muted">- VP at Tokopedia</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="row justify-content-center g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1543132220-4bf3de6e10ae?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=150&h=150&q=80" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Simple, robust, efficient and customer oriented to explain service on mover logistic</p>
                                    <p class="card-text"><small class="text-muted">- Head of logistic at Shopee</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial -->

    <!-- Partner -->
    <section class="section partner">
        <div class="container">
            <div class="text-center">
                <h2 class="logintitle border-green mb-5">Our Clients</h2>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-2 text-center">
                    <img src="./img/client/blibli.png" alt="blibli" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="./img/client/bukalapak.png" alt="bukalapak" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="./img/client/jd.id.png" alt="jd.id" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="./img/client/lazada.png" alt="lazada" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="./img/client/shopee.png" alt="shopee" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="./img/client/tokopedia.png" alt="tokopedia" height="40">
                </div>
            </div>
        </div>
    </section>
    <!-- End Partner -->

@endsection
