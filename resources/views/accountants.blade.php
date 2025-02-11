@extends('layout.app')
@push('styles')
<style>

</style>
<link href="{{asset('css/lunar.css')}}" rel="stylesheet">
@endpush
@section('content')
<!-- TEXT CONTENT
                ============================================= -->
<section id="hero-7" class="ct-02 content-section division">
    <div class="container">

        <div class="row d-flex align-items-center">


            <!-- IMAGE BLOCK -->
            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid rounded-3" src="{{ asset('images/hero-15-img.png') }}" alt="accountant-platform-dashboard">
                </div>
            </div>


            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">

                    <!-- Title -->
                    <h2 class="s-46 w-700">Streamline Your Accounting Practice</h2>

                    <!-- Text -->
                    <p>Transform your accounting practice with our comprehensive platform designed for modern accountants and auditors. </p>

                    <a href="#" class="btn btn--theme">Try Gbeya for Accountants</a>

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

<div id="statistic-1" class="py-50 statistic-section division">
    <div class="container">


        <!-- STATISTIC-1 WRAPPER -->
        <div class="statistic-1-wrapper">
            <div class="row justify-content-md-center row-cols-1 row-cols-md-3">


                <!-- STATISTIC BLOCK #1 -->
                <div class="col">
                    <div id="sb-1-1" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="statistic-block">

                            <!-- Digit -->
                            <div class="statistic-block-digit text-center">
                                <h2 class="s-46 statistic-number"><span class="count-element">50</span>k</h2>
                            </div>

                            <!-- Text -->
                            <div class="statistic-block-txt color--grey">
                                <p class="p-md">Users trust Gbeya for  financial management</p>
                            </div>

                        </div>
                    </div>
                </div> <!-- END STATISTIC BLOCK #1 -->


                <!-- STATISTIC BLOCK #2 -->
                <div class="col">
                    <div id="sb-1-2" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="statistic-block">

                            <!-- Digit -->
                            <div class="statistic-block-digit text-center">
                                <h2 class="s-46 statistic-number"><span class="count-element">98</span>%</h2>
                            </div>

                            <!-- Text -->
                            <div class="statistic-block-txt color--grey">
                                <p class="p-md">Customer satisfaction rate with our platform</p>
                            </div>

                        </div>
                    </div>
                </div> <!-- END STATISTIC BLOCK #2 -->


                <!-- STATISTIC BLOCK #3 -->
                <div class="col">
                    <div id="sb-1-3" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="statistic-block">

                            <!-- Digit -->
                            <div class="statistic-block-digit text-center">
                                <h2 class="s-46 statistic-number">
                                    $<span class="count-element">2</span>B+
                                </h2>
                            </div>

                            <!-- Text -->
                                <div class="statistic-block-txt color--grey">
                                    <p class="p-md">Total transactions processed annually</p>
                            </div>

                        </div>
                    </div>
                </div> <!-- END STATISTIC BLOCK #3 -->


            </div> <!-- End row -->
        </div> <!-- END STATISTIC-1 WRAPPER -->


    </div> <!-- End container -->
</div>

<section id="features-2" class="pt-100 features-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-80">
                     <p class="s-21 color--grey">Tools for modern accounting professionals</p>
                    <!-- Title -->
                    <h2 class="s-50 w-700">Everything You Need to Manage Your Practice</h2>

                    <!-- Text -->
                    

                </div>
            </div>
        </div>


        <!-- FEATURES-2 WRAPPER -->
        <div class="fbox-wrapper text-center">
            <div class="row row-cols-1 row-cols-md-3 mb-80">


                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-2 fb-1 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="{{ asset('images/documents.jpg') }}" alt="project-management">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Document Management</h6>
                            <p>Access and organize client documents securely with built-in version control and audit trails</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #1 -->


                <!-- FEATURE BOX #2 -->
                <div class="col">
                    <div class="fbox-2 fb-2 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="{{ asset('images/billing.png') }}" alt="billing-system">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Billing & Payments</h6>
                            <p>Generate professional invoices and receive payments directly through the platform</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #2 -->


                <!-- FEATURE BOX #3 -->
                <div class="col">
                    <div class="fbox-2 fb-3 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="{{ asset('images/accounting_tools.jpg') }}" alt="automated-tools">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Automated Tools</h6>
                            <p>Access secure, automated accounting tools and real-time financial data</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #3 -->


            </div> <!-- End row -->
            <div class="row row-cols-1 row-cols-md-3">


                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-2 fb-1 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="{{ asset('images/communication.jpg') }}" alt="project-management">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Client Communication</h6>
                            <p>Built-in messaging and video conferencing tools for seamless client interactions</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #1 -->


                <!-- FEATURE BOX #2 -->
                <div class="col">
                    <div class="fbox-2 fb-2 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="{{ asset('images/taxform.jpg') }}" alt="billing-system">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Tax Preparation</h6>
                            <p>Comprehensive tax preparation tools with automated calculations and compliance checks</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #2 -->


                <!-- FEATURE BOX #3 -->
                <div class="col">
                    <div class="fbox-2 fb-3 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="{{ asset('images/reporting.jpg') }}" alt="automated-tools">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Financial Reporting</h6>
                            <p>Generate detailed financial reports and analytics for better client insights</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #3 -->


            </div> <!-- End row -->
        </div> <!-- END FEATURES-2 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END FEATURES-2 -->

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
                <button class="tab-button" data-tab="accountants">
                    Accountants & Accounting Firms
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
                            <h3 class="step-title">Tell Us Your Practise</h3>
                            <p class="step-description">Share details about your accounting firm and the services you offer.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3 class="step-title">Get Matched with Clients</h3>
                            <p class="step-description">Our platform connects you with businesses and individuals needing your expertise. </p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3 class="step-title">Manage clients and streamline workflows</h3>
                            <p class="step-description">Collaborate seamlessly, handle tax filings, and grow your practice efficiently.</p>
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
                    Join Gbeya Today
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
                    <p class="mb-3">Schedule appointments and meetings with your clients.</p>
                    
                    <p class="mb-3">Manage your appointments and meetings with ease and integrate with your google calendar.</p>
                    
                    <p class="mb-4">Have your meetings on our video conferencing platform or integrate with zoom, google meet, etc.</p>

                    <!-- Button -->
                    <a href="#" class="btn btn--theme hover--theme">Join Gbeya Today</a>
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

<hr class="divider">

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
@push('scripts')
<!-- <script src="{{asset('js/custom.js')}}"></script> -->
<script>

</script>

@endpush