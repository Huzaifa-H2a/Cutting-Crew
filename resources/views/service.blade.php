@extends('template')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Services</p>
                <h1 class="text-uppercase">What We Provide</h1>
            </div>
            <div class="row g-4">
                @foreach($data['services'] as $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="{{asset('img').'/'.$service['logo']}}" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">{{$service["name"]}}</h3>
                            <p>{{$service["description"]}}</p>
                            <span class="text-uppercase text-primary">From Rs. {{$service["price"]}}</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <a href="{{URL('/appointment')}}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block mt-5 btn-cc3">Book
                        Appointment</a>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='img/testimonial1.png' alt=''>">
                    <h4 class="text-uppercase">Umer Aziz</h4>
                    <p class="text-primary">National Sales Manager</p>
                    <span class="fs-5">If you’re looking for “the one” give Cutting Crew a try. They will listen to you
                        but also listen to them. They does know what they doing and is the “master “ I was looking
                        for.”</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='img/testimonial2.png' alt=''>">
                    <h4 class="text-uppercase">Malik Fahad</h4>
                    <p class="text-primary">Electrical Engineer</p>
                    <span class="fs-5">Great experience at Cutting Crew Mans Salon, wonderful customer service, friendly
                        people and amazing styles!</span>
                </div>
                @foreach($data['testimonials'] as $testimonial)
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{asset('img').'/'.$testimonial['image']}}' alt=''>">
                    <h4 class="text-uppercase">{{$testimonial['name']}}</h4>
                    <p class="text-primary">{{$testimonial['designation']}}</p>
                    <span class="fs-5">{{$testimonial['comment']}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection