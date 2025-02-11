<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gbeya - Modern Tax Administration Platform">
    <meta name="keywords" content="Tax Administration, Digital Tax Platform, Tax Management, Government Solutions">

    <!-- SITE TITLE -->
    <title>Gbeya - Modern Tax Administration Platform</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="apple-touch-icon" href="{{asset('images/fav.png')}}">
  <link rel="icon" href="{{asset('images/fav.png')}}" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{{asset('css/blue-theme.css')}}" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body>
    <!-- PRELOADER -->
    <div id="loading" class="loading--theme">
        <div id="loading-center"><span class="loader"></span></div>
    </div>

    <!-- PAGE CONTENT -->
    <div id="page" class="page font--inter">

        <!-- HEADER -->
        <header id="header" class="tra-menu navbar-light white-scroll">
            <div class="header-wrapper">
                <div class="wsmobileheader clearfix">
                    <span class="smllogo">
                        <img src="{{asset('images/gbeya-logo.png')}}" alt="mobile-logo">
                    </span>
                    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                </div>

                <!-- NAVIGATION MENU -->
                <div class="wsmainfull menu clearfix">
                    <div class="wsmainwp clearfix">


                        <!-- HEADER BLACK LOGO -->
                        <div class="desktoplogo">
                            <a href="{{url('/')}}" class="logo-black"><img src="{{asset('images/gbeya-logo.png')}}" alt="logo"></a>
                        </div>


                        <!-- HEADER WHITE LOGO -->
                        <div class="desktoplogo">
                            <a href="{{url('/')}}" class="logo-white"><img src="{{asset('images/gbeya-logo.png')}}" alt="logo"></a>
                        </div>


                        <!-- MAIN MENU -->
                        <nav class="wsmenu clearfix">
                            <div class="overlapblackbg"></div>
                            <ul class="wsmenu-list nav-theme">


                               


                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="#whyus" class="h-link">Why Us</a></li>


                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="#reviews-1" class="h-link">Testimonials</a></li>


                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="#faqs-3" class="h-link">FAQs</a></li>


                                


                            </ul>
                        </nav> <!-- END MAIN MENU -->


                    </div>
                </div>
            </div>
        </header>

        <!-- HERO SECTION -->
        <section id="hero-24" class="hero-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="hero-24-txt color--white wow  fadeInUp text-center">
                            <h2 class="s-60 w-700">Transform Your Tax Administration with Gbeya</h2>
                            <p class="p-xl">Join the waitlist for early access to the most comprehensive tax administration platform</p>

                            <!-- HERO QUICK FORM -->
                            <form id="newsletter-form" name="quickform" class="quick-form form-shadow mt-45">
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your name" required>
                                    <input type="email" name="email" class="form-control" placeholder="Your work email" required>
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn--theme">Join Waitlist</button>
                                    </span>
                                </div>
                                <div class="quick-form-msg"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURES SECTION -->
        <section class="pt-100 pb-100 features-section" id="whyus">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="section-title mb-70 text-center">
                            <h2 class="s-50 w-700">Why Choose Gbeya?</h2>
                            <p class="s-21 color--grey">Comprehensive solutions for modern tax administration</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 rounded-4 p-4">
                            <div class="card-body">
                                <div class="feature-icon mb-4">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                        <rect width="48" height="48" rx="24" fill="#E3F2FD" />
                                        <path d="M24 16V32M16 24H32" stroke="#1976D2" stroke-width="2" />
                                    </svg>
                                </div>
                                <h5 class="card-title mb-3">Digital Transformation</h5>
                                <p class="card-text">Modernize tax operations with end-to-end digital solutions and automated workflows</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 rounded-4 p-4">
                            <div class="card-body">
                                <div class="feature-icon mb-4">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                        <rect width="48" height="48" rx="24" fill="#E3F2FD" />
                                        <path d="M24 16L32 24L24 32L16 24L24 16Z" stroke="#1976D2" stroke-width="2" />
                                    </svg>
                                </div>
                                <h5 class="card-title mb-3">Enhanced Compliance</h5>
                                <p class="card-text">Improve tax compliance with automated checks and real-time monitoring</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 rounded-4 p-4">
                            <div class="card-body">
                                <div class="feature-icon mb-4">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                        <rect width="48" height="48" rx="24" fill="#E3F2FD" />
                                        <path d="M16 24H32M24 16V32" stroke="#1976D2" stroke-width="2" />
                                    </svg>
                                </div>
                                <h5 class="card-title mb-3">Data Analytics</h5>
                                <p class="card-text">Make data-driven decisions with comprehensive analytics and reporting tools</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATISTICS SECTION -->
        <section class="py-100 bg-light">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md-3">
                        <h3 class="s-46 w-700 mb-2">99.9%</h3>
                        <p class="mb-0">System Uptime</p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="s-46 w-700 mb-2">50+</h3>
                        <p class="mb-0">Tax Authorities</p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="s-46 w-700 mb-2">1M+</h3>
                        <p class="mb-0">Daily Transactions</p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="s-46 w-700 mb-2">30%</h3>
                        <p class="mb-0">Revenue Increase</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="s-46 w-700 mb-4">Ready to Transform Your Tax Administration?</h2>
                        <p class="s-21 color--grey mb-5">Join leading tax authorities using Gbeya to modernize their operations</p>
                        <a href="#" class="btn btn--theme btn-lg">Join the Waitlist</a>
                    </div>
                </div>
            </div>
        </section>

        @include('layout.testimonials')

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
        <footer id="footer-3" class="pt-100 footer">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER LOGO -->
						<div class="col-xl-3">
							<div class="footer-info">
                            <img src="{{ asset('images/footer-logo.svg') }}" alt="Logo" class="footer-logo">
                            <p class="footer-description">
                                Gbeya simplifies accounting with powerful tools that help you
                                manage everything tax filing, finances.
                            </p>
							</div>	
						</div>	


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-3 col-xl-2">
							<div class="footer-links fl-1">
							
								<!-- Title -->
								<h6 class="s-17 w-700">Company</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
                                <li><p><a href="#">About</a></p></li>
                                <li><p><a href="#">Features</a></p></li>
                                <li><p><a href="#">Pricing</a></p></li>
                                <li><p><a href="{{ url('contact-us') }}">Contact</a></p></li>		
								</ul>

							</div>
						</div>	<!-- END FOOTER LINKS -->	


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-3 col-xl-2">
							<div class="footer-links fl-2">
												
								<!-- Title -->
								<h6 class="s-17 w-700">Help</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
                                <li><p><a href="#">Customer Support</a></p></li>
                                <li><p><a href="#">API Documentation</a></p></li>
                                <li><p><a href="#">Terms & Conditions</a></p></li>
                                <li><p><a href="#">Privacy Policy</a></p></li>		
								</ul>

							</div>	
						</div>	<!-- END FOOTER LINKS -->	


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-3 col-xl-2">
							<div class="footer-links fl-3">
												
								<!-- Title -->
								<h6 class="s-17 w-700">Legal</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
                                    <li><p><a href="#">Forum</a></p></li>
                                    <li><p><a href="#">Events</a></p></li>
                                    <li><p><a href="#">Training & Learning</a></p></li>
                                    <li><p><a href="#">How to - Blog</a></p></li>
								</ul>

							</div>	
						</div>	<!-- END FOOTER LINKS -->	


						<!-- FOOTER LINKS -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-links fl-4">
												
								<!-- Title -->
								<h6 class="s-17 w-700">Connect With Us</h6>

								<!-- Mail Link -->
								<p class="footer-mail-link ico-25">
									<a href="mailto:yourdomain@mail.com">service@gbeya.com</a>
								</p>

								<!-- Social Links -->	
								<ul class="footer-socials ico-25 text-center clearfix">		
									<li><a href="#"><span class="flaticon-facebook"></span></a></li>
									<li><a href="#"><span class="flaticon-twitter"></span></a></li>
									<li><a href="#"><span class="flaticon-github"></span></a></li>
									<li><a href="#"><span class="flaticon-dribbble"></span></a></li>
								</ul>

							</div>	
						</div>	<!-- END FOOTER LINKS -->	


					</div>	<!-- END FOOTER CONTENT -->


					<hr>	<!-- FOOTER DIVIDER LINE -->


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col">
								<div class="footer-copyright"><p class="p-sm">© 2023 Martex. <span>All Rights Reserved</span></p></div>
							</div>


							<!-- FOOTER SECONDARY LINK -->
							<div class="col">
								<div class="bottom-secondary-link ico-15 text-end">
									<p class="p-sm"><a href="https://themeforest.net/user/dsathemes/portfolio">Made with 
										<span class="flaticon-heart color--pink-400"></span> by @DSAThemes</a>
									</p>
								</div>
							</div>


						</div>  <!-- End row -->
					</div>	<!-- END BOTTOM FOOTER -->


				</div>     <!-- End container -->	
			</footer>
    </div> <!-- End page -->

    <!-- SCRIPTS -->
    <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/modernizr.custom.js')}}"></script>
  <script src="{{asset('js/jquery.easing.js')}}"></script>
  <script src="{{asset('js/jquery.appear.js')}}"></script>
  <script src="{{asset('js/menu.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/pricing-toggle.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/quick-form.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/lunar.js')}}"></script>
  <script src="{{asset('js/wow.js')}}"></script>

  <!-- Custom Script -->
  <script src="{{asset('js/custom.js')}}"></script>
  <script>
    // Contact Form Handler
    $(document).ready(function() {
      

      // Newsletter Form Handler
      $('.newsletter-form').on('submit', function(e) {
        e.preventDefault();

        let form = $(this);
        let name = form.find('input[type="text"]');
        let emailInput = form.find('input[type="email"]');
        let notification = form.find('.form-notification');

        $.ajax({
          url: '/newsletter-subscription',
          method: 'POST',
          data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            email: emailInput.val(),
            name: name.val()
          },
          success: function(response) {
            notification.html(response.message).addClass('text-success');
            form[0].reset(); // Reset form
          },
          error: function(xhr) {
            let message = xhr.responseJSON?.message || 'Something went wrong. Please try again.';
            notification.html(message).addClass('text-danger');
          },
          complete: function() {
            setTimeout(() => {
              notification.html('').removeClass('text-success text-danger');
            }, 5000);
          }
        });
      });
    });
  </script>

</body>

</html>