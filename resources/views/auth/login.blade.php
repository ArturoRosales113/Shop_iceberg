@extends('layouts.app')
@section('page_title')
 Admin Login
@endsection

@section('content')
{{-- @include('layouts.navbars.navbarTransparent') --}}
<body class="login-page">
 <!-- Navbar -->
 <div class="wrapper">
 <!-- Main -->
 @include('auth.loginmain')
 <!--   Core JS Files   -->
 @include('layouts.scripts')
 <!--   Page Custom JS Files   -->
 <script>
  var header_height;
  var fixed_section;
  var floating = false;
  var noeuiKit =

  $(document).ready(function() {
      suggestions_distance = $("#suggestions").offset();
      pay_height = $('.fixed-section').outerHeight();

      $(window).on('scroll', nowuiKit.checkScrollForTransparentNavbar);

      if ($(window).width() >= 768) {
          big_image = $('.header[data-parallax="true"]');
          if (big_image.length != 0) {
              $(window).on('scroll', nowuiKitDemo.checkScrollForParallax);
          }
      }

      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
  });
 </script>
</body>
@endsection
