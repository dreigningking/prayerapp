<!doctype html>

<html lang="en">




<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="DSAThemes">
  <meta name="description" content="Gbeya - Digital Financial Platform that drives results">
  <meta name="keywords" content="Finances, Accounting, Tax, Financial, Accounting Software, Tax Software, Financial Software, Accounting System, Tax System, Financial System, Accounting Platform, Tax Platform, Financial Platform, Accounting System, Tax System, Financial System, Accounting Platform, Tax Platform, Financial Platform">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- SITE TITLE -->
  <title>Prayer Buddy</title>

  <!-- FAVICON AND TOUCH ICONS -->
  <link rel="shortcut icon" href="{{asset('images/fav.png')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('images/fav.png')}}" type="image/x-icon">

  <link rel="apple-touch-icon" href="{{asset('images/fav.png')}}">
  <link rel="icon" href="{{asset('images/fav.png')}}" type="image/x-icon">

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

  <!-- BOOTSTRAP CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- FONT ICONS -->
  <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">

  <!-- PLUGINS STYLESHEET -->
  <link href="{{asset('css/menu.css')}}" rel="stylesheet">
  <link id="effect" href="{{asset('css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
  <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lunar.css')}}" rel="stylesheet">
  <link href="{{asset('css/footer.css')}}" rel="stylesheet">
  <link href="{{asset('css/accounting-process.css')}}" rel="stylesheet">

  <!-- ON SCROLL ANIMATION -->
  <link href="{{asset('css/animate.css')}}" rel="stylesheet">

  <!-- TEMPLATE CSS -->
  <!-- <link href="{{asset('css/blue-theme.css')}}" rel="stylesheet"> -->
  <link href="{{asset('css/crocus-theme.css')}}" rel="stylesheet">
  <!-- <link href="{{asset('css/green-theme.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/magenta-theme.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/pink-theme.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/purple-theme.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/skyblue-theme.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/red-theme.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/violet-theme.css')}}" rel="stylesheet"> -->

  <!-- RESPONSIVE CSS -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  @stack('styles')

</head>




<body>




  <!-- PRELOADER SPINNER
		============================================= -->
  <div id="loading" class="loading--theme">
    <div id="loading-center"><span class="loader"></span></div>
  </div>




  <!-- PAGE CONTENT
		============================================= -->
  <div id="page" class="page font--jakarta">




    <!-- HEADER
			============================================= -->
    @include('layout.header')
    @yield('content')
    @include('layout.footer')




  </div> <!-- END PAGE CONTENT -->




  <!-- EXTERNAL SCRIPTS
		============================================= -->
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
      $('.contact-form').on('submit', function(e) {
        e.preventDefault();

        let form = $(this);
        let submitBtn = form.find('.submit');
        let loadingSpan = form.find('.loading');

        // Disable submit button and show loading
        submitBtn.prop('disabled', true);
        loadingSpan.html('Sending message...');

        $.ajax({
          url: '/contact-us',
          method: 'POST',
          data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            name: form.find('.name').val(),
            email: form.find('.email').val(),
            type: form.find('.type').val(),
            message: form.find('.message').val()
          },
          success: function(response) {
            loadingSpan.html(response.message).addClass('text-success');
            form[0].reset(); // Reset form
          },
          error: function(xhr) {
            let message = xhr.responseJSON?.message || 'Something went wrong. Please try again.';
            loadingSpan.html(message).addClass('text-danger');
          },
          complete: function() {
            submitBtn.prop('disabled', false);
            setTimeout(() => {
              loadingSpan.html('').removeClass('text-success text-danger');
            }, 5000);
          }
        });
      });

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

  @stack('scripts')

</body>




</html>