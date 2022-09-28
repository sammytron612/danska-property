@extends('layouts.app')
<section id="contact" class="contact mt-5">
    <div class="container " data-aos="fade-up">

      <div class="section-header">
        <h2>Demo</h2>
        <p>Interested? <span>Book a Demo</span></p>
      </div>
      @if(session()->has('message'))
      <div class="alert alert-success" role="alert">
          Your enquiry has been received, we will be in touch shortly!
      </div>
      @endif
      <div class="row">
        <div class="col-6 text-center">
            <img src="assets/img/homepage.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>



        <div class="col-6">
        <form action="{{route('postMessage')}}" method="post" role="form" class="php-email-form p-3 p-md-4">
            @csrf
            <input type="hidden" name="type" value="demo" />
            <div class="row">
            <div class="col-xl-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-xl-6 form-group">
                <input type="text" name="company" class="form-control" id="company" placeholder="Company" required>
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
        </div>
    </div>

    </div>
  </section><!-- End Contact Section -->
