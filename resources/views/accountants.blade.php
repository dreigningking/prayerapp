@extends('app')

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


                    <!-- Section ID -->
                    <span class="section-id">Professional Accounting Platform</span>

                    <!-- Title -->
                    <h2 class="s-46 w-700">Streamline Your Accounting Practice</h2>

                    <!-- Text -->
                    <p>Transform your accounting practice with our comprehensive platform designed for modern accountants and auditors. Import existing clients, manage projects, and access powerful accounting tools all in one place.</p>

                    <!-- List -->
                    <ul class="simple-list">
                        <li class="list-item">
                            <p>Seamlessly import your client base via CSV and manage all client relationships through a centralized dashboard</p>
                        </li>
                        <li class="list-item">
                            <p>Access a marketplace of accounting projects and expand your client base through our bidding system</p>
                        </li>
                    </ul>

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->
<!-- FEATURES-2
			============================================= -->
<section id="features-2" class="pt-100 features-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-80">

                    <!-- Title -->
                    <h2 class="s-50 w-700">Everything You Need to Manage Your Practice</h2>

                    <!-- Text -->
                    <p class="s-21 color--grey">Comprehensive tools for modern accounting professionals</p>

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
                            <img class="img-fluid w" src="{{ asset('images/accounting_tools.jpg') }}" alt="automated-tools">
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
                            <img class="img-fluid" src="images/project-management.png" alt="project-management">
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
                            <img class="img-fluid" src="images/billing-payments.png" alt="billing-system">
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
                            <img class="img-fluid w-100" src="{{ images/reporting.jpg }}" alt="automated-tools">
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
<!-- BANNER-7
			============================================= -->
<section id="banner-7" class="banner-section">
    <div class="banner-overlay py-100">
        <div class="container">


            <!-- BANNER-7 WRAPPER -->
            <div class="banner-7-wrapper">
                <div class="row justify-content-center">


                    <!-- BANNER-7 TEXT -->
                    <div class="col-md-8">
                        <div class="banner-7-txt text-center">

                            <!-- Title -->
                            <h2 class="s-48 w-700">Start Growing Your Accounting Practice Today</h2>

                            <!-- Buttons -->
                            <div class="btns-group">
                                <a href="#hero-7" class="btn r-04 btn--theme hover--theme">Create Free Account</a>
                                <a href="marketplace.html" class="btn r-04 btn--tra-black hover--theme">Browse Projects</a>
                            </div>

                            <!-- Button Text -->
                            <p class="btn-txt ico-15">Join thousands of accounting professionals already using our platform</p>

                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- END BANNER-7 WRAPPER -->


        </div> <!-- End container -->
    </div> <!-- End banner overlay -->
</section> <!-- END BANNER-7 -->




<!-- DIVIDER LINE -->
<hr class="divider">

@endsection