<header id="header" class="tra-menu navbar-dark white-scroll">
    <div class="header-wrapper">


        <!-- MOBILE HEADER -->
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
                    <ul class="wsmenu-list nav-theme">


                        <!-- DROPDOWN SUB MENU -->
                        <li aria-haspopup="true"><a href="{{ url('/') }}" class="h-link">About <span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="#why-gbeya">Why Gbeya?</a></li> <!--for everyone -->
                                <li aria-haspopup="true"><a href="#best-financial-tools">Best Financial Tools</a></li> <!-- Service 1   -->
                                <li aria-haspopup="true"><a href="#tax-compliance">Tax Compliance</a></li> <!-- Service 1   -->
                                <li aria-haspopup="true"><a href="#marketplace">Marketplace</a></li> <!-- Service 1   -->
                                <li aria-haspopup="true"><a href="#testimonials">Testimonials</a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="{{ url('/') }}" class="h-link">Gbeya For <span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="{{url('individuals-companies')}}">Individuals & Companies</a></li> <!--for everyone -->
                                <li aria-haspopup="true"><a href="{{url('accountants-accounting-firms')}}">Accountants & Accounting Firms</a></li> <!-- Service 1   -->
                                <li aria-haspopup="true"><a href="{{url('government-tax-bodies')}}">Government Tax Bodies</a></li> <!-- Service 1   -->

                            </ul>
                        </li>
                        
                        <li class="nl-simple" aria-haspopup="true"><a href="{{url('pricing')}}" class="h-link">Pricing</a></li>
                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="#" class="h-link">Community</a></li>


                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="{{route('blog')}}" class="h-link">Blog</a></li>

                        <li class="nl-simple" aria-haspopup="true"><a href="#" class="h-link">Contact Us</a></li>



                            <!-- SIGN IN LINK -->
                            <!-- <li class="nl-simple reg-fst-link mobile-last-link" aria-haspopup="true">
                                        <a href="login-2.html" class="h-link">Sign in</a>
                                </li> -->


                        <!-- SIGN UP BUTTON -->
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="{{url('waitlist')}}" class="btn r-04 btn--theme hover--theme last-link">Waiting List</a>
                        </li>


                    </ul>
                </nav> <!-- END MAIN MENU -->


            </div>
        </div> <!-- END NAVIGATION MENU -->


    </div> <!-- End header-wrapper -->
</header> <!-- END HEADER -->