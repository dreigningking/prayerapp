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

@include('layout.features')

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
                    <!-- Category -->
                    <span class="section-id">Individuals & Companies</span>

                    <!-- Title -->
                    <h2 class="s-24 w-700">Empowering individuals and businesses with expert tax and accounting solutions</h2>

                    <!-- List -->
                    <ul class="simple-list">
                        <li class="list-item">
                            <p><strong>File Taxes with Ease:</strong>
                                Get step-by-step guidance for personal or business tax returns.
                            </p>
                        </li>

                        <li class="list-item">
                            <p><strong>Maximize Deductions:</strong>
                                Ensure you claim all eligible deductions and credits.
                            </p>
                        </li>

                        <li class="list-item">
                            <p><strong>Payment & Bookkeeping:</strong>
                                Manage payments and track business finances effortlessly.
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="mb-0"><strong>24/7 Expert Support:</strong>
                                Consult with certified accountants anytime you need help
                            </p>
                        </li>
                    </ul>

                    <!-- Button -->
                    <a href="#" class="btn btn--theme hover--theme mt-4">Get Started</a>

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
                    <!-- Category -->
                    <span class="section-id">Accountants & Accounting Firms</span>

                    <!-- Title -->
                    <h2 class="s-24 w-700">Expand your reach and offer seamless services to clients through Gbeya</h2>

                    <!-- List -->
                    <ul class="simple-list">
                        <li class="list-item">
                            <p><strong>Find & Manage Clients:</strong>
                                Connect with individuals, businesses, and government bodies..
                            </p>
                        </li>

                        <li class="list-item">
                            <p><strong>Automated Tax Filing Tools:</strong>
                                Use powerful tools to streamline your accounting workflow.
                            </p>
                        </li>

                        <li class="list-item">
                            <p><strong>Secure Document Management:</strong>
                                Upload, review, and store financial records securely.
                            </p>
                        </li>

                        <li class="list-item">
                            <p class="mb-0"><strong>Billing & Payment Integration:</strong>
                                Get paid faster with seamless invoicing solutions.
                            </p>
                        </li>
                    </ul>

                    <!-- Button -->
                    <a href="#" class="btn btn--theme hover--theme mt-4">Join as an Accountant</a>

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
                    <img class="img-fluid" src="{{asset('images/tablet.jpeg')}}" alt="content-image">
                </div>
            </div>


            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">
                    <!-- Category -->
                    <span class="section-id">Government Tax Bodies</span>

                    <!-- Title -->
                    <h2 class="s-24 w-700">Streamline tax collection, ensure compliance, and enhance financial transparency</h2>

                    <!-- List -->
                    <ul class="simple-list">
                        <li class="list-item">
                            <p><strong>Centralized Tax Filing:</strong>
                                Receive tax filings directly from individuals, businesses, and accountants.
                            </p>
                        </li>

                        <li class="list-item">
                            <p><strong>Automated Compliance Oversight:</strong>
                                Easily track submissions and identify discrepancies.
                            </p>
                        </li>

                        <li class="list-item">
                            <p><strong>Certified Financial Auditing:</strong>
                                Access vetted accountants for thorough auditing and reporting.
                            </p>
                        </li>

                        <li class="list-item">
                            <p><strong>Data Security & Confidentiality:</strong>
                                Safeguard sensitive taxpayer information
                            </p>
                        </li>
                    </ul>

                    <!-- Button -->
                    <a href="#" class="btn btn--theme hover--theme mt-4">Partner With Us</a>

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

<section>
    <div class="container">
        <div class="text-center">
            <h2 class="process-subtitle">Find Trusted Accountants Wherever You Are</h2>
            <h1 class="process-title" id="processTitle">
                Our global network of certified accountants is ready to assist you
            </h1>
        </div>
        <div>
            <img src="{{ asset('images/globe.jpeg') }}" alt="content-image" class="img-fluid w-100">
        </div>
    </div>
</section>

@include('layout.testimonials')

<!-- DIVIDER LINE -->
<hr class="divider">


<section id="blog-1" class="py-100 blog-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">

                    <!-- Title -->
                    <h2 class="s-50 w-700">Articles &amp; Resources</h2>

                    <!-- Text -->
                    <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>

                </div>
            </div>
        </div>


        <div class="row">


            <!-- BLOG POST #1 -->
            <div class="col-md-6 col-lg-4">
                <div id="bp-1-1" class="blog-post wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-35">
                        <img class="img-fluid r-16" src="images/blog/post-8-img.jpg" alt="blog-post-image">
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <span class="post-tag color--theme">Product News</span>

                        <!-- Post Link -->
                        <h6 class="s-20 w-700">
                            <a href="single-post.html">Aliqum mullam porta blandit: tempor sapien and gravida</a>
                        </h6>

                        <!-- Text -->
                        <p>Egestas luctus vitae augue and ipsum ultrice quisque in cursus lacus feugiat congue
                            diam ultrice laoreet sagittis
                        </p>

                        <!-- Post Meta -->
                        <div class="blog-post-meta mt-20">
                            <ul class="post-meta-list ico-10">
                                <li>
                                    <p class="p-sm w-500">By Helen J.</p>
                                </li>
                                <li class="meta-list-divider">
                                    <p><span class="flaticon-minus"></span></p>
                                </li>
                                <li>
                                    <p class="p-sm">Apr 28, 2023</p>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- END BLOG POST TEXT -->

                </div>
            </div> <!-- END BLOG POST #1 -->


            <!-- BLOG POST #2 -->
            <div class="col-md-6 col-lg-4">
                <div id="bp-1-2" class="blog-post wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-35">
                        <img class="img-fluid r-16" src="images/blog/post-2-img.jpg" alt="blog-post-image">
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <span class="post-tag color--green-400">Community</span>

                        <!-- Post Link -->
                        <h6 class="s-20 w-700">
                            <a href="single-post.html">Porttitor cursus fusce egestas CEO cursus at magna sapien
                                suscipit and egestas ipsum
                            </a>
                        </h6>

                        <!-- Text -->
                        <p>Aliqum mullam ipsum vitae and blandit vitae tempor sapien and donec lipsum</p>

                        <!-- Post Meta -->
                        <div class="blog-post-meta mt-20">
                            <ul class="post-meta-list ico-10">
                                <li>
                                    <p class="p-sm w-500">By Martex Team</p>
                                </li>
                                <li class="meta-list-divider">
                                    <p><span class="flaticon-minus"></span></p>
                                </li>
                                <li>
                                    <p class="p-sm">Apr 14, 2023</p>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- END BLOG POST TEXT -->

                </div>
            </div> <!-- END BLOG POST #2 -->


            <!-- BLOG POST #3 -->
            <div class="col-md-12 col-lg-4">
                <div id="bp-1-3" class="blog-post wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-35">
                        <img class="img-fluid r-16" src="images/blog/post-5-img.jpg" alt="blog-post-image">
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <span class="post-tag color--purple-400">Freelancer Tips</span>

                        <!-- Post Link -->
                        <h6 class="s-20 w-700">
                            <a href="single-post.html">Cubilia laoreet augue egestas and Martex magna impedit</a>
                        </h6>

                        <!-- Text -->
                        <p>Luctus vitae egestas augue and ipsum ultrice quisque in cursus lacus feugiat egets
                            congue ultrice sagittis laoreet
                        </p>

                        <!-- Post Meta -->
                        <div class="blog-post-meta mt-20">
                            <ul class="post-meta-list ico-10">
                                <li>
                                    <p class="p-sm w-500">By Miranda Green</p>
                                </li>
                                <li class="meta-list-divider">
                                    <p><span class="flaticon-minus"></span></p>
                                </li>
                                <li>
                                    <p class="p-sm">Mar 27, 2023</p>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- END BLOG POST TEXT -->

                </div>
            </div> <!-- END BLOG POST #3 -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

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




<!-- DIVIDER LINE -->
<hr class="divider">


@include('layout.newsletter')

@endsection
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const individualSteps = [{
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

        const accountantSteps = [{
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