<?php
error_reporting(0);
    session_start();
    include('includes/dbconnection.php');

        $query = mysqli_query($con,"select * from noticeboard");
        $count = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);

    
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Information System</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="shortcut icon" href="assets/img/ronk1.jpg" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style22.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.0.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="index.php"><img src="uploads/mnhs.png" style="width:80px;height:80px; margin-top: -20px; margin-left: -118px; border-radius: 25px;"></a>
      <h1 class="logo mr-auto" style="font-family: monospace; margin-top: -20px; margin-left: -30px; font-size: 35px; color: #2ed573;"><a href="index.php">Home</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          

          <!-- <li class="drop-down" style="font-family: monospace; font-size: 30px;"><a href="dontDeleteMe.php">Login</i></a>
          </li> -->

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#" class="get-started-btn">Alumni</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center" style="background-image: url('uploads/school.jpg');">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Vission</h2><!-- Log on to codeastro.com for more projects! -->
          <p>THE DEPED VISION</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="uploads/foot.jpg" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
                  We dream of Filipinos
                  who passionately love their country
                  and whose values and competencies
                  enable them to realize their full potential
                  and contribute meaningfully to building the nation.

                  As a learner-centered public institution,
                  the Department of Education
                  continuously improves itself
                  to better serve its stakeholders.
            </p>
          </div>
        </div>

        <div class="section-title">
          <h2>Mission</h2><!-- Log on to codeastro.com for more projects! -->
          <p>THE DEPED MISSION</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="uploads/pic1.png" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
              To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:

              Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.
              Teachers facilitate learning and constantly nurture every learner.
              Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.
              Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    
          </div>
        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Muntinlupa National High School</h3>
            <p>
               Poblacion, Muntinlupa,<br>
              1776 Metro Manila<br><br>
            </p>
          </div>
          
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; <strong><span>Student Information System</span></strong>
        </div>
        <div class="credits">
        </div>
      </div>
    </div>
  </footer>

  <a href="index.php" class="back-to-top" style="font-weight: 700; background-color: #fff; color: black; padding: 4px; border-radius: 14px;">CLICK THE LOGO TO RETURN TO LOGIN PAGE!</i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>