@extends('layouts.app', ['title' => 'Home'])
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Property management for<br>owners and property managers</h2>
          <p data-aos="fade-up" data-aos-delay="100">Our ojective is to enable property owners and property managers the abilty to deliver repairs seamlessly.
            Hire vetted tradesman, monitor and track repairs at the click of a button.
          Enabling you to reduce repair costs and saving you time to manage your property portfollio.</p>

            <p data-aos="fade-up" data-aos-delay="100">Stay compliant with relevant regulatory and legislative laws. We can insure that you never miss a statutory safety check because you can schedule in all checks that are needed weeks, months, even years in advance.</p>
        <div class="" data-aos="fade-up" data-aos-delay="200">
            <a style="margin-left:0" href="{{route('demo')}}" class="mt-lg-5 btn-book-a-table">Book a Demo</a>
        </div>
        </div>
        <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start">
            <img src="assets/img/mac.png" class="d-none d-lg-block img-fluid" alt="Mac Book" data-aos="zoom-out" data-aos-delay="300">
            <img src="assets/img/homepage1.png" class="img-fluid" alt="Dashboard" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
  <div class="container mb-5">
        <div class="holder">
          <div class="subsection-header mt-5"><h2 class="text-center text-lg-start">We have solutions for every property type<span>.</span></h2></div>

          <div class="mt-5 row row-cols-2 row-cols-lg-3 gy-4">

              <div class="col benefit-item d-flex items-center">

                <img style="height:50px;width:50px" alt="social housing" src="assets/img/social_housing.webp">

                <div class="copy">

                  <a href="{{route('social-housing')}}">

                  <div class="text-black"><b>Social Housing</b><br>Maintain your portfolio to industry standard and keep residents happy</div>
                </a>
                </div>

              </div>



              <div class="col benefit-item d-flex items-center">

                <img style="height:50px;width:50px" alt="Private Housing" src="assets/img/private.webp">

                <div class="copy">

                  <a href="{{route('privateLandlord')}}">

                  <div class="text-black"><b>Private Rental Sector</b><br>Better manage tenant requests to improve the speed and service of repairs and maintenance</div>
                </a>
                </div>

              </div>



              <div class="col benefit-item d-flex items-center">

                <img style="height:50px;width:50px" alt="Public buildinga" src="assets/img/public.webp">

                <div class="copy">



                  <a href="{{route('social-housing')}}">

                  <div class="text-black"><b>Public Buildings</b><br>The all-in-one solution to maintaining local buildings using local contractors</div>
                </a>
                </div>

              </div>



              <div class="col benefit-item d-flex items-center">

                <img style="height:50px;width:50px" alt="Hotels" src="assets/img/hotels.webp">

                <div class="copy">



                  <a href="{{route('hotels')}}">

                  <div class="text-black"><b>Hotels</b><br>Find qualified contractors for every hotel location to ensure the buildings and their facilities are maintained to the highest standards</div>
                </a>
                </div>

              </div>



              <div class="col benefit-item d-flex items-center">

                <img style="height:50px;width:50px" alt="Pubs" src="assets/img/pubs.webp">

                <div class="copy">



                  <a href="{{route('pubs')}}">

                  <div class="text-black"><b>Pubs &amp; Restaurants</b><br>Avoid downtime and <br> keep assets running</div>
                </a>
                </div>

              </div>



              <div class="col benefit-item d-flex items-center">

                <img style="height:50px;width:50px" alt="Education" src="assets/img/education.webp">

                <div class="copy">



                  <a href="{{route('social-housing')}}">

                  <div class="text-black"><b>Education</b><br>A digital solution that can be tailored to maintaining your facilities amongst hectic schedules</div>
                </a>
                </div>

              </div>

          </div>

        </div>
  </div>

  <section id="testimonials" class="testimonials section-bg">
    <div style="height:340px" class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Testimonials</h2>
        <p>What Are They <span>Saying About Us</span></p>
      </div>

      <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      I have been using Danska propery services for Three months. It is so easy to report and track a reapir
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Jonathan Simpson</h3>
                    <h4>Private Landlord</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                       Could not fault the service from beginning to end.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Sue clark</h3>
                    <h4>Care Home Manager</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Excellent service. Repair was completed in just a few days.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Lisa Smith</h3>
                    <h4>Property Manager</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      We had an urgent repair, submitted the request. The tradesman was there sameday. Thankyou!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
              <!--  <div class="col-lg-2 text-center">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                </div> -->
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Fantastic!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Salim Sheralli</h3>
                    <h4>Hotel Manager</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
  <section id="stats-counter" class="stats-counter ">
    <div class="container" data-aos="zoom-out">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="1021" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-4 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="132" data-purecounter-duration="1" class="purecounter"></span>
            <p>Contractors on call</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-4 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="353" data-purecounter-duration="1" class="purecounter"></span>
            <p>Number of jobs resolved</p>
          </div>
        </div><!-- End Stats Item -->
      </div>

    </div>
  </section><!-- End Stats Counter Section -->
  <script>
window.addEventListener('load', function(){
 function   myScripts()
{

   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-00000000-1', 'auto');
      ga('send', 'pageview');


   // Facebook Pixel Code, you need to change '000000000000000' to your PixelID
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '000000000000000');
      fbq('track', 'PageView');
}
  window.cookieconsent.initialise({
   revokeBtn: "<div class='cc-revoke'></div>",
   type: "opt-in",
   theme: "classic",
   palette: {
       popup: {
           background: "#346",
           text: "#ddf"
        },
       button: {
           background: "#f16",
           text: "#fff"
        }
    },
   content: {
       link: "Cookie notice",
       href: "https://2gdpr.com/cookies"
    },
    onInitialise: function(status) {
      if(status == cookieconsent.status.allow) myScripts();
    },
    onStatusChange: function(status) {
      if (this.hasConsented()) myScripts();
    }
  })
});

    </script>
