<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Small Apps | Bootstrap App Landing Template</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('public/frontend/images/favicon.png') }}" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{ URL::to('public/frontend/plugins/bootstrap/bootstrap.min.css ') }}">
  <link rel="stylesheet" href="{{ URL::to('public/frontend/plugins/themify-icons/themify-icons.css ') }}">
  <link rel="stylesheet" href="{{ URL::to('public/frontend/plugins/slick/slick.css ') }}">
  <link rel="stylesheet" href="{{ URL::to('public/frontend/plugins/slick/slick-theme.css ') }}">
  <link rel="stylesheet" href="{{ URL::to('public/frontend/plugins/fancybox/jquery.fancybox.min.css ') }}">
  <link rel="stylesheet" href="{{ URL::to('public/frontend/plugins/aos/aos.css ') }}">

  <!-- CUSTOM CSS -->
  <link href="{{ URL::to('public/frontend/css/style.css ') }}" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ URL::to('public/main/logo/logo.png') }}" width="auto" height="auto"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('companies') }}">Companies</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('employees') }}">Employees</a>
        </li>
        @if(Auth::check())
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('sign-out') }}">Logout</a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('login') }}">Login</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('contact-us') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


@yield('frontend')
<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.html"><img src="{{ URL::to('public/frontend/images/logo-alt.png') }}" alt="footer-logo"></a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/themefisher/"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href="team.html">Teams</a></li>
              <li><a href="blog.html">Blogs</a></li>
              <li><a href="FAQ.html">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href="sign-up.html">Singup</a></li>
              <li><a href="sign-in.html">Login</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="career.html">Career</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Investor</a></li>
              <li><a href="privacy.html">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="{{ URL::to('public/frontend/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::to('public/frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ URL::to('public/frontend/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ URL::to('public/frontend/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ URL::to('public/frontend/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
  <script src="{{ URL::to('public/frontend/plugins/aos/aos.js') }}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="{{ URL::to('public/frontend/plugins/google-map/gmap.js') }}"></script>
  
  <script src="{{ URL::to('public/frontend/js/script.js') }}"></script>
</body>

</html>