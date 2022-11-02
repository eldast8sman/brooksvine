@extends('layouts.app')

@section('title')
    BrooksVine Consulting||Business Leaders Incubation Programs
@endsection

@section('page_title')
    Business Leaders Incubation Programs
@endsection

@section('other_links')
    <li class="breadcrumb-item text-white active" aria-current="page">Business Leaders Incubation Programs</li>
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/blip.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                    <h2 class="mb-4">Business Leaders Incubation Programs</h2>
                    <p class="mb-4">
                        BLIP is a 6 week boot camp designed for founders who wish to develop innovative, modern, and scalable businesses 
                        that solve any of the world’s problems in line with the sustainable development goals (SDGs).  
                        It is for businesses that are in their <span class="text-danger">Pre-launch</span> and <span class="text-danger">Build</span> stages.
                    </p>
                    <p class="mb-4">
                        We provide them with tailor-made business support which includes: business development training, business incorporation, networking, mentorship, and co-work space.                     
                    </p>
                    <p class="mb-4">
                        At the end of the program, participants have the privilege of pitching before prospective investors to access funding for their startups.
                    </p>
                    <p class="mb-4">
                        Click <a href="#google_calendar" class="btn btn-primary">Here</a> to book a 15 minutes free Consultation Call
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
