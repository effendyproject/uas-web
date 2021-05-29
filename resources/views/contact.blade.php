@extends('layouts.main')

@section('title', 'Contact')

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

<!-- Contact -->
<div class="section">
    <div class="block">
        <div class="text-center mb-5">
            <h2 class="title">Call Center and Office</h2>
        </div>
        <div>
            <button class="accordion">Cabang Jakarta</button>
            <div class="panel">
                <ul class="advantages">
                    <li>021-9966-1111</li>
                    <li>021-9966-1122</li>
                    <li>021-9966-1133</li>
                    <li>021-9966-1144</li>
                </ul>
            </div>

            <button class="accordion">Cabang Semarang</button>
            <div class="panel">
                <ul class="advantages">
                    <li>021-9866-1111</li>
                    <li>021-9866-1122</li>
                </ul>
            </div>

            <button class="accordion">Cabang Bandung</button>
            <div class="panel">
                <ul class="advantages">
                    <li>021-9966-1112</li>
                </ul>
            </div>

            <button class="accordion">Cabang Banten</button>
            <div class="panel">
                <ul class="advantages">
                    <li>021-9911-1112</li>
                </ul>
            </div>

            <button class="accordion">Cabang Surabaya</button>
            <div class="panel">
                <ul class="advantages">
                    <li>021-9766-1132</li>
                </ul>
            </div>

            <button class="accordion">Cabang NTT-NTB-Bali</button>
            <div class="panel">
                <ul class="advantages">
                    <li>021-9766-1211(NTT)</li>
                    <li>021-9766-1212(NTB)</li>
                    <li>021-9766-1213(Bali)</li>
                </ul>
            </div>

            <button class="accordion">Cabang Jambi-Palembang-P.Pinang</button>
            <div class="panel">
                <ul class="advantages">
                    <li>021-3232-0098(Jambi)</li>
                    <li>021-3232-0099(Palembang)</li>
                    <li>021-3232-0100(P.Pinang)</li>
                </ul>
            </div>

            <button class="accordion">Cabang Pontianak</button>
            <div class="panel">
                <ul class="advantages">
                    <li>021-8866-1190</li>
                    <li>021-8866-1122</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<!-- Form -->
<section class="section form">
    <div class="text-center mb-5">
        <h2 class="title">Contact Form</h2>
    </div>
    <div>
        <div class="mb-3 w-full flex flex-col">
            <label for="emailForm" class="form-label">Email</label>
            <input type="text" class="form-control" id="emailForm">
        </div>
        <div class="mb-3 w-full flex flex-col">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject">
        </div>
        <div class="mb-3 w-full flex flex-col">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <button class="btn btn-primary mt-2" id="btn-submit">Submit</button>
    </div>
</section>
<!-- End Form -->

@endsection
