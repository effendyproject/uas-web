@extends('layouts.main')

@section('title', 'About')

@section('container')

<!-- Header -->
<header class="header">
    <div class="container d-flex h-100 align-items-center justify-content-center">
        <div class="header-wrap text-center">
            <h2 class="tagline">About</h2>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- About -->
<div class="about">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-5">
                <p class="lh-lg">
                    We are from PT. Mover Logistic provides convenience
                    in your logistics activities. Our company has a
                    motto "Speed and Security of goods is "Service
                    Priority Guarantee", our quality of service there is
                    no doubt that there is recognition from Perum Bulog
                    and Kemenhub. Our workers too already certified
                    Professional Competence from the Institute Education
                    and Development Professional Certification
                    Management (LSP PPM) and get certification Logistics
                    Manager from BNSP and CLM professional title
                    (Certified Logistic Manager).
                </p>
            </div>
            <div class="col-md-5">
                <div class="logo text-center">
                    <img class="img-fluid" src="img/Mover Logo.png" alt="ptmoverlogisticlogo">
                </div>
            </div>
        </div>
        <div class="text-center my-3">
            <img src="https://images.unsplash.com/photo-1494412685616-a5d310fbb07d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NHx8bG9naXN0aWN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&h=500&q=80"
                 alt="" class="img-fluid rounded">
        </div>
        <div class="row my-2 mx-5">
            <div class="col-md-12 mt-3">
                <strong>Advantages at PT. Mover Logistic : </strong>
                <ul class="advantages" style="margin-left: -1%;">
                    <li>
                        It has a wide regional coverage with a drop
                        point in all cities in Indonesia.
                    </li>
                    <li>Have Courier competent in their field.</li>
                    <li>Fast delivery and low in cost.</li>
                    <li>
                        The guarantee of the safety and security of
                        goods with a bold guarantee the goods arrive
                        safely.
                    </li>
                    <li>Call Center which operates 24 hours.</li>
                    <li>
                        There was a surprise bonuses every week and the
                        end of the year.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

@endsection
