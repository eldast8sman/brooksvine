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
                    <img class="img-fluid" src="{{ asset('img/brooksvine_edited.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                    <h2 class="mb-4">Bespoke Consultancy Agency For Your Business</h2>
                    <p class="mb-4">
                        Many organizations in the cause of their daily activities drift from their core.
                        This drift affects their performance level, leaves them below par with their competitors, and ultimately hampers their chances of achieving their overall vision.
                        <br />
                        At Brooksvine Consulting, we leverage our expertise in business development, business and data analytics, 
                        and technology to develop implementable and measurable solutions for our clients in order to align and integrate their operations,
                        keep them on track, and in the long run help them achieve their vision.
                    </p>
                    <p class="mb-4">
                        We also work with entrepreneurs and aspiring entrepreneurs at various stages of their businesses by providing them with tailor-made growth infrastructure,
                        automation, training, Business Formalization, and platforms to showcase their innovative works to our community while leveraging data and technology
                        in creating high productivity, reaching a wider audience, improving business margins, learning, and scaling quickly.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-4">Our Vision</h2>
                    <p>
                        To be among Africa’s leading business and management consulting firms
                        providing implementable and measurable growth systems, and solutions
                        for organizations both locally and internationally. 
                    </p>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-4">Our Mission</h2>
                    <p>
                        To help our clients develop implementable and measurable growth systems and solutions
                        in order to align and integrate their operations, keep them on track,
                        and in the long run achieve their vision by leveraging our expertise in business development,
                        business and data analytics, and technology.
                    </p>
                </div>

                <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-4">Our Values</h2>
                    Excellent Service Delivery
                    <br />
                    Confidentiality
                    <br />
                    Innovation
                    <br />
                    Integrity
                    <br />
                    Professionalism

                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
@endsection