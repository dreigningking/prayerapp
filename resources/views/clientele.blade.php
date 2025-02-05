@extends('layout.app')
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
                    <h2 class="s-46 w-700">Having Trouble Managing Your Finances?</h2>

                    <!-- Text -->
                    <p>Are you struggling to keep track of your taxes or audit your finances? Don't worry anymore! Gbeya's comprehensive platform makes financial management effortless. Let us handle the complexities while you focus on what matters most.
                    </p>

                    <!-- Small Title -->
                    <h5 class="s-24 w-700">We're Here to Help</h5>

                    <!-- List -->
                    <ul class="simple-list">

                        <li class="list-item">
                            <p> <strong>Expense Tracking:</strong>
                                Easily monitor and categorize all your expenses in one place, helping you understand where your money goes.
                            </p>
                        </li>

                        <li class="list-item">
                            <p> <strong>Tax Management:</strong>
                                Streamline tax preparation with automated calculations and document organization for stress-free filing.
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="mb-0"> <strong>Financial Planning:</strong>
                                Set budgets, track goals, and make informed decisions with our comprehensive planning tools.
                            </p>
                        </li>

                    </ul>

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- END SECTION CONTENT (ROW) -->


    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

<section id="features-6" class="pt-100 features-section division">
    <div class="container">
        <!-- FEATURES-6 WRAPPER -->
        <div class="fbox-wrapper text-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">


                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-6 fb-1 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico ico-55">
                            <div class="shape-ico color--theme">

                                <!-- Vector Icon -->
                                <span class="flaticon-graphics"></span>

                                <!-- Shape -->
                                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                </svg>

                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-20 w-700">Financial Dashboard</h6>
                            <p>Real-time financial dashboard with customizable charts and reports.</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #1 -->


                <!-- FEATURE BOX #2 -->
                <div class="col">
                    <div class="fbox-6 fb-2 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico ico-55">
                            <div class="shape-ico color--theme">

                                <!-- Vector Icon -->
                                <span class="flaticon-idea"></span>

                                <!-- Shape -->
                                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                </svg>

                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-20 w-700">Expense Tracking</h6>
                            <p>Automatically categorize expenses and scan receipts with OCR technology</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #2 -->


                <!-- FEATURE BOX #3 -->
                <div class="col">
                    <div class="fbox-6 fb-3 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico ico-55">
                            <div class="shape-ico color--theme">

                                <!-- Vector Icon -->
                                <span class="flaticon-graphic"></span>

                                <!-- Shape -->
                                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                </svg>

                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-20 w-700">Digital Cards</h6>
                            <p>Generate virtual cards with spending limits and instant freeze capabilities.</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #3 -->


                <!-- FEATURE BOX #4 -->
                <div class="col">
                    <div class="fbox-6 fb-4 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico ico-55">
                            <div class="shape-ico color--theme">

                                <!-- Vector Icon -->
                                <span class="flaticon-search-engine-1"></span>

                                <!-- Shape -->
                                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                </svg>

                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-20 w-700">Tax Preparation</h6>
                            <p>Automated tax document compilation and direct filing with authorities</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #4 -->


            </div> <!-- End row -->
        </div> <!-- END FEATURES-6 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END FEATURES-6 -->


<!-- FEATURES-13
			============================================= -->
<section id="features-13" class="shape--bg shape--white-500 pt-100 features-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- FEATURES-13 WRAPPER -->
            <div class="col-md-7 order-last order-md-2">
                <div class="fbox-13-wrapper wow fadeInRight">
                    <div class="row">


                        <div class="col-md-6">

                            <!-- FEATURE BOX #1 -->
                            <div id="fb-12-1" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">

                                <!-- Icon -->
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">

                                        <!-- Vector Icon -->
                                        <span class="flaticon-layers-1"></span>

                                        <!-- Shape -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                        </svg>

                                    </div>
                                </div> <!-- End Icon -->

                                <!-- Text -->
                                <div class="fbox-txt">
                                    <h5 class="s-19 w-700">Cards</h5>
                                    <p>Generate virtual cards instantly, fund them securely, and manage all your expenses with complete control and visibility</p>
                                </div>

                            </div>

                            <!-- FEATURE BOX #2 -->
                            <div id="fb-12-2" class="fbox-12 bg--white-100 block-shadow r-12">

                                <!-- Icon -->
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">

                                        <!-- Vector Icon -->
                                        <span class="flaticon-tutorial"></span>

                                        <!-- Shape -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                        </svg>

                                    </div>
                                </div> <!-- End Icon -->

                                <!-- Text -->
                                <div class="fbox-txt">
                                    <h5 class="s-19 w-700">Exchange</h5>
                                    <p>Exchange your local currency to any other currency in the world with ease and convenience</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <!-- FEATURE BOX #3 -->
                            <div id="fb-12-3" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">

                                <!-- Icon -->
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">

                                        <!-- Vector Icon -->
                                        <span class="flaticon-pay-per-click"></span>

                                        <!-- Shape -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                        </svg>

                                    </div>
                                </div> <!-- End Icon -->

                                <!-- Text -->
                                <div class="fbox-txt">
                                    <h5 class="s-19 w-700">Income & Expenses</h5>
                                    <p>Track income and expenses easily with detailed cash flow insights for better financial decisions.</p>
                                </div>

                            </div>

                            <!-- FEATURE BOX #4 -->
                            <div id="fb-12-4" class="fbox-12 bg--white-100 block-shadow r-12">

                                <!-- Icon -->
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">

                                        <!-- Vector Icon -->
                                        <span class="flaticon-taxes"></span>

                                        <!-- Shape -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                        </svg>

                                    </div>
                                </div> <!-- End Icon -->

                                <!-- Text -->
                                <div class="fbox-txt">
                                    <h5 class="s-19 w-700">Savings</h5>
                                    <p>Set savings goals, create budgets, and track your progress towards financial targets.</p>
                                </div>

                            </div>

                        </div>


                    </div>
                </div> <!-- End row -->
            </div> <!-- END FEATURES-13 WRAPPER -->


            <!-- TEXT BLOCK -->
            <div class="col-md-5 order-first order-md-2">
                <div class="txt-block left-column wow fadeInLeft">

                    <!-- Section ID -->
                    <span class="section-id">Security & Access</span>

                    <!-- Title -->
                    <h2 class="s-46 w-700">Secure Access Management</h2>

                    <!-- Text -->
                    <p>Take control of your financial data with robust security features and granular access controls. Define who can view and modify your financial information with role-based permissions.
                    </p>

                    <!-- List -->
                    <ul class="simple-list">

                        <li class="list-item">
                            <p>Set custom access levels for team members, accountants, and auditors to ensure data security while enabling seamless collaboration
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="mb-0">Track all system activities with detailed audit logs and receive notifications for critical changes to maintain complete oversight
                            </p>
                        </li>

                    </ul>

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END FEATURES-13 -->

<section class="py-100 ct-01 content-section division">
    <div class="container">
        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">

            <!-- TEXT BLOCK -->
            <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">

                    <!-- Section ID -->
                    <span class="section-id">Easy Integration</span>

                    <!-- Title -->
                    <h2 class="s-46 w-700">Appointments & Meetings</h2>

                    <!-- List -->
                    <ul class="simple-list">

                        <li class="list-item">
                            <p>Schedule appointments and meetings with accountants and auditors.
                            </p>
                        </li>

                        <li class="list-item">
                            <p>Manage your appointments and meetings with ease and integrate with your google calendar.</p>
                        </li>
                        <li class="list-item">
                            <p class="mb-0">Have your meetings on our video conferencing platform or integrate with zoom, google meet, etc.</p>
                        </li>

                    </ul>

                </div>
            </div> <!-- END TEXT BLOCK -->


            <!-- IMAGE BLOCK -->
            <div class="col-md-6 order-first order-md-2">
                <div class="img-block right-column wow fadeInLeft">
                    <img class="img-fluid" src="{{asset('images/img-02.png')}}" alt="content-image">
                </div>
            </div>


        </div> <!-- END SECTION CONTENT (ROW) -->


    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->
<section id="lnk-3" class="bg--04 ct-10 content-section division">
    <div class="section-overlay pt-100">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Connect with <br> Professional Accountants</h2>

                        <!-- Text -->
                        <p class="s-21">Hire qualified accountants and accounting firms, then monitor their work progress through our intuitive dashboard created specially for you.</p>

                    </div>
                </div>
            </div>


            <!-- IMAGE BLOCK -->
            <div class="row">
                <div class="col">
                    <div class="img-block video-preview wow fadeInUp">

                        <!-- Play Icon -->
                        <!-- <a class="video-popup2" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                            <div class="video-btn video-btn-xl bg--theme">
                                <div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
                            </div>
                        </a> -->

                        <!-- Preview Image -->
                        <img class="img-fluid" src="{{ asset('images/tablet-02.png') }}" alt="video-preview">

                    </div>
                </div>
            </div>


        </div> <!-- End container -->
    </div> <!-- End section overlay -->
</section> <!-- END IMAGE CONTENT -->
@endsection