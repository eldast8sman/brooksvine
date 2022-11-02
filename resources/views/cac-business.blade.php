@extends('layouts.app')

@section('title')
    BrooksVine Consulting||CAC Business Formalization
@endsection

@section('page_title')
CAC Business Formalization
@endsection

@section('other_links')
    <li class="breadcrumb-item text-white active" aria-current="page">CAC Business Formalization</li>
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/cac-business.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                    <h2 class="mb-4">CAC Business Formalization</h2>
                    <p class="mb-4">
                        Formalization is a principal need for running a proper business recognizable in the eye of the law in Nigeria.
                        <br />
                        With a registered business, you can open a corporate account with any bank in Nigeria, it puts your business in the 
                        proper position to attract investors, it puts you in the position to take advantage of available government interventions, 
                        your customers would feel safe transacting with a registered business, and much more benefits accrue.
                    </p>
                    <p class="mb-4">
                        We render both pre and post incorporation activities which include:
                        <ul>
                            <li>Company or business name registration</li>
                            <li>Filing of Annual Returns</li>
                            <li>Change of Director, Shareholder, Business Address, etc.</li>
                            <li>Business Upgrade</li>
                            <li>Increasing of Share Capital</li>

                        </ul> 
                    </p>
                    <p class="mb-4">
                        We also provide the following corporate and compliance services:
                        <ul>
                            <li>TIN, TCC, Tax Filing</li>
                            <li>SCUML</li>
                            <li>PENCOM</li> 
                            <li>NSITF</li>
                            <li>NUPRC (DPR)</li>
                            <li>NEPC</li>
                        </ul>
                        Our service delivery is SEAMLESS, & AFFORDABLE.
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