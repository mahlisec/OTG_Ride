@extends('Frontend.layouts.main')
@section('title', 'About-OTG Ride')
@section('main-container')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{url('Frontend/img/about-header.jpg')}});">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
            <div class="col-lg-4">
              <img src="{{url('Frontend/img/about.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8">
              <div class="content ps-lg-5">
                <h3>Seamless, Innovative Travel Partner</h3>
                <p>
                  Your seamless travel partner, combining innovation, personalized options, and trust. Elevating journeys through modern technology, professionalism, and commitment to excellence.Our foundation rests on three pillars:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Innovation: We're at the forefront of technological advancements in the transportation industry. Our user-friendly app allows you to book rides, track progress, and manage your preferences with ease.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Personalization: Your journey is yours alone, and we understand that. That's why we offer a range of vehicle options to suit your style and needs</li>
                  <li><i class="bi bi-check-circle-fill"></i> rust: Your safety and satisfaction are paramount to us. Our drivers are rigorously trained, and our vehicles undergo regular inspections to ensure your journey is not only comfortable but secure.</li>
                </ul>
              </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url({{url('Frontend/img/why-us-bg.jpg')}})"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="item">
                      <h3 class="mb-3">Reliable and Swift Service</h3>
                      <h4 class="mb-3">Dependable, timely transportation ensuring you reach your destination promptly and with utmost assurance.</h4>
                      <p>At OTG Ride, we prioritize your time and ensure prompt transportation solutions that you can rely on, helping you reach your destination swiftly and hassle-free.</p>
                    </div>
                  </div><!-- End slide item -->

                  <div class="swiper-slide">
                    <div class="item">
                      <h3 class="mb-3">Customized Travel Options</h3>
                      <h4 class="mb-3">Tailor your journey to match preferences, providing personalized travel choices for a truly bespoke experience.</h4>
                      <p>Choose from an array of tailored travel options to match your preferences and needs, granting you the freedom to travel comfortably and conveniently, your way.</p>
                    </div>
                  </div><!-- End slide item -->

                  <div class="swiper-slide">
                    <div class="item">
                      <h3 class="mb-3">Professional and Courteous Drivers</h3>
                      <h4 class="mb-3">Skilled drivers ensuring safety and delivering friendly, respectful service for a comfortable and pleasant ride.</h4>
                      <p>Our team of experienced drivers not only ensures your safety on the road but also provides a courteous and friendly experience, making your journey with us pleasant from start to finish.</p>
                    </div>
                  </div><!-- End slide item -->

                  <div class="swiper-slide">
                    <div class="item">
                      <h3 class="mb-3">Cutting-edge Technology</h3>
                      <h4 class="mb-3">Incorporating latest advancements for seamless booking, real-time tracking, secure payments, and modern travel convenience.</h4>
                      <p>We leverage the latest in transportation technology to streamline your experience – from easy booking and real-time tracking to secure payments – delivering a modern and efficient approach to getting you where you need to go.</p>
                    </div>
                  </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Your Hassle-Free Journey Awaits</h3>
            <p>Book a ride with us for a seamless travel experience. Say goodbye to commuting stress!</p>
            <a class="cta-btn" href="{{url('/booking')}}">Book a Ride</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Happy Customers</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{url('Frontend/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sneha Patel</h4>
                <span>OTG Ride has transformed my daily commute. Their prompt service and courteous drivers make every journey comfortable. A reliable companion for hassle-free travel!</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{url('Frontend/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Arjun Mehta</h4>
                <span>Choosing OTG Ride was a game-changer. Their cutting-edge technology ensures my trips are seamless. No more worries about traffic or parking – just pure convenience at my fingertips!</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{url('Frontend/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ananya Gupta</h4>
                <span>OTG Ride, where luxury meets efficiency. Their prompt service, plush interiors, and courteous staff redefine what travel should be. A definite choice for discerning travelers.</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{url('Frontend/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Vikram Malhotra</h4>
                <span>Impressed by OTG Ride's personalized options. From solo trips to group outings, they've got it covered. Their tech-savvy approach and smooth rides make them my top choice.</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
@endsection
