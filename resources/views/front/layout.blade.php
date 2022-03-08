@yield('header')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Easy To Start </h1>
      <h2>Good things come to people who wait, but better things come to those who go out and get them.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

 

    @yield('maincontent')

   

  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{!! asset('../front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('../front/assets/vendor/glightbox/js/glightbox.min.js') !!}"></script>
  <script src="{!! asset('../front/assets/vendor/isotope-layout/isotope.pkgd.min.js') !!}"></script>
  <script src="{!! asset('../front/assets/vendor/swiper/swiper-bundle.min.js') !!}"></script>
  <script src="{!! asset('../front/assets/vendor/php-email-form/validate.js') !!}"></script>

  <!-- Template Main JS File -->
  <script src="{!! asset('../front/assets/js/main.js') !!}"></script>

</body>

</html>