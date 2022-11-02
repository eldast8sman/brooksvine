<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BrooksVine Consulting||Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <img src="{{ asset('img/brooks_logo.png') }}" alt="Logo">
                    <span class="text-dark">BrooksVine Consuting</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ env('APP_URL') }}" class="nav-item nav-link {{ (request()->is('')) ? 'active' : '' }}">Home</a>
                        <a href="{{ env('APP_URL') }}/about" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ (request()->is('services/*')) ? 'active' : '' }}" data-bs-toggle="dropdown">Our Services</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ env('APP_URL') }}/services/business_growth_support" class="dropdown-item">Business Growth Support</a>
                                <a href="{{ env('APP_URL') }}/services/business_analytics" class="dropdown-item">Business Analytics</a>
                                <a href="{{ env('APP_URL') }}/services/blip" class="dropdown-item">Business Leaders Incubation Programs (BLIP)</a>
                                <a href="{{ env('APP_URL') }}/services/sbpl" class="dropdown-item">Strategic Business Plan Design</a>
                                <a href="{{ env('APP_URL') }}/services/cac-business" class="dropdown-item">CAC Business Formalization</a>
                            </div>
                        </div>
                        <a href="{{ env('APP_URL') }}/contact" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
                    </div>
                    <a href="" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Book Free Consultation</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                            <p class="text-white pb-3 animated zoomIn">With Excellent Service Delivery, Confidentiality, Innovation, Integrity and Professionalism, we can help you take your business from where it is now to where you really want it to be and even beyond.</p>
                            <a href="{{ env('APP_URL') }}/about" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-6">
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
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ env('APP_URL') }}/about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Ready to get started</h3>
                        <small class="text-white">You can click on the link below to book a free consultation with us</small>
                        <div class="position-relative w-100 mt-3">
                            <a href="" class="form-control btn btn-success btn-outline-light bg-primary">Book 15 Minutes Free Consultation</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;" src="img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                    <h2 class="mb-5">We Provide The Following Services For Your Business</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>
                                <a class="service-btn" href="{{ env('APP_URL') }}/services/business_growth_support">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Business Growth Support</h5>
                                {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-area fa-2x"></i>
                                </div>
                                <a class="service-btn" href="{{ env('APP_URL') }}/services/business_analytics">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Business Analytics</h5>
                                {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="{{ env('APP_URL') }}/services/blip">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Business Leaders Incubation Programs (BLIP)</h5>
                                {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="{{ env('APP_URL') }}/services/sbpl">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Strategic Business Plan Design</h5>
                                {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-balance-scale fa-2x"></i>
                                </div>
                                <a class="service-btn" href="{{ env('APP_URL') }}/services/cac-business">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">CAC Business Formalization</h5>
                                {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-house-damage fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Tax & Insurance</h5>
                                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Features Start -->
        {{-- <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Features</div>
                        <h2 class="mb-4">Why People Choose Us? We Are Trusted & Award Wining Agency</h2>
                        <p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                        <p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Best In Industry</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-percent text-white"></i>
                                    </div>
                                    <h6 class="mb-0">99% Success Rate</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Award Winning</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-smile-beam text-white"></i>
                                    </div>
                                    <h6 class="mb-0">100% Happy Client</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-user-tie text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Professional Advisors</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-headset text-white"></i>
                                    </div>
                                    <h6 class="mb-0">24/7 Customer Support</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Features End -->


        <!-- Client Start -->
        {{-- <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel client-carousel">
                    <a href="#"><img class="img-fluid" src="img/logo-1.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="img/logo-2.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="img/logo-3.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="img/logo-4.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="img/logo-5.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="img/logo-6.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="img/logo-7.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="img/logo-8.png" alt=""></a>
                </div>
            </div>
        </div> --}}
        <!-- Client End -->


        <!-- Testimonial Start -->
        {{-- <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                    <h2 class="mb-5">What Our Clients Say!</h2>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg">
                            <div class="ps-3">
                                <h6 class="mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg">
                            <div class="ps-3">
                                <h6 class="mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg">
                            <div class="ps-3">
                                <h6 class="mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg">
                            <div class="ps-3">
                                <h6 class="mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonial End -->


        <!-- Team Start -->
        {{-- <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Team</div>
                    <h2 class="mb-5">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <h5>Full Name</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-1.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <h5>Full Name</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-2.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <h5>Full Name</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-3.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <h5>Full Name</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-4.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Team End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Along Whitehouse Road, Agudama, Yenagoa, Bayelsa State.</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+234 (0) 7065571993</p>
                        <p><i class="fa fa-envelope me-3"></i>contact@brooksvineconsulting.com</p>
                        <div class="d-flex pt-2">
                            {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a> --}}
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/brooksvineconsulting"><i class="fab fa-facebook-f"></i></a>
                            {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a> --}}
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/brooksvine-consulting/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Quick Link</h5>
                        <a class="btn btn-link" href="{{ env('APP_URL') }}/about">About Us</a>
                        <a class="btn btn-link" href="{{ env('APP_URL') }}/contact">Contact Us</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a href="{{ env('APP_URL') }}/services/business_growth_support" class="btn btn-link">Business Growth Support</a>
                                <a href="{{ env('APP_URL') }}/services/business_analytics" class="btn btn-link">Business Analytics</a>
                                <a href="{{ env('APP_URL') }}/services/blip" class="btn btn-link">Business Leaders Incubation Programs (BLIP)</a>
                                <a href="{{ env('APP_URL') }}/services/sbpl" class="btn btn-link">Strategic Business Plan Design</a>
                                <a href="{{ env('APP_URL') }}/services/cac-business" class="btn btn-link">CAC Business Formalization</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>You can pre-register for our upcoming Newsletter</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">BrooksVine Consulting</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>