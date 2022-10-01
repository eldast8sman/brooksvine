@extends('layouts.app')

@section('title')
    BrooksVine Consulting||Contact
@endsection

@section('page_title')
    Contact Us
@endsection

@section('other_links')
    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
@endsection

@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
                <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center mb-4">You can reach us through the following means:</div>
                    <div class="text-center mb-4">
                        <i class="bi bi-building text-primary"></i>  Along Whitehouse Road, Agudama,  Yenagoa Bayelsa State
                    </div>
                    <div class="text-center mb-4">
                        <i class="bi bi-phone-fill text-primary"></i>  <a href="tel:07065571993">07065571993</a>
                    </div>
                    <div class="text-center mb-4">
                        <i class="bi bi-whatsapp text-primary"></i> <a href="https://api.whatsapp.com/send?phone=08150478613" target="_blank">08150478613</a>
                    </div>
                    <div class="text-center mb-4">
                        <i class="bi bi-facebook text-primary"></i>  <a href="https://www.facebook.com/brooksvineconsulting" target="_blank">brooksvineconsulting</a>
                    </div>
                    <div class="text-center mb-4">
                        <i class="bi bi-linkedin text-primary"></i>  <a href="https://www.linkedin.com/company/brooksvine-consulting/" target="_blank">brooksvine-consulting</a>
                    </div>
                    <div class="text-center mb-4">
                        <i class="bi bi-linkedin text-primary"></i>  <a href="https://www.linkedin.com/company/brooksvine-consulting/" target="_blank">brooksvine-consulting</a>
                    </div>
                    <div class="text-center mb-4">
                        <i class="bi bi-envelope text-primary"></i>  <a href="mailto:contact@brooksvineconsulting.com" target="_blank">contact@booksvineconsulting.com</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="text-center mb-4">You can also send us a message here. Be assured that your message will be attended to immediately</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" id="submit_mail">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection