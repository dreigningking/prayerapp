@extends('layout.app')

@section('content')
<!-- HERO-7
			============================================= -->
<section id="hero-7" class="gr--perl hero-section">
    <div class="hero-overlay">
        <div class="container">
            <div class="row d-flex align-items-center">

                <!-- HERO TEXT -->
                <div class="col-md-6">
                    <div class="hero-7-txt wow fadeInRight">

                        <!-- Title -->
                        <h2 class="s-54 w-700">Simplify Tax & Accounting with Trusted Experts</h2>

                        <!-- Text -->
                        <p class="p-lg">Connecting individuals, businesses, accountants and government entities to streamline tax filing and financial management.</p>
                        <a href="#" class="btn r-06 btn--theme hover--theme">Get Started</a>
                        <a href="#" class="btn r-06 btn--purple-200 hover--purple-200 ms-2">Watch Demo</a>
                        <!-- HERO QUICK FORM -->

                    </div>
                </div> <!-- END HERO TEXT -->


                <!-- HERO IMAGE -->
                <div class="col-md-6">
                    <div class="hero-7-img text-center wow fadeInLeft">
                        <img class="img-fluid rounded-4" src="{{ asset('images/hero_image.jpeg') }}" alt="hero-image">
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- End hero-overlay -->
</section> <!-- END HERO-7 -->

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
                    <h2 class="s-24 w-700">Empowering individuals and businesses with expert tax and accounting solutions</h2>

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
</section>

<section id="hero-7" class="ct-02 content-section division">
    <div class="container">

        <div class="row d-flex align-items-center">

            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">


                    <span class="section-id">Accountants & Accounting Firms</span>

                    <!-- Title -->
                    <h2 class="s-24 w-700">Expand your reach and offer seamless services to clients through Gbeya</h2>
                    <!-- List -->
                       <ul class="simple-list">

                        <li class="list-item">
                            <p> <strong>Find & Manage Clients:</strong>
                                Connect with individuals, businesses, and government bodies.
                            </p>
                        </li>

                        <li class="list-item">
                            <p> <strong>Automated Tax Filing Tools:</strong>
                                Use powerful tools to streamline your accounting workflow. 
                            </p>
                        </li>

                        <li class="list-item">
                            <p> <strong>Secure Document Management:</strong>
                                Upload, review, and store financial records securely.
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="mb-0"> <strong>Billing & Payment Integration:</strong>
                                Get paid faster with seamless invoicing solutions.
                            </p>
                        </li>

                    </ul>
                
                </div>
            </div> <!-- END TEXT BLOCK -->
            <!-- IMAGE BLOCK -->
            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid rounded-3" src="{{ asset('images/hero-15-img.png') }}" alt="accountant-platform-dashboard">
                </div>
            </div>


            


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

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
                    <h2 class="s-24 w-700">Government Tax Bodies</h2>

                    <!-- Text -->
                    <p>Streamline tax collection, ensure compliance, and enhance financial transparency</p>

                    <!-- List -->
                    <ul class="simple-list">

                        <li class="list-item">
                            <p> <strong>Centralized Tax Filing:</strong>
                                Receive tax filings directly from individuals, businesses, and accountants.
                            </p>
                        </li>

                        <li class="list-item">
                            <p> <strong>Automated Compliance Oversight:</strong>
                                 Easily track submissions and identify discrepancies.
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="mb-0"> <strong>Certified Financial Auditing:</strong>
                                Access vetted accountants for thorough auditing and reporting
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="mb-0"> <strong>Data Security & Confidentiality:<strong>
                                Safeguard sensitive taxpayer information
                            </p>
                        </li>

                    </ul>

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- END SECTION CONTENT (ROW) -->


    </div> <!-- End container -->
</section>

<div class="accounting-process">
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
                <button class="tab-button" data-tab="accountants">
                    Accountants & Accounting Firms
                </button>
            </div>
        </div>

        <div class="process-content">
            <!-- Left side - Steps -->
            <div class="steps-container" id="stepsContainer">
                <!-- Steps will be populated by JavaScript -->
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

<section id="why-gbeya" class="pt-100 pb-100 features-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-80">

                    <!-- Title -->
                    <h2 class="s-50 w-700">A Platform for Everyone</h2>

                    <!-- Text -->
                    <p class="s-21 color--grey">Whether you're an individual, organization, accounting professional, or tax authority - Gbeya is designed for you</p>

                </div>
            </div>
        </div>


        <!-- FEATURES-2 WRAPPER -->
        <div class="fbox-wrapper text-center">
            <div class="row row-cols-1 row-cols-md-3">


                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-2 fb-1 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="https://img.freepik.com/free-photo/portrait-female-employee-working-as-executive-manager-using-computer-plan-charts-presentation-with-financial-statistics-office-worker-creating-career-review-growth-handheld-shot_482257-46648.jpg" alt="feature-image">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Individuals & Companies</h6>
                            <p>Manage your finances, track expenses, and handle accounting tasks with our user-friendly platform designed for businesses of all sizes</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #1 -->


                <!-- FEATURE BOX #2 -->
                <div class="col">
                    <div class="fbox-2 fb-2 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="https://img.freepik.com/free-photo/general-director-examining-statistics-big-data-computer-control-room_482257-90941.jpg" alt="feature-image">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Accounting Professionals</h6>
                            <p>Streamline your accounting tasks with our platform, designed to help you manage clients, invoices, and financial reports efficiently</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #2 -->


                <!-- FEATURE BOX #3 -->
                <div class="col">
                    <div class="fbox-2 fb-3 wow fadeInUp">

                        <!-- Image -->
                        <div class="fbox-img gr--whitesmoke h-175 pt-0">
                            <img class="img-fluid w-100" src="https://img.freepik.com/free-photo/displeased-young-entrepreneur-with-dark-skin-holds-documentation-notepad-demonstrates-stop-gesture-refuses-develop-business-ideas-alone_273609-23618.jpg" alt="feature-image">
                        </div>

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Tax Authorities</h6>
                            <p>Streamline tax administration and compliance monitoring with our platform designed to help tax bodies efficiently manage taxpayer data and reporting</p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #3 -->


            </div> <!-- End row -->
        </div> <!-- END FEATURES-2 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END FEATURES-2 -->





<!-- DIVIDER LINE -->
<hr class="divider">


<section id="best-financial-tools" class="pt-100 features-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">

                    <!-- Title -->
                    <h2 class="s-50 w-700">Powerful Tools to Streamline Your Financial Operations</h2>

                    <!-- Text -->
                    <p class="s-21 color--grey">Everything you need to manage your finances in one place</p>

                </div>
            </div>
        </div>


        <!-- FEATURES-11 WRAPPER -->
        <div class="fbox-wrapper">
            <div class="row row-cols-1 row-cols-md-2 rows-3">


                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-11 fb-1 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-wrap">
                            <div class="fbox-ico ico-50">
                                <div class="shape-ico color--theme">

                                    <!-- Vector Icon -->
                                    <span class="flaticon-graphics"></span>

                                    <!-- Shape -->
                                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                    </svg>

                                </div>
                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Expense Tracking</h6>
                            <p>Easily track and categorize all your expenses. Generate detailed reports and get insights into your spending patterns with our intuitive expense management system.
                            </p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #1 -->


                <!-- FEATURE BOX #2 -->
                <div class="col">
                    <div class="fbox-11 fb-2 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-wrap">
                            <div class="fbox-ico ico-50">
                                <div class="shape-ico color--theme">

                                    <!-- Vector Icon -->
                                    <span class="flaticon-idea"></span>

                                    <!-- Shape -->
                                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                    </svg>

                                </div>
                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Invoice Generator</h6>
                            <p>Create professional invoices in minutes with our customizable templates. Track payments, send reminders, and manage your accounts receivable efficiently.
                            </p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #2 -->


                <!-- FEATURE BOX #3 -->
                <div class="col">
                    <div class="fbox-11 fb-3 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-wrap">
                            <div class="fbox-ico ico-50">
                                <div class="shape-ico color--theme">

                                    <!-- Vector Icon -->
                                    <span class="flaticon-graphic"></span>

                                    <!-- Shape -->
                                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                    </svg>

                                </div>
                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Financial Reports</h6>
                            <p>Generate comprehensive financial reports including balance sheets, income statements, and cash flow statements with just a few clicks.
                            </p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #3 -->


                <!-- FEATURE BOX #4 -->
                <div class="col">
                    <div class="fbox-11 fb-4 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-wrap">
                            <div class="fbox-ico ico-50">
                                <div class="shape-ico color--theme">

                                    <!-- Vector Icon -->
                                    <span class="flaticon-wireframe"></span>

                                    <!-- Shape -->
                                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                    </svg>

                                </div>
                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Tax Management</h6>
                            <p>Simplify your tax preparation with our comprehensive tax management tools. Track deductions, organize receipts, and prepare for tax season year-round.
                            </p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #4 -->


                <!-- FEATURE BOX #5 -->
                <div class="col">
                    <div class="fbox-11 fb-5 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-wrap">
                            <div class="fbox-ico ico-50">
                                <div class="shape-ico color--theme">

                                    <!-- Vector Icon -->
                                    <span class="flaticon-trophy"></span>

                                    <!-- Shape -->
                                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                    </svg>

                                </div>
                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Audit Tools</h6>
                            <p>Comprehensive audit management tools to streamline the audit process. Track audit trails, manage documentation, and ensure compliance with regulatory requirements.
                            </p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #5 -->


                <!-- FEATURE BOX #6 -->
                <div class="col">
                    <div class="fbox-11 fb-6 wow fadeInUp">

                        <!-- Icon -->
                        <div class="fbox-ico-wrap">
                            <div class="fbox-ico ico-50">
                                <div class="shape-ico color--theme">

                                    <!-- Vector Icon -->
                                    <span class="flaticon-search-engine-1"></span>

                                    <!-- Shape -->
                                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                    </svg>

                                </div>
                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">Budget Planning</h6>
                            <p>Create and manage budgets effectively with our planning tools. Set financial goals, track progress, and receive alerts to stay within your budget limits.
                            </p>
                        </div>

                    </div>
                </div> <!-- END FEATURE BOX #6 -->


            </div> <!-- End row -->
        </div> <!-- END FEATURES-11 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END FEATURES-11 -->



<!-- BOX CONTENT
			============================================= -->
<section id="tax-compliance" class="pt-100 ws-wrapper content-section">
    <div class="container">
        <div class="bc-1-wrapper bg--02 bg--fixed r-16">
            <div class="section-overlay">
                <div class="row d-flex align-items-center">


                    <!-- IMAGE BLOCK -->
                    <div class="col-md-6">
                        <div class="img-block left-column wow fadeInRight">
                            <img class="img-fluid" src="{{asset('images/img-09.png')}}" alt="content-image">
                        </div>
                    </div>


                    <!-- TEXT BLOCK -->
                    <div class="col-md-6">
                        <div class="txt-block right-column wow fadeInLeft">

                            <!-- Section ID -->
                            <span class="section-id">Global Tax Compliance</span>

                            <!-- Title -->
                            <h2 class="s-46 w-700">Comprehensive Tax Management</h2>

                            <!-- Text -->
                            <p>Stay compliant with tax regulations worldwide. Our platform simplifies tax filing and
                                payments across multiple jurisdictions, with automated reminders and updates for all
                                your tax obligations, wherever your business operates.
                            </p>

                            <!-- Small Title -->
                            <h5 class="s-24 w-700 h5-title">Key Tax Features:</h5>

                            <!-- Text -->
                            <p class="mb-0">• Multi-country tax compliance monitoring<br>
                                • Automated tax filing reminders<br>
                                • Direct tax payment processing<br>
                                • Real-time tax liability tracking<br>
                                • Tax regulation updates and alerts
                            </p>

                        </div>
                    </div> <!-- END TEXT BLOCK -->


                </div> <!-- End row -->
            </div> <!-- End section overlay -->
        </div> <!-- End content wrapper -->
    </div> <!-- End container -->
</section> <!-- END BOX CONTENT -->


<!-- TEXT CONTENT
			============================================= -->
<section id="features-2" class="pt-100 ct-04 content-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-80">

                    <!-- Title -->
                    <h2 class="s-50 w-700">Marketplace for <br>Accountants and Auditors</h2>

                    <!-- Text -->
                    <p class="s-21 color--grey">Gbeya offers a comprehensive directory of accountants and auditors, ensuring you can find the right professional for your needs.</p>

                </div>
            </div>
        </div>


        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->
            <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">


                    <!-- Section ID -->
                    <span class="section-id mb-3">Simple Process</span>
                    <!-- Title -->
                    <h2 class="s-30 w-700 mb-50">Engaging Accountants</h2>

                    <!-- CONTENT BOX #1 -->
                    <div class="cbox-2 process-step">

                        <!-- Icon -->
                        <div class="ico-wrap">
                            <div class="cbox-2-ico bg--theme color--white">1</div>
                            <span class="cbox-2-line"></span>
                        </div>

                        <!-- Text -->
                        <div class="cbox-2-txt">
                            <h5 class="s-22 w-700">Post a Job</h5>
                            <p> Post a job or project and get bids from accountants and auditors tailored to your budget.
                            </p>
                        </div>

                    </div> <!-- END CONTENT BOX #1 -->


                    <!-- CONTENT BOX #2 -->
                    <div class="cbox-2 process-step">

                        <!-- Icon -->
                        <div class="ico-wrap">
                            <div class="cbox-2-ico bg--theme color--white">2</div>
                            <span class="cbox-2-line"></span>
                        </div>

                        <!-- Text -->
                        <div class="cbox-2-txt">
                            <h5 class="s-22 w-700">Review Bids</h5>
                            <p>Review bids from accountants and auditors and select the best one for your needs.
                            </p>
                        </div>

                    </div> <!-- END CONTENT BOX #2 -->


                    <!-- CONTENT BOX #3 -->
                    <div class="cbox-2 process-step">

                        <!-- Icon -->
                        <div class="ico-wrap">
                            <div class="cbox-2-ico bg--theme color--white">3</div>
                        </div>

                        <!-- Text -->
                        <div class="cbox-2-txt">
                            <h5 class="s-22 w-700">Get Started</h5>
                            <p class="mb-0">Get all the work you require done by the best accountants and auditors in the world.
                            </p>
                        </div>

                    </div> <!-- END CONTENT BOX #3 -->


                </div>
            </div> <!-- END TEXT BLOCK -->


            <!-- IMAGE BLOCK -->
            <div class="col-md-6 order-first order-md-2">
                <div class="img-block wow fadeInLeft">
                    <img class="img-fluid" src="{{asset('images/tablet-01.png')}}" alt="content-image">
                </div>
            </div>


        </div> <!-- END SECTION CONTENT (ROW) -->


    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->







<!-- STATISTIC-1
			============================================= -->
<div id="statistic-1" class="py-100 statistic-section division">
    <div class="container">


        <!-- STATISTIC-1 WRAPPER -->
        <div class="statistic-1-wrapper">
            <div class="row justify-content-md-center row-cols-1 row-cols-md-3">


                <!-- STATISTIC BLOCK #1 -->
                <div class="col">
                    <div id="sb-1-1" class="wow fadeInUp">
                        <div class="statistic-block">

                            <!-- Digit -->
                            <div class="statistic-block-digit text-center">
                                <h2 class="s-46 statistic-number"><span class="count-element">50</span>k+</h2>
                            </div>

                            <!-- Text -->
                            <div class="statistic-block-txt color--grey">
                                <p class="p-md">Active users managing their finances with Gbeya</p>
                            </div>

                        </div>
                    </div>
                </div> <!-- END STATISTIC BLOCK #1 -->


                <!-- STATISTIC BLOCK #2 -->
                <div class="col">
                    <div id="sb-1-2" class="wow fadeInUp">
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
                    <div id="sb-1-3" class="wow fadeInUp">
                        <div class="statistic-block">

                            <!-- Digit -->
                            <div class="statistic-block-digit text-center">
                                <h2 class="s-46 statistic-number">$<span class="count-element">2</span>B+</h2>
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
</div> <!-- END STATISTIC-1 -->




<!-- DIVIDER LINE -->
<hr class="divider">


<!-- TEXT CONTENT
			============================================= -->




<!-- TESTIMONIALS-2
			============================================= -->
<section id="testimonials" class="pt-100 reviews-section">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">

                    <!-- Title -->
                    <h2 class="s-50 w-700">What Our Clients Say</h2>

                    <!-- Text -->
                    <p class="s-21 color--grey">Real experiences from businesses and professionals using Gbeya</p>

                </div>
            </div>
        </div>


        <!-- TESTIMONIALS-2 WRAPPER -->
        <div class="reviews-2-wrapper rel shape--02 shape--whitesmoke">
            <div class="row align-items-center row-cols-1 row-cols-md-2">


                <!-- TESTIMONIAL #1 -->
                <div class="col">
                    <div id="rw-2-1" class="review-2 bg--white-100 block-shadow r-08">

                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                        <!-- Text -->
                        <div class="review-txt">

                            <!-- Text -->
                            <p>Gbeya has transformed how we handle our accounting processes. The automated bank reconciliation
                                and multi-currency features have saved us countless hours. As a business operating in multiple African
                                countries, this platform is exactly what we needed.
                            </p>

                            <!-- Author -->
                            <div class="author-data clearfix">

                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="{{asset('images/review-author-1.jpg')}}" alt="review-avatar">
                                </div>

                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700">Michael Okonjo</h6>
                                    <p class="p-sm">CFO, AfriTech Solutions</p>
                                </div>

                            </div> <!-- End Author -->

                        </div> <!-- End Text -->

                    </div>
                </div> <!-- END TESTIMONIAL #1 -->


                <!-- TESTIMONIAL #2 -->
                <div class="col">
                    <div id="rw-2-2" class="review-2 bg--white-100 block-shadow r-08">

                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                        <!-- Text -->
                        <div class="review-txt">

                            <!-- Text -->
                            <p>As a small accounting firm, we needed a solution that could scale with us. Gbeya's
                                practice management tools and client collaboration features have helped us grow our client
                                base by 40% in just six months. The support team is incredibly responsive too!
                            </p>

                            <!-- Author -->
                            <div class="author-data clearfix">

                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="{{asset('images/review-author-2.jpg')}}" alt="review-avatar">
                                </div>

                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700">Collins Mensah</h6>
                                    <p class="p-sm">Founder, Mensah Accounting Services</p>
                                </div>

                            </div> <!-- End Author -->

                        </div> <!-- End Text -->

                    </div>
                </div> <!-- END TESTIMONIAL #2 -->


                <!-- TESTIMONIAL #3 -->
                <div class="col">
                    <div id="rw-2-3" class="review-2 bg--white-100 block-shadow r-08">

                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                        <!-- Text -->
                        <div class="review-txt">

                            <!-- Text -->
                            <p>The tax compliance features are outstanding! Being able to handle tax requirements for
                                multiple jurisdictions in one platform is a game-changer. We've reduced our compliance
                                workload by 60% since switching to Gbeya.
                            </p>

                            <!-- Author -->
                            <div class="author-data clearfix">

                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="{{asset('images/review-author-5.jpg')}}" alt="review-avatar">
                                </div>

                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700">Jean-Pierre Kouassi</h6>
                                    <p class="p-sm">Tax Director, Global Trade Co</p>
                                </div>

                            </div> <!-- End Author -->

                        </div> <!-- End Text -->

                    </div>
                </div> <!-- END TESTIMONIAL #3 -->


                <!-- TESTIMONIAL #4 -->
                <div class="col">
                    <div id="rw-2-4" class="review-2 bg--white-100 block-shadow r-08">

                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                        <!-- Text -->
                        <div class="review-txt">

                            <!-- Text -->
                            <p>I love how user-friendly Gbeya is! As a freelance consultant, I needed something that
                                could handle my invoicing and expense tracking without being overwhelming. The mobile app
                                is fantastic - I can manage everything on the go.
                            </p>

                            <!-- Author -->
                            <div class="author-data clearfix">

                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="{{asset('images/review-author-8.jpg')}}" alt="review-avatar">
                                </div>

                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700">Amina Diallo</h6>
                                    <p class="p-sm">Independent Financial Consultant</p>
                                </div>

                            </div> <!-- End Author -->

                        </div> <!-- End Text -->

                    </div>
                </div> <!-- END TESTIMONIAL #4 -->


            </div> <!-- End row -->
        </div> <!-- END TESTIMONIALS-2 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END TESTIMONIALS-2 -->




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




<!-- DIVIDER LINE -->
<hr class="divider">





<!-- FAQs-3
			============================================= -->
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
            </div>
        </div>


        <!-- FAQs-3 QUESTIONS -->
        <div class="faqs-3-questions">
            <div class="row">


                <!-- QUESTIONS HOLDER -->
                <div class="col-lg-6">
                    <div class="questions-holder">


                        <!-- QUESTION #1 -->
                        <div class="question mb-35 wow fadeInUp">

                            <!-- Question -->
                            <h5 class="s-22 w-700"><span>1.</span> How does Gbeya handle multi-currency transactions?</h5>

                            <!-- Answer -->
                            <p class="color--grey">Gbeya provides comprehensive multi-currency accounting features that allow you to conduct business in multiple currencies. You can perform transactions, generate reports, and maintain books in different currencies while automatically handling exchange rate conversions. The platform supports real-time currency updates and provides detailed tracking of foreign exchange gains and losses.
                            </p>

                        </div>


                        <!-- QUESTION #2 -->
                        <div class="question mb-35 wow fadeInUp">

                            <!-- Question -->
                            <h5 class="s-22 w-700"><span>2.</span> What tax compliance features does Gbeya offer?</h5>

                            <!-- Answer -->
                            <p class="color--grey">Gbeya supports multi-country tax compliance with features including automated tax calculations, tax reporting for multiple jurisdictions, and built-in compliance checks for different tax regimes. The platform stays updated with local tax regulations and helps ensure your business remains compliant across all operating regions.
                            </p>

                        </div>


                        <!-- QUESTION #3 -->
                        <div class="question mb-35 wow fadeInUp">

                            <!-- Question -->
                            <h5 class="s-22 w-700"><span>3.</span> How does the automated bank reconciliation work?</h5>

                            <!-- Answer -->
                            <ul class="simple-list color--grey">

                                <li class="list-item">
                                    <p>Automatic import and matching of bank transactions with your accounting records
                                    </p>
                                </li>

                                <li class="list-item">
                                    <p>Smart categorization of transactions based on historical data and custom rules
                                    </p>
                                </li>

                            </ul>

                        </div>


                    </div>
                </div> <!-- END QUESTIONS HOLDER -->


                <!-- QUESTIONS WRAPPER -->
                <div class="col-lg-6">
                    <div class="questions-holder">


                        <!-- QUESTION #4 -->
                        <div class="question mb-35 wow fadeInUp">

                            <!-- Question -->
                            <h5 class="s-22 w-700"><span>4.</span> How secure is my financial data with Gbeya?</h5>

                            <!-- Answer -->
                            <p class="color--grey">We implement bank-level security measures to protect your financial data, including encrypted data transmission and storage, multi-factor authentication, and regular security audits.
                            </p>

                            <!-- Answer -->
                            <p class="color--grey">Our platform complies with international security standards and provides role-based access control to ensure your sensitive information is only accessible to authorized personnel.
                            </p>

                        </div>


                        <!-- QUESTION #5 -->
                        <div class="question mb-35 wow fadeInUp">

                            <!-- Question -->
                            <h5 class="s-22 w-700"><span>5.</span> Can I integrate Gbeya with other business tools?</h5>

                            <!-- Answer -->
                            <p class="color--grey">Yes, Gbeya seamlessly integrates with various business tools including Google Calendar for appointment management, payment gateways, and other essential business applications. Our platform is designed to work alongside your existing business software ecosystem.
                            </p>

                        </div>


                        <!-- QUESTION #6 -->
                        <div class="question mb-35 wow fadeInUp">

                            <!-- Question -->
                            <h5 class="s-22 w-700"><span>6.</span> What kind of support does Gbeya provide?</h5>

                            <!-- Answer -->
                            <p class="color--grey">We offer comprehensive support including a responsive customer service team, detailed documentation, and training resources. Our support team is known for being incredibly responsive and helpful, as noted by many of our clients, including Mensah Accounting Services who experienced significant growth with our platform.
                            </p>

                        </div>


                    </div>
                </div> <!-- END QUESTIONS HOLDER -->


            </div> <!-- End row -->
        </div> <!-- END FAQs-3 QUESTIONS -->


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




<!-- DIVIDER LINE -->
<hr class="divider">
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
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const individualSteps = [
        {
            number: 1,
            title: 'Tell Us Your Needs',
            description: 'Answer a few questions about your tax situation or business finances.'
        },
        {
            number: 2,
            title: 'Get Matched with Experts',
            description: 'Our system finds verified accountants tailored to your needs.'
        },
        {
            number: 3,
            title: 'Work with Your Accountant',
            description: 'Collaborate seamlessly, upload documents, and get tax-ready.'
        }
    ];

    const accountantSteps = [
        {
            number: 1,
            title: 'Tell Us About Your Practice',
            description: 'Share details about your accounting firm and the services you offer.'
        },
        {
            number: 2,
            title: 'Get Matched with Clients',
            description: 'Our platform connects you with businesses and individuals needing your expertise.'
        },
        {
            number: 3,
            title: 'Manage Clients & Streamline Workflows',
            description: 'Collaborate seamlessly, handle tax filings, and grow your practice efficiently.'
        }
    ];

    function updateContent(tab) {
        const steps = tab === 'individuals' ? individualSteps : accountantSteps;
        const stepsContainer = document.getElementById('stepsContainer');
        const processTitle = document.getElementById('processTitle');
        const contentTitle = document.getElementById('contentTitle');
        const contentDescription = document.getElementById('contentDescription');
        const contentButton = document.getElementById('contentButton');

        // Update steps
        stepsContainer.innerHTML = steps.map(step => `
            <div class="step-item">
                <div class="step-number">${step.number}</div>
                <div class="step-content">
                    <h3 class="step-title">${step.title}</h3>
                    <p class="step-description">${step.description}</p>
                </div>
            </div>
        `).join('');

        // Update titles and content
        if (tab === 'individuals') {
            processTitle.textContent = 'Simple Steps to Stress-Free Tax Management';
            contentTitle.textContent = 'Manage, Track, and Optimize Your Taxes Seamlessly with Gbeya';
            contentDescription.textContent = 'Easily handle tax filings, payments, and compliance with Gbeya. Get expert guidance and streamline your tax process in minutes.';
            contentButton.textContent = 'Find an Accountant';
        } else {
            processTitle.textContent = 'Simple Steps to Grow Your Accounting Practice with Gbeya';
            contentTitle.textContent = 'Expand your client base and grow your practice with Gbeya';
            contentDescription.textContent = 'Join a trusted network of accountants and firms. Get discovered by potential clients and streamline your tax services with ease.';
            contentButton.textContent = 'Join Gbeya Today';
        }
    }

    // Add click handlers to tabs
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            updateContent(this.dataset.tab);
        });
    });

    // Initialize with individuals tab
    updateContent('individuals');
});
</script>
@endpush
