
<!-- TESTIMONIALS-1
============================================= -->
@push('styles')
<style>
    .review-1 {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        height: 100%;
    }

    .review-avatar {
        height: 120px;
        /* Fixed height */
    }

    .review-avatar img {
        object-fit: cover;
    }

    .stars-rating .color--blue {
        color: #0056D2;
        line-height: 0.5;
    }

    .review-text {
        font-size: small !important;
        /* line-height: 1.4; */
    }

    .review-author-name {
        font-size: small !important;
    }

    .review-location {
        font-size: 0.8rem !important;
    }
</style>
@endpush
<section id="reviews-1" class="pt-100 reviews-section division">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title mb-60 text-center">
                    <span class="section-id">3940+ Satisfied Gbeya Users</span>
                    <h2 class="s-50 w-700">Don't just take our words</h2>
                </div>
            </div>
        </div>

        <!-- TESTIMONIALS CONTENT -->
        <div class="reviews-1-wrapper owl-carousel owl-theme">
            <!-- TESTIMONIAL #1 -->
            <div class="review-1 d-flex bg-white rounded-4">
                <!-- Avatar -->
                <div class="review-avatar me-3" style="min-width: 120px; max-width: 120px;">
                    <img class="img-fluid rounded-3 h-100 w-100 object-fit-cover"
                        src="{{ asset('images/review-author-1.jpg') }}"
                        alt="review-avatar">
                </div>

                <!-- Content -->
                <div class="review-content">
                    <!-- Rating -->
                    <div class="stars-rating ">
                        <span class="color--blue fs-6">★★★★</span>
                    </div>

                    <!-- Text -->
                    <p class="p-md mb-2 review-text">"Using Gbeya made tax filing effortless! I saved time and maximized my deductions with expert support."</p>

                    <!-- Author Data -->
                    <div class="review-author">
                        <h6 class="s-16 w-700 mb-0 review-author-name">Jenny Wilson</h6>
                        <p class="text-muted review-location">United Kingdom • Freelancer</p>
                    </div>
                </div>
            </div>

            <!-- TESTIMONIAL #2 -->
            <div class="review-1 d-flex bg-white rounded-4">
                <!-- Avatar -->
                <div class="review-avatar me-3" style="min-width: 120px; max-width: 120px;">
                    <img class="img-fluid rounded-3 h-100 w-100 object-fit-cover"
                        src="{{ asset('images/review-author-2.jpg') }}"
                        alt="review-avatar">
                </div>

                <!-- Content -->
                <div class="review-content">
                    <!-- Rating -->
                    <div class="stars-rating mb-0">
                        <span class="color--blue fs-6">★★★★★</span>
                    </div>

                    <!-- Text -->
                    <p class="p-md mb-2 review-text">"Gbeya helped our business streamline payroll and stay tax-compliant. A must have for any company!"</p>

                    <!-- Author Data -->
                    <div class="review-author">
                        <h6 class="s-16 w-700 mb-0 review-author-name">Devon Lane</h6>
                        <p class="text-muted review-location">Nigeria • DL Accounting Solutions</p>
                    </div>
                </div>
            </div>

            <!-- TESTIMONIAL #3 -->
            <div class="review-1 d-flex bg-white rounded-4">
                <!-- Avatar -->
                <div class="review-avatar me-3" style="min-width: 120px; max-width: 120px;">
                    <img class="img-fluid rounded-3 h-100 w-100 object-fit-cover"
                        src="{{ asset('images/review-author-3.jpeg') }}"
                        alt="review-avatar">
                </div>

                <!-- Content -->
                <div class="review-content">
                    <!-- Rating -->
                    <div class="stars-rating mb-0">
                        <span class="color--blue fs-6">★★★★★</span>
                    </div>

                    <!-- Text -->
                    <p class="p-md mb-2 review-text">"Gbeya helped our business streamline payroll and stay tax-compliant. A must have for any company!"</p>

                    <!-- Author Data -->
                    <div class="review-author">
                        <h6 class="s-16 w-700 mb-0 review-author-name">Esther Olaiya</h6>
                        <p class="text-muted review-location">Nigeria • Akinsola Accounting Firm</p>
                    </div>
                </div>
            </div>

            <!-- Add more testimonials as needed -->

        </div> <!-- END TESTIMONIALS CONTENT -->
    </div> <!-- End container -->
</section> <!-- END TESTIMONIALS-1 -->
