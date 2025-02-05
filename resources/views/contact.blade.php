@extends('layout.app')

@section('content')
<!-- CONTACTS-1
			============================================= -->
<section id="contacts-1" class="pb-50 inner-page-hero contacts-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title text-center mb-80">

                    <!-- Title -->
                    <h2 class="s-52 w-700">Questions? Let's Talk</h2>

                    <!-- Text -->
                    <p class="p-lg">Want to learn more about Gbeya, get a quote, or speak with an expert?
                        Let us know what you are looking for and we’ll get back to you right away
                    </p>

                </div>
            </div>
        </div>


        <!-- CONTACT FORM -->
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-10 col-xl-8">
                <div class="form-holder">
                    <form name="contactform" class="row contact-form">

                        <!-- Contact Form Input -->
                        <div class="col-md-12">
                            <p class="p-lg">Your Name: </p>
                            <span>Please enter your real name: </span>
                            <input type="text" name="name" class="form-control name" placeholder="Your Name*">
                        </div>

                        <div class="col-md-12">
                            <p class="p-lg">Your Email Address: </p>
                            <span>Please carefully check your email address for accuracy</span>
                            <input type="text" name="email" class="form-control email" placeholder="Email Address*">
                        </div>

                        <!-- Form Select -->
                        <div class="col-md-12 input-subject">
                            <p class="p-lg">User Category</p>
                            <span>Your use case on Gbeya: </span>
                            <select class="form-select type" aria-label="Default select example">
                                <option selected>As a...</option>
                                <option>Accountant</option>
                                <option>Accounting Firm</option>
                                <option>Individual</option>
                                <option>Other Organization</option>
                                <option>Government Body</option>
                            </select>
                        </div>



                        <div class="col-md-12">
                            <p class="p-lg">Explain your question in details: </p>
                            <span>Be very descriptive so we understand your context completely!</span>
                            <textarea class="form-control message" name="message" rows="6" placeholder="..."></textarea>
                        </div>

                        <!-- Contact Form Button -->
                        <div class="col-md-12 mt-15 form-btn text-right">
                            <button type="submit" class="btn btn--theme hover--theme submit">Submit Request</button>
                        </div>

                        <div class="contact-form-notice">
                            <p class="p-sm">We are committed to your privacy. Gbeya uses the information you
                                provide us to contact you about our relevant content, products, and services.
                                You may unsubscribe from these communications at any time. For more information,
                                check out our <a href="#">Privacy Policy</a>.
                            </p>
                        </div>

                        <!-- Contact Form Message -->
                        <div class="col-lg-12 contact-form-msg">
                            <span class="loading"></span>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- END CONTACT FORM -->


    </div> <!-- End container -->
</section> <!-- END CONTACTS-1 -->

<!-- DIVIDER LINE -->
<hr class="divider">

@endsection
