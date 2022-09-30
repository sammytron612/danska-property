@extends('layouts.app', ['title' => 'Contractor Login'])
<section  x-data="page()" id="contractor" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header mt-5">
        <h3>Contractor login</h3>
      </div>

      <div class="row">

        <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/contractor.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

        <div class="col-lg-8 reservation-form-bg">
            <div x-cloak x-show="errors" class="row mt-5">
                <div class="text-center text-danger">Those details are incorrect</div>
            </div>
          <form action="" method="post" role="form" class="php-email-form w-100" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="row">
              <div class="form-group">
                <input type="email" class="w-100 form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="row">
                <div class="form-group mt-5">
                  <input type="text" class="w-100 form-control" name="acc" id="acc" placeholder="Your Account Number" required>
                </div>
            </div>
            <div class="row">
              <div class="form-group mt-5">
                <input type="password" class="w-100 form-control" name="password" id="password" placeholder="Password" required>
              </div>
            </div>
            <div class="text-center mt-5"><button x-show="button" x-on:click="login" class="btn-book-a-table px-5" type="button">Login</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script>
    function page()
    {
        const delay = t => new Promise(resolve => setTimeout(resolve, t));
        return {
            errors: false,
            button: true,

            login(){

                this.errors = false
                this.button = false

                delay(1000).then(() => {
                            this.errors = true
                            this.button = true
                        });

            },

        }
    }
</script>
