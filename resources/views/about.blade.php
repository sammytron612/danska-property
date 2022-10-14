@extends('layouts.app', ['title' => 'About | We aim to empower landlords and property managers', 'description' => 'Here at Danska Property Services we aim to empower landlords and property managers with a platform to manage their properties.'])
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div style="margin-top:60px;" class="container">
      <div class="section-header">
        <h2>About Us</h2>
        <p>Learn More <span>About Us</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-7 order-2">
            <img class="d-none d-md-block img-fluid position-relative about-img" src="assets/img/workers2.jpeg" alt="Worker" data-aos="fade-up" data-aos-delay="150">
            <div>
                <div class="d-flex justify-content-evenly mt-2">
                    <img style="height:50px" class="mt-3" src="assets/img/laravel.png" data-aos="fade-up" alt="Laravel Logo" data-aos-delay="150">
                    <img style="height:50px" class="mt-3" src="assets/img/vue.png" data-aos="fade-up" alt="Vue Logo" data-aos-delay="150">
                </div>
                <div class="text-center">
                    <img style="height:50px" class="mt-3" src="assets/img/amazon.png" alt="AWS Logo" data-aos="fade-up" data-aos-delay="150">
                </div>
                <p class="mt-4">
                    Our cutting edge platform is built on PHP utilizing the Laravel framework and hosted securely on Amazon AWS.
                    We integrate with other key services including Stripe & Sendgrid to offer the latest in payment and notification services.
                    On the front end, you’ll find our engineering team using Vue JS with a custom design system based on Tailwind CSS.
                    <p>We also have Android and IOS apps in the development pipeline, making our platform and services even more accessible.</p>
                </p>
            </div>

        </div>
        <div class="col-lg-5 d-flex align-items-start order-1" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              We Have been a succesfull property development company in Denmark and the UK for over 30 years.
              Originally founded in Denmark in 1990 and behind some big name developments in both Denamark and the UK.
              <p>This year we are expanding into property management, offering clients a wide range of services.</p>
              We aim to empower landlords and property managers with a platform to manage their properties and a marketplace of local trade talent to deliver repairs and maintenance work. The result? Better services than ever before, delivered by a dynamic supply chain that creates opportunities in the communities our clients serve.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> Give you the tools to manage and track repairs.</li>
              <li><i class="bi bi-check2-all"></i> Clean reporting.</li>
              <li><i class="bi bi-check2-all"></i> Easy to use interface.</li>
            </ul>
            <p>
                We aim to take the stress out of repairs and maintenance, leaving you more time to actually manage your property portfolio.
            </p>

            <div class="position-relative mt-4">
              <img src="assets/img/worker1.png" alt="Worker" class="img-fluid" alt="">
              <!--<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>-->
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="why-box">
                <h3>Why us?</h3>
                <p>
                  We believe property repairs, maintenance & management can work better for everyone.

  We empower housing providers to lower costs and offer better tenant services than ever before.

  We help local trade professionals grow their businesses with exclusive contracts, faster payments and a platform to manage their workforce.

  We help communities flourish with better, safer homes and access to business opportunities.
                </p>
                <div class="text-center">
                  <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div><!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <!--<i class="bi bi-clipboard-data"></i>-->
                    <i class="fa-regular fa-heart"></i>
                    <h4>We're Human</h4>
                    <p>We listen to all our clients and contarctors. We’re open and honest in our drive to provide the best possible service for clients.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h4>We're Together</h4>
                    <p>We’re humble, we listen to and respect everyone. We challenge each other, with a contstant desire to improve.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-inboxes"></i>
                    <h4>We're client-centric</h4>
                    <p>We are focussed on delivering the best outcome for our customers and our contractors. We believe the impossible is possible, through dedication, focus and hard work by all.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>

          </div>

        </div>
      </section><!-- End Why Us Section -->

      <section id="chefs" class="chefs section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Meet The Team</h2>
            <p>Our <span>Management</span> Team</p>
          </div>

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="chef-member">
                <div class="member-img">
                  <img src="assets/img/management/alex.jpg" alt="CEO" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Alex Bastholm</h4>
                  <span style="color:black;font-weight: 600;">CEO</span>
                  <p>Alex has been a business man for over 40 Years. He has been the face behind some big property developments here in the UK and Denmark. Today his time is being put soley put into Danska Property services and building the brand.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="chef-member">
                <div class="member-img">
                  <img src="assets/img/management/marc.jpg" alt="Operations Manager" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Marc Bastholm</h4>
                  <span style="color:black;font-weight: 600;">Operations Manager</span>
                  <p>Marc is currently our operations manager and overseeing the day to day running of the business.
                    Ensuring we give the best possible customer service and satisfaction.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="chef-member">
                <div class="member-img">
                  <img src="assets/img/management/julie.webp" alt="Head of Sales" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Julie Anderson</h4>
                  <span style="color:black;font-weight: 600;">Head of Sales and Marketing</span>
                  <p>Julie has not been with us long but With over 10 Years experience in sales Julie is focusing on driving sales and building the Danska profile.</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>
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
