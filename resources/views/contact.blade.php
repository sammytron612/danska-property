@extends('layouts.app')
<section id="contact" class="contact mt-5">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contact</h2>
        <p>Interested? <span>Contact Us</span></p>
      </div>

      <div class="mb-3">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4795.529764724685!2d-2.229886322576422!3d53.06053191741007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a42d3e6fee7d1%3A0x27f0feb3a42a599!2sStoke-on-Trent%20ST6%204BF!5e0!3m2!1sen!2suk!4v1664022068351!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="row gy-4">

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-map flex-shrink-0"></i>
            <div>
              <h3>Our Address</h3>
              <p>Genesis Centre,
                Innovation Way,<br>
                Stoke-on-Trent,
                Staffordshire ST6 4BF.</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <i class="icon bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>enquiries@danska-property.co.uk</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>08431226483</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-share flex-shrink-0"></i>
            <div>
              <h3>Opening Hours</h3>
              <div><strong>Mon-Fri:</strong> 9AM - 5PM;
                <strong>Saturday & Sunday:</strong> Closed
              </div>
            </div>
          </div>
        </div><!-- End Info Item -->

      </div>

      <form action="{{route('postMessage')}}" method="post" role="form" class="php-email-form p-3 p-md-4">
        @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            Your enquiry has been received, we will be in touch shortly!
        </div>
        @endif
        @csrf
        <input type="hidden" name="type" value="enquiry" />
        <div class="row">
          <div class="col-xl-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-xl-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
          <div class="col-xl-6 form-group">
            <input type="text" class="form-control" name="company" id="company" placeholder="Company">
          </div>
          <div class="col-xl-6 form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number" required>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
      <!--End Contact Form -->

    </div>
  </section><!-- End Contact Section -->
