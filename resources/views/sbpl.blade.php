@extends('layouts.app')

@section('title')
    BrooksVine Consulting||Strategic Business Plan Design
@endsection

@section('page_title')
Strategic Business Plan Design
@endsection

@section('other_links')
    <li class="breadcrumb-item text-white active" aria-current="page">Strategic Business Plan Design</li>
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/sbpl.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                    <h2 class="mb-4">Strategic Business Plan Design</h2>
                    <p class="mb-4">
                        Every company needs a business plan. 
                        It is a strategic tool that is used as a road map for any business to either 
                        serve as a guiding torch for the business operations or as a document needed to be able to attract funding from potential investors.
                    </p>
                    <p class="mb-4">
                        We develop excellent business plans irrespective of the industry your business operates in.                       
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