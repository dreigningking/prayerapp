@extends('layout.app')
@push('styles')

@endpush
@section('content')
<!-- TEXT CONTENT ============================================= -->
<section id="lnk-1" class="pt-100 ct-02 content-section division">
    <div class="container">
        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">


            <!-- IMAGE BLOCK -->
            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid" src="{{asset('images/img-07.png')}}" alt="content-image">
                </div>
            </div>


            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">



                    <!-- Title -->
                    <h2 class="s-50 w-700 mb-4">Having Trouble Managing Your Finances?</h2>

                    <!-- Text -->
                    <p class="mb-4">Are you struggling to keep track of your taxes or audit your finances? Don't worry anymore! Gbeya's comprehensive platform makes financial management effortless.</p>

                    <!-- Button -->
                    <a href="#" class="btn btn--theme hover--theme">Start Filing Today</a>

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- END SECTION CONTENT (ROW) -->


    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

@include('layout.features')

<section id="lnk-3" class="bg--white-400 mt-100 content-section division">
    <div class="section-overlay py-100">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-60 text-center">
                        <!-- Section ID -->
                        <span class="section-id">Services and Solutions</span>

                        <!-- Title -->
                        <h2 class="s-46 w-700">Struggling with tax filing? We've got you covered.</h2>
                    </div>
                </div>
            </div>

            <!-- FIRST ROW -->
            <div class="row d-flex align-items-center mb-5">
                <!-- IMAGE -->
                <div class="col-md-6">
                    <img class="img-fluid rounded-4" src="{{asset('images/tax_stress.png')}}" alt="tax-filing-stress">
                </div>

                <!-- FEATURES LIST -->
                <div class="col-md-6">
                    <div class="txt-block">
                        <ul class="simple-list">
                            <li class="list-item d-flex align-items-center mb-3">
                                <span class="btn btn-sm mt-1 btn--theme rounded-1 me-3">1</span>
                                <p class="mb-0">Get step-by-step guidance for personal or business tax returns.</p>
                            </li>

                            <li class="list-item d-flex align-items-center mb-3">
                                <span class="btn btn-sm mt-1 btn--theme rounded-1 me-3">2</span>
                                <p class="mb-0">Ensure you claim all eligible deductions and credits.</p>
                            </li>

                            <li class="list-item d-flex align-items-center mb-3">
                                <span class="btn btn-sm mt-1 btn--theme rounded-1 me-3">3</span>
                                <p class="mb-0">Manage payments and track business finances effortlessly.</p>
                            </li>

                            <li class="list-item d-flex align-items-center mb-4">
                                <span class="btn btn-sm mt-1 btn--theme rounded-1 me-3">4</span>
                                <p class="mb-0">Consult with certified accountants anytime you need help</p>
                            </li>
                        </ul>

                        <a href="#" class="btn btn--tra-grey hover--theme">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- SECOND ROW -->
            <div class="row d-flex align-items-center">
                <!-- FEATURES LIST -->
                <div class="col-md-6">
                    <div class="txt-block">
                        <ul class="simple-list">
                            <li class="list-item d-flex align-items-center">
                                <span class="btn btn-sm mt-1 btn--theme rounded-1 me-3">1</span>
                                <p class="mb-0">With Gbeya, tax filing is quick, accurate, and stress-free.</p>
                            </li>

                            <li class="list-item d-flex align-items-center mb-1">
                                <span class="btn btn-sm mt-1 btn--theme rounded-1 me-3">2</span>
                                <p class="mb-0">Securely store and manage your tax documents.</p>
                            </li>

                            <li class="list-item d-flex align-items-center mb-3">
                                <span class="btn btn-sm mt-1 btn--theme rounded-1 me-3">3</span>
                                <p class="mb-0">Create professional invoices in minutes with our customizable templates.</p>
                            </li>

                            <li class="list-item d-flex align-items-center mb-4">
                                <span class="btn btn-sm mt-1 btn--theme rounded-1 me-3">4</span>
                                <p class="mb-0">Pay your taxes directly government tax bodies from Gbeya.</p>
                            </li>
                        </ul>

                        <a href="#" class="btn btn--tra-grey hover--theme">Get Started</a>
                    </div>
                </div>

                <!-- IMAGE -->
                <div class="col-md-6">
                    <img class="img-fluid rounded-4" src="{{asset('images/tax_stress2.png')}}" alt="tax-professional">
                </div>
            </div>

        </div> <!-- End container -->
    </div> <!-- End section overlay -->
</section>

@include('layout.testimonials')

<div class="accounting-process mt-5 mb-0">
    <div class="process-container">
        <div class="text-center">
            <h2 class="process-subtitle">How It Works / Process</h2>
            <h1 class="process-title" id="processTitle">
                Simple Steps to Stress-Free Tax Management
            </h1>

            <!-- Tabs -->
            <div class="tab-container">
                <button class="tab-button active" data-tab="individuals">
                    Individuals & Companies
                </button>
            </div>
        </div>

        <div class="process-content">
            <!-- Left side - Steps -->
            <div class="steps-container" id="stepsContainer">
                <div class="steps-container" id="stepsContainer">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3 class="step-title">Tell Us Your Needs</h3>
                            <p class="step-description">Answer a few questions about your tax situation or business finances.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3 class="step-title">Get Matched with Experts</h3>
                            <p class="step-description">Our system finds verified accountants tailored to your needs.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3 class="step-title">Work with Your Accountant</h3>
                            <p class="step-description">Collaborate seamlessly, upload documents, and get tax-ready.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side - Content -->
            <div class="content-container">
                <h2 class="content-title" id="contentTitle">
                    Manage, Track, and Optimize Your Taxes Seamlessly with Gbeya
                </h2>
                <p class="content-description" id="contentDescription">
                    Easily handle tax filings, payments, and compliance with Gbeya. Get expert guidance and streamline your tax process in minutes.
                </p>
                <button class="content-button" id="contentButton">
                    Find an Accountant
                </button>
            </div>
        </div>
    </div>
</div>

<section class="py-100 ct-01 content-section division">
    <div class="container">
        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">

            <!-- TEXT BLOCK -->
            <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">
                    <!-- Title -->
                    <h2 class="s-46 w-700 mb-4">Appointments & Meetings</h2>

                    <!-- Text -->
                    <p class="mb-3">Schedule appointments and meetings with accountants and auditors.</p>
                    
                    <p class="mb-3">Manage your appointments and meetings with ease and integrate with your google calendar.</p>
                    
                    <p class="mb-4">Have your meetings on our video conferencing platform or integrate with zoom, google meet, etc.</p>

                    <!-- Button -->
                    <a href="#" class="btn btn--theme hover--theme">Find an Accountant</a>
                </div>
            </div> <!-- END TEXT BLOCK -->

            <!-- IMAGE BLOCK -->
            <div class="col-md-6 order-first order-md-2">
                <div class="img-block right-column wow fadeInLeft">
                    <img class="img-fluid" src="{{asset('images/appointment.jpeg')}}" alt="content-image">
                </div>
            </div>

        </div> <!-- END SECTION CONTENT (ROW) -->
    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

<section id="faqs-3" class="py-100 faqs-section">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">

                    <!-- Title -->
                    <h2 class="s-50 w-700">Frequently Asked Questions</h2>

                    <!-- Text -->
                    <p class="s-21 color--grey">Common questions about Gbeya's accounting and financial services</p>

                </div>
                <!-- FAQs-3 QUESTIONS -->
                <div class="accordion-wrapper">
                    <ul class="accordion">


                        <!-- QUESTIONS CATEGORY #1 -->
                        <li class="accordion-item is-active">
                            <!-- CATEGORY HEADER -->
                            <div class="accordion-thumb">
                                <h4 class="s-18 w-700">How can Gbeya help me with tax filing?</h4>
                            </div>

                            <!-- CATEGORY ANSWERS -->
                            <div class="accordion-panel">
                                <div class="answer-box py-3">
                                    <p>Gbeya simplifies tax filing by automating calculations, tracking deductions, and ensuring compliance with tax laws. You can file taxes directly or work with a certified accountant for expert assistance.</p>
                                </div>
                            </div>
                        </li>

                        <!-- QUESTIONS CATEGORY #2 -->
                        <li class="accordion-item">
                            <div class="accordion-thumb">
                                <h4 class="s-18 w-700">How does Gbeya help accountants grow their practice?</h4>
                            </div>
                            <!-- CATEGORY ANSWERS -->
                            <div class="accordion-panel">
                                <div class="answer-box py-3">
                                    <p>Gbeya provides accountants with a platform to showcase their expertise and connect with potential clients. Our platform offers tools for practice management, client communication, and automated workflows. You can expand your client base while streamlining your operations through our integrated solutions.</p>
                                </div>
                            </div>
                        </li>

                        <!-- QUESTIONS CATEGORY #3 -->
                        <li class="accordion-item">
                            <div class="accordion-thumb">
                                <h4 class="s-18 w-700">What type of businesses can use Gbeya?</h4>
                            </div>
                            <!-- CATEGORY ANSWERS -->
                            <div class="accordion-panel">
                                <div class="answer-box py-3">
                                    <p>Gbeya is designed for businesses of all sizes - from freelancers to large corporations. Whether you're a small business owner, self-employed professional, or running a large enterprise, our platform adapts to your needs. We support various industries and business structures, including startups, SMEs, and established companies.</p>
                                </div>
                            </div>
                        </li>

                        <!-- QUESTIONS CATEGORY #4 -->
                        <li class="accordion-item">
                            <div class="accordion-thumb">
                                <h4 class="s-18 w-700">What security measures does Gbeya have in place for tax authorities?</h4>
                            </div>
                            <!-- CATEGORY ANSWERS -->
                            <div class="accordion-panel">
                                <div class="answer-box py-3">
                                    <p>Gbeya implements enterprise-grade security measures including end-to-end encryption, secure data storage, and multi-factor authentication. We maintain strict compliance with regulatory requirements and regularly update our security protocols to protect sensitive tax information. Our platform ensures secure communication channels with tax authorities.</p>
                                </div>
                            </div>
                        </li>

                        <!-- QUESTIONS CATEGORY #5 -->
                        <li class="accordion-item">
                            <div class="accordion-thumb">
                                <h4 class="s-18 w-700">How does Gbeya ensure compliance with tax regulations?</h4>
                            </div>
                            <!-- CATEGORY ANSWERS -->
                            <div class="accordion-panel">
                                <div class="answer-box py-3">
                                    <p>Our platform stays up-to-date with the latest tax regulations and automatically applies relevant rules to your filings. We provide real-time compliance checks, automated updates for regulatory changes, and built-in validation to ensure accuracy. Our system also sends timely reminders for important deadlines and compliance requirements.</p>
                                </div>
                            </div>
                        </li>

                        <!-- QUESTIONS CATEGORY #6 -->
                        <li class="accordion-item">
                            <div class="accordion-thumb">
                                <h4 class="s-18 w-700">How does Gbeya help detect tax fraud and errors?</h4>
                            </div>
                            <!-- CATEGORY ANSWERS -->
                            <div class="accordion-panel">
                                <div class="answer-box py-3">
                                    <p>Gbeya uses advanced algorithms and validation checks to identify potential errors or inconsistencies in tax filings. Our system automatically flags unusual patterns, performs mathematical verifications, and cross-references data to ensure accuracy. We also provide audit trails and documentation to help prevent and detect any fraudulent activities.</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>





        <!-- MORE QUESTIONS LINK -->
        <div class="row">
            <div class="col">
                <div class="more-questions mt-40">
                    <div class="more-questions-txt bg--white-400 r-100">
                        <p class="p-lg">Have additional questions?
                            <a href="contacts.html" class="color--theme">View our Support Forum</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End container -->
</section> <!-- END FAQs-3 -->

@include('layout.newsletter')


@endsection