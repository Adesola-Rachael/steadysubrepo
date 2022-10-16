@extends('frontend.layouts.app')
@section('title', 'SteadySub | Home')

  <!-- ======= Header ======= -->
  
@section('pageContent') 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>OFFERING THE CHEAPEST TELECOM SERVICES</h1>
          <h2>Airtime Top-up, Data Subscription, Cable TV and more...</h2>
          <div>
            <a href="/register" class="btn-get-started scrollto">Get Started</a>
             <a href="/login" class="btn-get-started scrollto">Login</a>
            
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('frontend/img/growth/images/gettingstarted.png')}}" class="img-fluid animated rounded" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
          <!-- <img src="{{asset('frontend/img/about-img.svg')}}" class="img-fluid" alt="" data-aos="zoom-in"> -->
            <img src="{{asset('frontend/img/growth/images/1.jpg')}}" class="img-fluid rounded" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">WHY CHOOSE US?</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Making payments shouldn't be one of the hard ways to get your
              services done. STEADYSUB is a secure, and most dependable platform
              in Nigeria created by our Founder/CEO Patience Oluwarotimi Animola
              to help you make easy payments for services you enjoy most from the
              cool area of your homes and offices...<br> <br>
              <a href='/about' style='background:#EC4D37'class='btn btn-danger btn-sm'>Read More</a>

            </p>
            <div class="row">
              <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>OUR GOAL</h4>
                <p> Our major aim is to provide affordable and legit
                  services (Data, Cable subscription, Airtime e.t.c) for our
                  partners at large In assurance to give you the best
                  treat, all our services and transactions are running on
                  an automated system.</p>
              </div>
             
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>OUR SERVICES</h2>
          <p>Check out the great services we offer</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Payment Of Bills</a></h4>
              <p class="description">Pay all form of electricity bills across Nigeria </p>
            </div>
          </div>
          


          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Airtime And Data <br> Subscription</a></h4>
              <p class="description">MTN, AIRTEL, GLO, 9MOBILE affordable data <br>plans</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Cable Subscription</a></h4>
              <p class="description">We get you covered for all Cable Subscriptions</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

   

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">



      <div class="section-title">
          <!--<h2>Contact Us</h2>-->
          <p>Pricing</p>
        </div>
      {{-- Here are the list of the services that will be provided in regards to all networks. --}}
    </div>
    <section id="team" class="team">
      <div class="container">


        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <div class='section-title'>
                  <img src="{{asset('frontend/img/mtn.png')}}" class="rounded mx-auto d-block"
                    style='height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px' />
                  <div class='mx-auto d-block text-center'>MTN DATA PLANS</div>
                </div>
                {{-- <h2>$29</h2> --}}
                <table class="table table-striped">
                <tbody>
                    @foreach($mtn as $data)
                    <tr>
                      <td>{{ $data->name }}</td>
                      <td><b>₦{{ $data->set_price }}</b></td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
                <div class="table_btn"> <a href="/buydata" class="btn btn-success mx-auto d-block"
                    style='background:#EC4D37'><i class="bi bi-cart"></i>Purchase</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                  <br>
                <div class='section-title'>
                  <img src="{{asset('frontend/img/glo.png')}}" class="rounded mx-auto d-block"
                    style='height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px' />
                  <div class='mx-auto d-block text-center'>GLO DATA PLANS</div>
                </div>
                {{-- <img src="{{asset('frontend/img/glo.png')}}" class="rounded mx-auto d-block" style='height:100px;width:100px' />
                --}}

                {{-- <h2>$29</h2> --}}
                <table class="table table-striped">
                <tbody>
                    @foreach($glo as $data)
                    <tr>
                      <td>{{ $data->name }}</td>
                      <td><b>₦{{ $data->set_price }}</b></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="table_btn"> <a href="/buydata" class="btn btn-success mx-auto d-block"
                    style='background:#EC4D37'><i class="bi bi-cart"></i>Purchase</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                  <br>
                <div class='section-title'>
                  <img src="{{asset('frontend/img/airtel.png')}}" class="rounded mx-auto d-block"
                    style='height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px' />
                  <div class='mx-auto d-block text-center'>AIRTEL DATA PLANS</div>
                </div>
                {{-- <h2>$29</h2> --}}
                {{-- <img src="{{asset('frontend/img/airtel.png')}}" class="rounded mx-auto d-block"
                  style='height:100px;width:200px' /> --}}

                <table class="table table-striped">
                <tbody>
                    @foreach($airtel as $data)
                    <tr>
                      <td>{{ $data->name }}</td>
                      <td><b>₦{{ $data->set_price }}</b></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="table_btn"> <a href="/buydata" class="btn btn-success mx-auto d-block"
                    style='background:#EC4D37'><i class="bi bi-cart"></i>Purchase</a></div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                  <br>
                <div class='section-title'>
                  <img src="{{asset('frontend/img/9mobile.png')}}" class="rounded mx-auto d-block"
                    style='height:50px;width:50px;padding:5px;border:2px solid #EC4D37;border-radius:2px' />
                  <div class='mx-auto d-block text-center'>9MOBILE DATA PLANS</div>
                </div>
                {{-- <img src="{{asset('frontend/img/9mobile.png')}}" class="rounded mx-auto d-block"
                  style='height:100px;width:100px' /> --}}

                {{-- <h2>$29</h2> --}}
                <table class="table table-striped">
                <tbody>
                    @foreach($nmobile as $data)
                    <tr>
                      <td>{{ $data->name }}</td>
                      <td><b>₦{{ $data->set_price }}</b></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="table_btn"> <a href="/buydata" class="btn btn-success mx-auto d-block"
                    style='background:#EC4D37'><i class="bi bi-cart"></i>Purchase</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us to get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4 class=;te>Location:</h4>
                <p>Federal University Oye-Ekiti, Ekiti State.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4 class=;te>Email:</h4>
                <p>steadysub247@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+234 906 512 7916</p>
                <p>+234 903 024 1190</p>
                <p>+234 814 235 2227</p>

              </div>
              <iframe
                src="https://maps.google.com/maps?q=Federal%20University%20of%20Oye%20okiti&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form id='contact_form' class="php-email-form">@csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" id='message' name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                {{-- <div class="loading">Loading</div>
                <div class="error-message"></div> --}}
                <div id='success_message' class='alert alert-success' style='display:none'>Your message has been
                  sent. Thank you!</div>
                  <div id='error_message' class='alert alert-danger' style='display:none'>Message not sent!</div>
              </div>
              <div class="text-center"><button id='msg_btn' type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
  @endsection

  @push('custom-scripts')
  <script src='cdn/sweetalert.min.js'></script>
  <script>
    $(document).ready(function() {
 $("#contact_form").on('submit',async function(e) {
   e.preventDefault()
  $("#msg_btn").attr('disabled',true)
   var fd = new FormData;
   fd.append('name',$("#name").val())
   fd.append('email',$("#email").val())
   fd.append('subject',$("#subject").val())
   fd.append('message',$("#message").val())
   $.ajax({
     type: "POST",
     url : "{{ route('contact_form') }}",
     cache: false,
     contentType: false,
     processData: false,
     headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
     data : fd,
     success: function(data) {
      console.log(data)
      $("#success_message").show();
    
      Swal.fire("Message sent!",'Message sent successfully','success')
    },
    error: function(data) {
      console.log(data)
      $("#error_message").show();
   
      Swal.fire("Message not sent!",'Opps, something went wrong','error')
     }
   })
  
 })
})
  </script>
  @endpush

  <!-- ======= Footer ======= -->
  
</body>

</html>