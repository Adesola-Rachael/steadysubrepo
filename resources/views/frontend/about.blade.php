@extends('frontend.layouts.app')
@section('title', 'Veenode')

  <!-- ======= Header ======= -->
  
@section('pageContent')  
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="/">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="{{asset('frontend/img/growth/images/laptop.jpg')}}" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up" class="aos-init aos-animate">ABOUT US</h3>
            <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              We Provide Easy Services With Easy Access
              Making payments shouldn't be one of the hard ways to get your services done. STEADYSUB is a secure, and most dependable platform in Nigeria created by our Founder/CEO Patience Oluwarotimi Animola to help you make easy payments for services you enjoy most from the cool area of your homes and offices. The experience of total convenience, fast service delivery, and easy payment is just at your fingertips
              <br><br>Our major aim is to provide affordable and legit services (Data, Cable subscription, Airtime e.t.c) for our partners at large In assurance to give you the best treat, all our services and transactions are running on an automated system. Without any delay, you can instantly get your payments done. 
              <br><br>
             </p>

            
            {{-- <div class="row">
              <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
               <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
               <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div> --}}
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @endsection

</body>

</html>