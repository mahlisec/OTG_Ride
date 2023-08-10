@extends('Frontend.layouts.main')
@section('title', 'Getstarted-OTG Ride')
@section('main-container')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{url('Frontend/img/about-header.jpg')}});">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Get started</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Get Started</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">

            <h1>Getting Started - A Quick start Guide is here:</h1>
            <br>

  <details>
    <summary>How to Create an Account to Access Features: </summary> <br>
    <p>Creating an account on our platform gives you access to a range of features: </p>
        <ul>
            <li>Sign Up: Click the "Sign Up" button on the homepage. Provide your email, phone number, and a secure password.</li>
            <li>Verify Your Account: We'll send you a verification code to your email or phone. Enter the code to verify your account.</li>
            <li>Complete Your Profile: Fill in your personal information, including your name and profile picture. This helps drivers recognize you.</li>
       </ul>
  </details>
  <br>
  <details>
    <summary>How to Use This Website: </summary> <br>
    <p>Our website is designed to be user-friendly and intuitive. Here are some quick tips to navigate and use our features:</p>
        <ul>
            <li>Homepage: The homepage displays ride options and key features. Use the navigation menu to explore different sections like rides, drivers, account settings, and more.</li>
            <li>Account Dashboard: Once logged in, you'll have access to your account dashboard. Here, you can manage your profile, view ride history, and make changes to your settings.</li>
            <li>Safety Measures: Learn about the safety measures we've implemented to ensure a secure ride for all passengers.</li>
       </ul>
  </details>
<br>
<details>
    <summary>How to Book a Ride: </summary> <br>
    <p>Booking a ride with us is easy and hassle-free. Follow these steps:</p>
        <ul>
            <li>Sign In or Create an Account: Before booking a ride, make sure you have an account. If you're a new user, you can create an account by clicking the "Sign Up" button and providing your details.</li>
            <li>Search for Rides: Use the search bar on our homepage to enter your pickup and drop-off locations. You'll see available ride options, including estimated prices and ride types.</li>
            <li>Choose Your Ride: Browse through the available ride options and select the one that suits your needs – whether it's a standard sedan, a luxury car, or a shared ride.</li>
            <li>Confirm and Pay: Once you've selected your ride, review the details and confirm your booking. You can choose your payment method, and we'll provide you with a fare estimate.</li>
            <li>Ride Arrival: Track your ride's arrival on the map in real-time. You'll receive notifications when your driver is nearby.</li>
       </ul>
  </details>
  <br>
  <details>
    <summary>Safety Measures Our Company Takes: </summary> <br>
    <p>Your safety is our top priority. We've implemented various safety measures to ensure a secure ride experience:</p>
        <ul>
            <li>Driver Verification: All drivers undergo a thorough background check and verification process.</li>
            <li>Vehicle Inspection: Our vehicles undergo regular maintenance and safety inspections.</li>
            <li>Emergency Support: In case of emergencies, our app provides easy access to emergency contacts and services.</li>
       </ul>
  </details>
  <br>
  <details>
    <summary>Raise a Complaint: </summary> <br>
    <p>We're committed to providing the best service possible. If you encounter any issues, have questions, or want to provide feedback, follow these steps:</p>
        <ul>
            <li>Contact Support: Visit the "Contact Us" section on our website to get in touch with our customer support team. You can fill out a form with your concerns, and we'll respond promptly.</li>
       </ul>
  </details>
  <br>
  <details>
    <summary>See Also: <a href="{{url('/vision')}}">Blogs</a> </summary> <br>
    <p>Check out our blog section for informative articles related to ride-sharing, travel tips, city guides, and more. Stay updated and informed about the latest trends in transportation and urban mobility.</p>
  </details>

          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Get Started: How to Use Our Ride-Sharing Service</h3>
              <p>
                Welcome to our ride-sharing platform! We're here to provide you with a seamless and convenient experience for booking rides and getting around town. Here's how you can make the most of our website:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> How to Create an Account to Access Features</li>
                <li><i class="bi bi-check-circle-fill"></i> How to Use This Website</li>
                <li><i class="bi bi-check-circle-fill"></i> How to Book a Ride</li>
                <li><i class="bi bi-check-circle-fill"></i> Safety Measures Our Company Takes</li>
                <li><i class="bi bi-check-circle-fill"></i> How to Raise a Complaint</li>
                <li><i class="bi bi-check-circle-fill"></i> See Also: <a href="{{url('/vision')}}">Blogs</a> </li>
              </ul>
              <br>
              <h3>Our Vision</h3>
              <p>At <strong style="color: #007BFF">OTG Ride</strong>, our vision is to redefine the way people experience transportation. We strive to create a seamless, convenient, and personalized journey for every passenger, putting their comfort and safety at the forefront. With cutting-edge technology, a commitment to professionalism, and a dedication to innovation, we aim to become the premier choice for modern travel solutions. Our vision is to empower travellers with the freedom to choose their travel experience, be it for work or leisure, while fostering a strong sense of trust and reliability in every ride. Through our unwavering dedication to excellence, we envision a future where <strong style="color: #007BFF">OTG Ride</strong> transforms commuting into a truly enjoyable and stress-free adventure.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



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



    </main><!-- End #main -->
  @endsection
