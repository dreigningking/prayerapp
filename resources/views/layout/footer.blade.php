
<!-- FOOTER-3
			============================================= -->
            <footer class="footer-container">
                <div class="footer-main">
                    <!-- Newsletter Section -->
                    <div class="newsletter-section" style="background-image: url('{{ asset('images/pattern.svg') }}')">
                        <img src="{{ asset('images/shape.svg') }}" alt="shape" class="shape-left">
                        <img src="{{ asset('images/shape2.svg') }}" alt="shape" class="shape-right">
                        
                        <h4 class="newsletter-title">Subscribe to our newsletter</h4>
                        <div class="newsletter-form">
                            <input type="text" placeholder="Name" class="newsletter-input">
                            <input type="text" placeholder="Email Address" class="newsletter-input">
                            <button class="subscribe-btn">Subscribe</button>
                        </div>
                    </div>

                    <div class="footer-content">
                        <!-- Logo Section -->
                        <div class="footer-logo-section">
                            <img src="{{ asset('images/footer-logo.svg') }}" alt="Logo" class="footer-logo">
                            <p class="footer-description">
                                Gbeya simplifies accounting with powerful tools that help you
                                manage everything tax filing, finances.
                            </p>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>

                        <!-- Company Links -->
                        <div class="footer-links-section">
                            <h3 class="footer-heading">Company</h3>
                            <ul class="footer-links">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="{{ url('contact-us') }}">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Help Links -->
                        <div class="footer-links-section">
                            <h3 class="footer-heading">Help</h3>
                            <ul class="footer-links">
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">API Documentation</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                        <!-- Resources Links -->
                        <div class="footer-links-section">
                            <h3 class="footer-heading">Resources</h3>
                            <ul class="footer-links">
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Training & Learning</a></li>
                                <li><a href="#">How to - Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Copyright Section -->
                    <div class="footer-copyright">
                        <p>&copy; Copyright {{ date('Y') }}, All Rights Reserved by Gbeya</p>
                    </div>
                </div>
            </footer>
