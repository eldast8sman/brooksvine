@extends('layouts.app')

@section('title')
    BrooksVine Consulting||Business Analytics
@endsection

@section('page_title')
    Business Analytics
@endsection

@section('other_links')
    <li class="breadcrumb-item text-white active" aria-current="page">Business Analytics</li>
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/business-analytics.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                    <h2 class="mb-4">Busines Analytics</h2>
                    <p class="mb-4">
                        Are you looking for SMART and EFFECTIVE ways to implement your business strategies, make the right decisions, measure performance,
                        gear up for changes and stay ahead of your competitors?
                        <br />
                        Whether you’re a small business or a large corporation, your business
                        success depends on providing customers with what they need and understanding your customer’s need is more important in
                        today’s business environment than relying on assumptions which are a
                        recipe for failure.
                    </p>
                    <p class="mb-4">
                        As a consulting firm offering business analytics as a service, we help organizations extract meaningful information from data to
                        enable them to better serve their customers.                        
                    </p>
                    <p class="mb-4">
                        Whether you’re in the health sector, hospitality, aviation, travel and logistics, restaurant, communication, sport, education, entertainment, etc 
                        we will provide you with in-depth data-driven customer analytics, financial analytics, performance analytics, and risk analytics which will help 
                        drive your company’s decision making, align and integrate your internal operations, keep them on track and in the long run achieve the corporate 
                        vision of your company.
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