<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

@if(!isset($title))
    @php $title = "Danska Property Services";
        $description = "Our ojective is to enable property owners and property managers the abilty to deliver repairs seamlessly.";
    @endphp
@endif
  <title>{{$title}}</title>
  <meta name="description" content="{{$description}}}}">
  <meta content="Dansk Property Services" name="keywords">
  <meta name=”robots” content="index, follow">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Vendor CSS Files -->
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
 <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js" data-cfasync="false"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="shadow-sm header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="ml-5 logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <div class="d-inline d-md-inline d-flex align-items-center">
            <h5 class="d-none d-lg-inline ml-5 text-black"><span><img style="height:35px;width:45px"  src="assets/img/danska.png"></span>Danska Property Services</h5>
            <h6 class="d-inline d-lg-none ml-5 text-black"><span><img style="height:35px;width:45px"  src="assets/img/danska.png"></span>Danska PropertyServices</h6>
        </div>
    <!--    <div class="d-inline d-md-none">
            <h3 class="text-black">Danska Property Services&nbsp<span><img style="height:20px;width:20px"  src="assets/img/flag.png"></span></h3>
        </div> -->
      </a>

      <nav id="navbar" class="navbar px-3">
        <ul>
            <li><a class="{{!Request::segment(1) ? 'active' : '' }}"href="{{route('home')}}">Home</a></li>
            <li><a class="{{Request::segment(1) == "about" ? 'active' : '' }}" href="{{route('about')}}">About</a></li>
            <li><a class="{{Request::segment(1) == "news" ? 'active' : '' }}" href="{{route('news')}}">News</a></li>
            <li class="dropdown"><a href="#"><span>Our services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                <li class="dropdown"><a href=""><span>Social Housing</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="{{route('social-housing')}}">Property Managers</a></li>
                    <li><a href="{{route('student')}}">Student Accomodation</a></li>
                    <li><a href="{{route('careHomes')}}">Care Homes</a></li>
                    </ul>
                </li>
                <li><a href="{{route('privateLandlord')}}">Private Landlords</a></li>
                <li><a href="{{route('social-housing')}}">Public Buildings</a></li>
                <li class="dropdown"><a href="#"><span>Leisure Sector</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="{{route('pubs')}}">Pubs & Restaurants</a></li>
                    <li><a href="{{route('hotels')}}">Hotels</a></li>
                    <li><a href="{{route('gyms')}}">Gyms & Sorts Facilities</a></li>
                    </ul>
                </ul>
            </li>
            <li><a class="{{Request::segment(1) == "contact" ? 'active' : '' }}" href="{{route('contact')}}">Contact</a></li>
            <li><a class="{{Request::segment(1) == "support" ? 'active' : '' }}" href="{{route('support')}}">Support</a></li>

            <div class="d-flex justify-content-center">
            <a class="d-inline btn-book-a-table" href="{{route('contractor')}}">Contractor Login</a>
            <a class="d-inline btn-book-a-table" href="{{route('client')}}">Client Login</a>
            </div>
        </ul>
      </nav><!-- .navbar -->



      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->




  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-4 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>Genesis Centre,
                Innovation Way,<br>
                Stoke-on-Trent,
                Staffordshire<br>
                ST6 4BF.

              <br>
            </p>
          </div>

        </div>

        <div class="col-lg-4 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> 08431226483<br>
              <strong>Email:</strong> enquiries@danska-property.co.uk<br>
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Fri: 9AM</strong> - 5PM<br>
              Saturday & Sunday: Closed
            </p>
          </div>
        </div>
<!--
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          </div>
        </div>
    -->
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Danska Holdings</span></strong>. Company no. 13486764 <div>All Rights Reserved</div>
      </div>

    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
