@extends('template')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Book Appointment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="text-uppercase">let's not wait for the "perfect look"</h1>
                <p class="text-primary">Book Your Appointment To Save Salon Rush</p>
            </div>
            <form method="post" action="{{url('appointment')}}">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control bg-secondary btn-bdrclr" id="" placeholder="Enter Your Name" value="{{old('name')}}" name="name" required autofocus>
                            @error('name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Phone</label>
                            <input type="number" class="form-control bg-secondary btn-bdrclr" id=""
                                placeholder="Enter Phone Number" value="{{old('phone')}}" name="phone" required>
                                @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Email Address</label>
                            <input type="email" class="form-control bg-secondary btn-bdrclr" id="" placeholder="Enter Your Email" value="{{old('email')}}" name="email" required>
                            @error('email')<span class="text-danger">{{$message}}</span>@enderror                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Services</label>
                            <select class="form-select bg-secondary btn-bdrclr" aria-label="Default select example" id="" value="{{old('service')}}" name="service" required>
                            <option class="bg-secondary text-white">Select Service</option>
                            @foreach($data['services'] as $service)
                                <option class="bg-secondary text-white">{{$service["name"]}}</option>
                                @endforeach
                            </select>
                            @error('service')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Appointment Date</label>
                            <input type="date" class="form-control bg-secondary btn-bdrclr" id="" value="{{old('date')}}" name="date" required>
                            @error('date')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Appointment Time</label>
                            <input type="time" class="form-control bg-secondary btn-bdrclr" id="" value="{{old('time')}}" name="time" required>
                            @error('time')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-5 text-center">
                            <button type="submit" class="btn btn-primary mt-4 btn-lg btn-cc3">Book Appointment</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="d-inline-flex text-primary py-1 px-4 me-auto">OR</p>
                        <h2 class="text-white mb-4">Call Us @ +042-1234567, 0336-7654321</h2>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection