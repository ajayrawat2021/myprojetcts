@section('header')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Welcome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{!! asset('../front/assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('../front/assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">
  <link href="{!! asset('../front/assets/vendor/boxicons/css/boxicons.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('../front/assets/vendor/glightbox/css/glightbox.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('../front/assets/vendor/remixicon/remixicon.css') !!}" rel="stylesheet">
  <link href="{!! asset('../front/assets/vendor/swiper/swiper-bundle.min.css') !!}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{!! asset('../front/assets/css/style.css') !!}" rel="stylesheet">

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/">Easy Notes</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li class="dropdown"><a href="#"><span>Notes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/docker">Docker</a></li>
              <li><a href="/elastic">Elasticsearch</a></li>
              <li><a href="#">Kibana</a></li>
              <li><a href="#">CI/CD</a></li>
              <li><a href="#">Ubuntu Commands</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/admin-login">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  @endsection