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
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control bg-secondary" id="" placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Phone</label>
                            <input type="number" class="form-control bg-secondary" id=""
                                placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Email Address</label>
                            <input type="email" class="form-control bg-secondary" id="" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Services</label>
                            <select class="form-select bg-secondary" aria-label="Default select example">
                                <option class="bg-secondary text-white">Select Service</option>
                                <option value="400" class="bg-secondary text-white">Hair Cut</option>
                                <option value="200" class="bg-secondary text-white">Beard Trim</option>
                                <option value="200" class="bg-secondary text-white">Mans Shave</option>
                                <option value="1000" class="bg-secondary text-white">Hair Dyeing</option>
                                <option value="1000" class="bg-secondary text-white">Facials</option>
                                <option value="1500" class="bg-secondary text-white">Nails</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Appointment Date</label>
                            <input type="date" class="form-control bg-secondary" id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Appointment Time</label>
                            <input type="time" class="form-control bg-secondary" id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-5 text-center">
                            <button type="submit" class="btn btn-primary mt-4 btn-lg">Book Appointment</button>
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