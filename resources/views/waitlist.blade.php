@extends('layout.app')
@push('styles')
<link href="{{asset('css/waitlist.css')}}" rel="stylesheet">
@endpush
@section('content')

<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">
            Experience the Future of Finance and<br>
            Tax Management with Gbeya
        </h1>
        <p class="hero-subtitle">
            Join our exclusive waitlist and get early<br>
            access before final launch
        </p>
        
        <form class="waitlist-form">
            <div class="form-inputs">
                <input type="text" placeholder="First name" class="form-input">
                <input type="email" placeholder="Email address" class="form-input">
            </div>
            <button type="submit" class="join-button">Join our waitlist</button>
        </form>
    </div>
    
    <img src="{{ asset('images/pattern.svg') }}" alt="" class="pattern-bg" aria-hidden="true">
    <img src="{{ asset('images/shape-2.svg') }}" alt="" class="shape-2" aria-hidden="true">
</div>

<!-- BRANDS-1
			============================================= -->
<div id="brands-1" class="py-100 brands-section">
    <div class="container">


        <!-- BRANDS TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="brands-title mb-50">
                    <h5 class="s-20 w-700">Trusted and used by over 10 tax bodies</h5>
                </div>
            </div>
        </div>


        <!-- BRANDS CAROUSEL -->
        <div class="row">
            <div class="col text-center">
                <div class="owl-carousel brands-carousel-6">


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/uk.png')}}" alt="brand-logo"></a>
                    </div>


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/usa.png')}}" alt="brand-logo"></a>
                    </div>


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/germany.jpg')}}" alt="brand-logo"></a>
                    </div>


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/france.png')}}" alt="brand-logo"></a>
                    </div>


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/canada.png')}}" alt="brand-logo"></a>
                    </div>


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/australia.png')}}" alt="brand-logo"></a>
                    </div>


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/nigeria.jpg')}}" alt="brand-logo"></a>
                    </div>


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/southafrica.jpg')}}" alt="brand-logo"></a>
                    </div>


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <a href="#"><img class="img-fluid" src="{{asset('images/logos/ghana.png')}}" alt="brand-logo"></a>
                    </div>


                </div>
            </div>
        </div> <!-- END BRANDS CAROUSEL -->


    </div> <!-- End container -->
</div> <!-- END BRANDS-1 -->

<div class="testimonial-section">
    <div class="testimonial-carousel">
        <button class="carousel-arrow prev" id="prevButton">
            <img src="{{ asset('images/arrow-L.svg') }}" alt="" class="arrow active">
            <img src="{{ asset('images/arrow-inactiveL.svg') }}" alt="" class="arrow inactive">
        </button>

        <div class="testimonial-container" id="testimonialContainer">
            <div class="testimonial-card active" data-index="0">
                <div class="rating">★★★★★</div>
                <p class="testimonial-text">"As an early tester, I was impressed by how Gbeya streamlined tax filing for my business. What used to take days now takes minutes—efficient and stress-free!"</p>
                <div class="testimonial-author">
                    <img src="{{ asset('images/temp-1.jpg') }}" alt="Aisha Mohammed" class="author-image">
                    <div class="author-info">
                        <h4>Aisha Mohammed</h4>
                        <p>Nigeria • Founder, SwiftPay</p>
                    </div>
                </div>
            </div>

            <!-- Additional testimonials -->
            <div class="testimonial-card" data-index="1">
                <!-- Similar structure for other testimonials -->
                <!-- Use temp-2.jpg for image -->
            </div>

            <div class="testimonial-card" data-index="2">
                <!-- Use temp-3.jpg for image -->
            </div>

            <div class="testimonial-card" data-index="3">
                <!-- Use temp-4.jpg for image -->
            </div>
        </div>

        <button class="carousel-arrow next" id="nextButton">
            <img src="{{ asset('images/arrow-R.svg') }}" alt="" class="arrow active">
            <img src="{{ asset('images/arrow-inactiveR.svg') }}" alt="" class="arrow inactive">
        </button>
    </div>
</div>

<section class="why-join-section">
    <div class="why-join-container">
        <div class="why-join-content">
            <h2 class="why-join-title">Why Join the Gbeya Waitlist?</h2>
            <p class="why-join-subtitle">
                Be among the first to experience Gbeya, the smarter way to manage tax and finance. As an early member, you'll get:
            </p>

            <div class="benefits-container">
                <div class="benefit-item">
                    <div class="benefit-number">01</div>
                    <h3 class="benefit-title">Exclusive Early Access</h3>
                    <p class="benefit-description">Stay ahead with cutting-edge financial tools before the public launch.</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-number">02</div>
                    <h3 class="benefit-title">Influence the Future</h3>
                    <p class="benefit-description">Be part of the innovation shaping the future of finance.</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-number">03</div>
                    <h3 class="benefit-title">Special Perks</h3>
                    <p class="benefit-description">Enjoy exclusive features, benefits and insights only for early users.</p>
                </div>
            </div>
        </div>

        <div class="why-join-image">
            <img src="{{ asset('images/woman.png') }}" alt="Team collaboration" class="feature-image">
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h2 class="faq-title">Frequently asked questions</h2>
        <p class="faq-subtitle">Everything you need to know about the product and billing.</p>

        <div class="questions-container">
            <div class="question-item">
                <div class="question-header" data-question="1">
                    <span class="question-text">Is there a free trial available?</span>
                    <img src="{{ asset('images/plus.svg') }}" alt="Expand" class="toggle-icon plus">
                    <img src="{{ asset('images/minus.svg') }}" alt="Collapse" class="toggle-icon minus hidden">
                </div>
                <div class="question-answer hidden" id="answer-1">
                    Yes, you can try us for free for 14 days. If you want, we'll provide you with a free, personalized 10-minute onboarding call to get you up and running as soon as possible.
                </div>
            </div>
            
            <!-- Add more questions following the same pattern -->
        </div>

        <div class="contact-box">
            <div class="avatar-container">
                <img src="{{ asset('images/avatar.png') }}" alt="Avatars" class="avatar-image">
            </div>
            <div class="contact-content">
                <p class="contact-title">Still have questions?</p>
                <p class="contact-text">Can't find the answer you're looking for? Please contact our friendly team.</p>
                <button class="contact-button">Get in touch</button>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="{{asset('js/waitlist.js')}}"></script>
<script src="{{asset('js/header.js')}}"></script>
@endpush