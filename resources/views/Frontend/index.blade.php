  @extends('Frontend.layouts.main')
  @section('title', 'OTG Ride - Come Ride With Us')
  @section('main-container')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4" style="margin-top: 50px">
          <h2 data-aos="fade-up"><span style="color: greenyellow">Ride </span> Together Save<span style="color:greenyellow;"> Together</span> </h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Welcome to your go-to resource for hassle-free travel experiences! Our ground-breaking platform links explorers like you with other travelers who are traveling in the same general direction. With <strong style="color: greenyellow">On the Go Ride</strong>, you can say goodbye to pricey solitary rides and crowded public transportation and start a journey that is not only economical but also enjoyable and social. </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{url('/getstarted')}}" class="btn-get-started">Get Started</a>
            <a href="{{url('Frontend/video/intro.mp4')}}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>

        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

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

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Features</h2>

        </div>

        <div class="row gy-5">

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                <div>
                  <h4 class="title">Local Guide Insights</h4>
                  <p class="description">Riders who are passionate about their city can provide local insights and recommendations to passengers, sharing hidden gems, cultural highlights, and lesser-known attractions during the ride.</p>
                </div>
              </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title">Customized Detours</h4>
              <p class="description">Riders can offer optional detours to scenic spots or landmarks of interest during the group outings, creating a personalized and memorable experience for passengers </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title">Pet-Friendly Adventures</h4>
              <p class="description">Riders who are pet lovers can offer pet-friendly rides, providing a comfortable and safe journey for passengers traveling with their furry companions.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title">Eco-Friendly Routes</h4>
              <p class="description">Environmentally-conscious riders can take passengers on eco-friendly routes, showcasing green spaces, community gardens, and sustainable initiatives throughout the city.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title">Convenience Stops</h4>
              <p class="description">Riders willing to make quick stops for essentials like coffee, pharmacy, or convenience stores during the ride.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title">Special Celebrations</h4>
              <p class="description">Riders open to decorating the car or providing a small celebration setup for special occasions like birthdays or anniversaries.</p>
            </div>
          </div><!-- End Service Item -->


        </div>

      </div>
    </section><!-- End Our Services Section -->

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

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Powerful Features for <br>Your Ride</h3>

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-store-line" style="color: #ffbb2c;"></i>
                  <span>Ride Customization</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                  <span>Multi Stop Routes</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                  <span>Rider Prefrences</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                  <span>Real-Time Fare Estimation</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-database-2-line" style="color: #47aeff;"></i>
                  <span>Scheduled Rides</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                  <span>Surge Pricing Alerts</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                  <span>Accessibility Options</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-base-station-line" style="color: #ff5828;"></i>
                  <span>In-Website Chat & Support</span>
                </div>
              </div><!-- End Icon List Item-->
            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="{{url('Frontend/img/iphone.png')}}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row" style=" margin-top: -70px;">
            <div class="col-md-6">
              <h4>Coming Soon On<br>Play Store</h4>
              <p>Stay connected with us to catch the latest updates and exiting features coming to OTG Ride!</p>
              <a href="{{url('/getstarted')}}"><img height="70px" src="https://www.freepnglogos.com/uploads/play-store-logo-png/play-store-logo-nisi-filters-australia-11.png" alt="Download from Playstore"></a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>

        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{url('Frontend/img/blog/blog-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
              <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi qui magni est...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="{{url('Frontend/img/blog/blog-2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
              <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis doloribus...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="{{url('Frontend/img/blog/blog-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Quia assumenda est et veritati</h3>
              <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="{{url('Frontend/img/blog/blog-4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, Sep 16</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
              <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum quia eligendi...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->
@endsection
