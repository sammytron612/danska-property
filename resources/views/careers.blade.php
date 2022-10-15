@extends('layouts.app', ['title' => 'Careers'])
<div style="margin-top:150px;" class="container">
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
            @endif
    <div class="section-header">
        <h2>Careers</h2>
        <p>We're<span> Hiring</span></p>
    </div>
    <h6 class="display-6 text-center">We are currently hiring for Customer Service Agents and Sales Lead Generators. </h6>
    <div id="carbon" class="row row-cols-1 row-cols-lg-2">
        <div class="col order-2 order-lg-1">

            <h5 class="mt-3 text-left">Customer service agents.</h5>
            <p class="mt-3">Do you have a passion for delivering excellent service?

                Are you looking to get into your first office role?

                I are a fantastic growing company, looking for someone with equally fantastic customer service skills to join their forward-thinking and supportive team.

                This company is offering a great opportunity to someone looking to gain valuable customer service and sales experience in an office-based environment.


                Responsibilities
            </p>
            <ul>
                <li>Answering calls promptly and by our Service Level Agreements..</li>
                <li>Contacting and dealing with customers via telephone and email updating details on our property maintenance system whilst providing excellent customer service..</li>
                <li>Production of customer, affinity and care to a high standard..</li>
                <li>Collating and posting of documents where required..</li>
                <li>Maintaining a consistent and energetic approach and building rapport with external clienta and contractors to establish good relations..</li>
                <li>Where applicable, to adhere to Company processes and Treating Clients and Contractors Fairly..</li>
            </ul>
        <p class="font-weight-bold"><b>Salary £20000 pa.</b></p>

        </div>
        <div class="col order-1 order-lg-2">
            <img class="img-fluid rounded" alt="Maintenance" src="/assets/img/hiring.jpg" data-aos="fade-left">
        </div>

        <div class="col order-3 order-lg-3 mt-5">
            <img class="img-fluid rounded" alt="Maintenance" src="/assets/img/telesales1.jpg" data-aos="fade-right">
        </div>

        <div class="col order-4">

            <h5 class="mt-3 text-left">Telesales and lead generation.</h5>
            <p class="mt-3">

                Sat within our flourishing Sales department, the Sales Lead Generator will play a pivotal role in generating new business through outbound calling to create interest in our amazing, property service. The Sales Lead Generator will be responsible for building their own Lead Generation pipeline from our data asset.

                You will take advantage of our full sales training, through the continued support of a dedicated learning and development team, to help you to be the best you could ever be.
            </p>
            <ul>
                <li>Self-motivated with the drive to create a sense of ownership on all sales calls..</li>
                <li>Persistent and, determined and confident while not being afraid to ask for business..</li>
                <li>Good understanding of business process and structures..</li>
                <li>Sales experience is an advantage, but full training will be given so not essential. You could have worked in any of the following: B2B sales, B2C sales, outbound sales, lead generation, telesales, account management, business development.</li>
            </ul>

            <p class="font-weight-bold"><b>Salary £25000 pa.</b></p>

        </div>


    </div>

    <div class="contact" data-aos="fade-up">
        <form action="{{route('postMessage')}}" method="post" role="form" class="php-email-form p-3 p-md-4">
            @csrf
            <input type="hidden" name="type" value="job" />
            <div class="row">
              <div class="col-xl-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-xl-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="col-xl-6 form-group custom-file-button d-flex">
                <label class="input-group-text" for="inputGroupFile"> CV </label>
                <input type="file" class="form-control" id="inputGroupFile">
              </div>
              <div class="col-xl-6 form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number" required>
              </div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Additional Information"></textarea>
            </div>

            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
    </div>
</div>
