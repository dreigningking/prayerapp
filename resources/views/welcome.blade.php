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
            <!-- IMAGE BLOCK -->
            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid rounded-3" src="{{ asset('images/hero-15-img.png') }}" alt="accountant-platform-dashboard">
                </div>
            </div>


            


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

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
                            <h2 class="s-48 w-700">Grow your business with integrated marketing tools</h2>

                            <!-- Buttons -->
                            <div class="btns-group">
                                <a href="#hero-7" class="btn r-04 btn--theme hover--theme">Get started - it's free
                                </a>
                                <a href="pricing-1.html" class="btn r-04 btn--tra-black hover--theme">Discover pricing</a>
                            </div>

                            <!-- Button Text -->
                            <!-- <p class="btn-txt ico-15">Free for 14 days - no credit card required.</p> -->

                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- END BANNER-7 WRAPPER -->


        </div> <!-- End container -->
    </div> <!-- End banner overlay -->
</section> <!-- END BANNER-7 -->




<!-- DIVIDER LINE -->
<hr class="divider">




<!-- MODAL WINDOW (NEWSLETTER FORM)
			============================================= -->
<div id="modal-2" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">


            <!-- CLOSE BUTTON -->
            <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                <span class="flaticon-cancel"></span>
            </button>


            <!-- MODAL CONTENT -->
            <div class="modal-body text-center">


                <!-- IMAGE -->
                <div class="modal-body-img">
                    <img class="img-fluid" src="{{asset('images/modal-newsletter-blue.jpg')}}" alt="content-image">
                </div>


                <!-- NEWSLETTER FORM -->
                <div class="modal-body-content">

                    <!-- Title -->
                    <h5 class="s-24 w-700">Stay up to date with our news, ideas and updates</h5>

                    <!-- Form -->
                    <form class="newsletter-form">

                        <div class="input-group">
                            <input type="email" autocomplete="off" class="form-control" placeholder="Your email address" required id="s-email">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn--theme hover--theme">Subscribe Now</button>
                            </span>
                        </div>

                        <!-- Newsletter Form Notification -->
                        <label for="s-email" class="form-notification"></label>

                    </form>

                </div> <!-- END NEWSLETTER FORM -->


            </div> <!-- END MODAL CONTENT -->


        </div>
    </div>
</div> <!-- END MODAL WINDOW (NEWSLETTER FORM) -->

@endsection