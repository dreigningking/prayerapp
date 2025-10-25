<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Buddy - Welcome</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS for additional styling -->
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            padding: 20px 0;
        }
        .hero-section {
            text-align: center;
            color: white;
            padding: 60px 20px;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }
        .hero-image {
            max-width: 300px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
        }
        .btn-primary {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
            border: none;
            border-radius: 25px;
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #fecfef 0%, #ff9a9e 100%);
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.3);
        }
        .modal-content {
            border-radius: 15px;
            border: none;
        }
        .modal-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .modal-header .btn-close {
            order: 1;
            margin-left: auto;
        }
        .modal-dialog {
            margin: 0;
            margin-left: auto;
            width: 400px;
            height: 100vh;
            max-width: none;
        }
        .modal.fade .modal-dialog {
            transform: translateX(100%);
            transition: transform 0.3s ease-out;
        }
        .modal.show .modal-dialog {
            transform: translateX(0);
        }
        @media (max-width: 768px) {
            .modal-dialog {
                width: 100vw;
            }
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 12px;
        }
        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: bold;
            width: 100%;
        }
        .btn-submit:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }
        .toggle-link {
            color: #667eea;
            cursor: pointer;
            text-decoration: none;
        }
        .toggle-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <img src="{{ asset('images/pray.png') }}" alt="Prayer Illustration" class="hero-image" onerror="this.src='{{ asset('images/avatar.png') }}'">
            <h1>Welcome to Prayer Buddy</h1>
            <p>Your companion for meaningful prayers and spiritual growth. Connect, share, and strengthen your faith journey with our community.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Get Started - Login</button>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to Prayer Buddy</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="login-email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="login-email" required>
                        </div>
                        <div class="mb-3">
                            <label for="login-password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="login-password" required>
                        </div>
                        <button type="submit" class="btn btn-submit">Login</button>
                    </form>
                    <p class="text-center mt-3">
                        Don't have an account? <a href="#" class="toggle-link" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Register here</a>
                    </p>
                    <p class="text-center">
                        <a href="#" class="toggle-link" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" data-bs-dismiss="modal">Forgot Password?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Join Prayer Buddy</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="register-name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="register-name" required>
                        </div>
                        <div class="mb-3">
                            <label for="register-email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="register-email" required>
                        </div>
                        <div class="mb-3">
                            <label for="register-password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="register-password" required>
                        </div>
                        <div class="mb-3">
                            <label for="register-confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="register-confirm-password" required>
                        </div>
                        <button type="submit" class="btn btn-submit">Register</button>
                    </form>
                    <p class="text-center mt-3">
                        Already have an account? <a href="#" class="toggle-link" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Enter your email address and we'll send you a one-time password to login.</p>
                    <form id="forgotPasswordForm">
                        <div class="mb-3">
                            <label for="forgot-email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="forgot-email" required>
                        </div>
                        <button type="submit" class="btn btn-submit">Send One-Time Password</button>
                    </form>

                    <!-- OTP Login Form (shown after OTP is sent) -->
                    <form id="otpLoginForm" style="display: none;">
                        <div class="mb-3">
                            <label for="otp-code" class="form-label">One-Time Password</label>
                            <input type="text" class="form-control" id="otp-code" placeholder="Enter the code sent to your email" required>
                            <div class="form-text" id="otp-debug-info"></div>
                        </div>
                        <button type="submit" class="btn btn-submit">Login with OTP</button>
                        <button type="button" class="btn btn-outline-secondary mt-2 w-100" onclick="resetOtpForm()">Back to Email</button>
                    </form>
                    <p class="text-center mt-3">
                        <a href="#" class="toggle-link" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Back to Login</a>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        // Set up AJAX with CSRF token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Login form submission
        $('#loginModal form').on('submit', function(e) {
            e.preventDefault();

            const email = $('#login-email').val();
            const password = $('#login-password').val();

            $.ajax({
                url: '{{ route("login.submit") }}',
                method: 'POST',
                data: { email, password },
                success: function(response) {
                    if (response.success) {
                        window.location.href = response.redirect;
                    }
                },
                error: function(xhr) {
                    const response = xhr.responseJSON;
                    if (response.errors) {
                        // Clear previous errors
                        $('#loginModal .text-danger').remove();
                        $('#loginModal .form-control').removeClass('is-invalid');

                        // Display validation errors
                        Object.keys(response.errors).forEach(field => {
                            const inputId = 'login-' + field;
                            $('#' + inputId).addClass('is-invalid').after('<div class="text-danger">' + response.errors[field][0] + '</div>');
                        });
                } else if (response.message) {
                    // For login failures, display error under email field
                    $('#loginModal .text-danger').remove();
                    $('#loginModal .form-control').removeClass('is-invalid');
                    $('#login-email').addClass('is-invalid').after('<div class="text-danger">Invalid credentials.</div>');
                }
                }
            });
        });

        // Register form submission
        $('#registerModal form').on('submit', function(e) {
            e.preventDefault();

            const name = $('#register-name').val();
            const email = $('#register-email').val();
            const password = $('#register-password').val();
            const password_confirmation = $('#register-confirm-password').val();

            $.ajax({
                url: '{{ route("register.submit") }}',
                method: 'POST',
                data: { name, email, password, password_confirmation },
                success: function(response) {
                    if (response.success) {
                        window.location.href = response.redirect;
                    }
                },
                error: function(xhr) {
                    const response = xhr.responseJSON;
                    if (response.errors) {
                        // Clear previous errors
                        $('#registerModal .text-danger').remove();
                        $('#registerModal .form-control').removeClass('is-invalid');

                        // Display validation errors
                        Object.keys(response.errors).forEach(field => {
                            const inputId = 'register-' + field;
                            $('#' + inputId).addClass('is-invalid').after('<div class="text-danger">' + response.errors[field][0] + '</div>');
                        });
                    } else if (response.message) {
                        alert(response.message);
                    }
                }
            });
        });

        // Forgot password form submission
        $('#forgotPasswordForm').on('submit', function(e) {
            e.preventDefault();

            const email = $('#forgot-email').val();

            // Disable button during submission
            const submitBtn = $(this).find('button[type="submit"]');
            const originalText = submitBtn.text();
            submitBtn.prop('disabled', true).text('Sending...');

            $.ajax({
                url: '{{ route("otp.send") }}',
                method: 'POST',
                data: { email },
                success: function(response) {
                    if (response.success) {
                        // Show OTP form
                        $('#forgotPasswordForm').hide();
                        $('#otpLoginForm').show();
                        $('#forgotPasswordModal .modal-title').text('Enter One-Time Password');

                        // Show OTP in debug mode
                        if (response.otp) {
                            $('#otp-debug-info').html('<small class="text-muted">Debug: Your OTP is: <strong>' + response.otp + '</strong></small>');
                        }

                        alert(response.message);
                    }
                },
                error: function(xhr) {
                    const response = xhr.responseJSON;
                    if (response.errors) {
                        // Clear previous errors
                        $('#forgotPasswordForm .text-danger').remove();
                        $('#forgotPasswordForm .form-control').removeClass('is-invalid');

                        // Display validation errors
                        Object.keys(response.errors).forEach(field => {
                            const inputId = 'forgot-' + field.split('.')[0]; // Handle array fields
                            $('#' + inputId).addClass('is-invalid').after('<div class="text-danger">' + response.errors[field][0] + '</div>');
                        });
                    } else if (response.message) {
                        alert(response.message);
                    }
                },
                complete: function() {
                    submitBtn.prop('disabled', false).text(originalText);
                }
            });
        });

        // OTP login form submission
        $('#otpLoginForm').on('submit', function(e) {
            e.preventDefault();

            const email = $('#forgot-email').val();
            const otp = $('#otp-code').val();

            $.ajax({
                url: '{{ route("otp.login") }}',
                method: 'POST',
                data: { email, otp },
                success: function(response) {
                    if (response.success) {
                        window.location.href = response.redirect;
                    }
                },
                error: function(xhr) {
                    const response = xhr.responseJSON;
                    if (response.message) {
                        $('#otpLoginForm .text-danger').remove();
                        $('#otp-code').addClass('is-invalid').after('<div class="text-danger">' + response.message + '</div>');
                    }
                }
            });
        });

        // Reset OTP form back to email input
        function resetOtpForm() {
            $('#forgotPasswordForm').show();
            $('#otpLoginForm').hide();
            $('#forgotPasswordModal .modal-title').text('Forgot Password');
            $('#forgot-email').val('');
            $('#otp-code').val('');
            $('#otp-debug-info').empty();
        }

        // Clear validation errors when modals are closed
        $('.modal').on('hidden.bs.modal', function() {
            $(this).find('.text-danger').remove();
            $(this).find('.form-control').removeClass('is-invalid');
        });

        // Clear forms when switching between modals
        $('[data-bs-target="#loginModal"]').on('click', function() {
            $('#loginModal form')[0].reset();
        });

        $('[data-bs-target="#registerModal"]').on('click', function() {
            $('#registerModal form')[0].reset();
        });

        $('[data-bs-target="#forgotPasswordModal"]').on('click', function() {
            resetOtpForm();
        });
    </script>
</body>
</html>
