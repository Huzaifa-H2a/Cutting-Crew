@extends('template')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Working Hours</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Working Hours</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


   <!-- Working Hours Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100">
                    <img class="img-fluid h-100" src="img/working.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                    <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Our Working Hours</p>
                    <h1 class="text-uppercase mb-4">Our Professionals Are Waiting For You</h1>
                    <div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Monday</h6>
                            <span class="text-uppercase">{{$data['workings'][0]["monday1"]}} AM - {{$data['workings'][0]["monday2"]}} PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Tuesday</h6>
                                <span class="text-uppercase">{{$data['workings'][0]["tuesday1"]}} AM - {{$data['workings'][0]["tuesday2"]}} PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Wednesday</h6>
                                <span class="text-uppercase">{{$data['workings'][0]["wednesday1"]}} AM - {{$data['workings'][0]["wednesday2"]}} PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Thursday</h6>
                                <span class="text-uppercase">{{$data['workings'][0]["thursday1"]}} AM - {{$data['workings'][0]["thursday2"]}} PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Friday</h6>
                                <span class="text-uppercase">{{$data['workings'][0]["friday1"]}} AM - {{$data['workings'][0]["friday2"]}} PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Saturday</h6>
                                <span class="text-uppercase">{{$data['workings'][0]["saturday1"]}} AM - {{$data['workings'][0]["saturday2"]}} PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Sunday</h6>
                                <span class="text-uppercase">{{$data['workings'][0]["sunday1"]}} AM - {{$data['workings'][0]["sunday2"]}} PM</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Working Hours End -->
@endsection