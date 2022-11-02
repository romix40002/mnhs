<?php
error_reporting(0);
    session_start();
    include('includes/dbconnection.php');
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
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style22.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <!-- <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="index.php"><img src="uploads/mnhs.png" style="width:80px;height:80px; border-radius: 25px;"></a>
      <h1 class="back-to-top" style="font-family: monospace; font-size: 35px; color: #2ed573;"><a href="index.php">About MNHS</a></h1>

      <nav class="nav-menu d-none d-lg-block"> -->
        <a class="navbar-brand" href="index.php"><img src="uploads/mnhs.png" style="width:80px;height:80px; margin-top: -20px; border-radius: 25px;"></a>
        <ul>
          

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center" style="background-image: url('uploads/school.jpg');">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100" style="background:rgba(0,0,0,0.5); padding: 19px; border-radius: 15px;">
      <h1 id="tots" style="color: limegreen;">GOOD DAY!</h1>
      <h1>ALL EVENTS AND ANNOUNCEMENTS ARE POSTED IN THIS PAGE.</h1>
    </div>
  </section>

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

<!-- STARTING SA EVENT 1 -->
        <div class="section-title">
          <h2>Latest Event</h2>
          <!-- TITLE -->
          <p>
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 0,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<h1 style="font-family: monospace; font-size: 40px; color: red; font-weight: 700;">'.$row['notice_title'].'</h1>'; 
            ?>
            </p>
            <p style="font-size: 17px;">
              <!-- PETSA -->
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 0,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                if ($row > 0){
                    
                  echo 'Announced on :' .'<h1 style="font-size: 19px; color: green;">'.$row['date_created'].'</h1>';
                }else{
                  echo "No Event yet. Stay tuned!";
                } 
              ?>
            </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 0,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo 'uploads/announcement/'.$row['notice_id'].'.jpg'; 
            ?>"
                style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <!-- DESCRIPTION NYA -->
            <p>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 0,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<p style="font-size: 20px; font-family: cursive;" align="justify">'.$row['notice'].'</p>'; 
                ?>
            </p>
          </div>
        </div> <!-- END SA 1st EVENT -->


        <div class="section-title">
          <hr><hr>
          <h2>Event</h2>
          <!-- TITLE -->
          <p>
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 1,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<h1 style="font-family: monospace; font-size: 40px; color: red; font-weight: 700;">'.$row['notice_title'].'</h1>'; 
            ?>
            </p>
            <!-- PETSA -->
            <p style="font-size: 17px;">
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 1,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                  if ($row > 0){
                    
                  echo 'Announced on :' .'<h1 style="font-size: 19px; color: green;">'.$row['date_created'].'</h1>';
                }else{
                  echo "No Event yet. Stay tuned!";
                }  
              ?>
            </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 1,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo 'uploads/announcement/'.$row['notice_id'].'.jpg'; 
            ?>" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <!-- DESCRIPTION -->
            <p>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 1,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<p style="font-size: 20px; font-family: cursive;" align="justify">'.$row['notice'].'</p>'; 
                ?>
            </p>
          </div>
        </div><!-- END SA 2nd EVENT -->

        <div class="section-title">
          <hr><hr>
          <h2>Event</h2>
          <!-- TITLE -->
          <p>
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 2,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<h1 style="font-family: monospace; font-size: 40px; color: red; font-weight: 700;">'.$row['notice_title'].'</h1>'; 
            ?>
            </p>
            <!-- PETSA -->
            <p style="font-size: 17px;">
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 2,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                if ($row > 0){
                    
                  echo 'Announced on :' .'<h1 style="font-size: 19px; color: green;">'.$row['date_created'].'</h1>';
                }else{
                  echo "No Event yet. Stay tuned!";
                } 
              ?>
            </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 2,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo 'uploads/announcement/'.$row['notice_id'].'.jpg'; 
            ?>" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <!-- DESCRIPTION -->
            <p>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 2,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<p style="font-size: 20px; font-family: cursive;" align="justify">'.$row['notice'].'</p>'; 
                ?>
            </p>
          </div>
        </div><!-- END SA 3rd EVENT -->

        <div class="section-title">
          <hr><hr>
          <h2>Event</h2>
          <!-- TITLE -->
          <p>
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 3,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<h1 style="font-family: monospace; font-size: 40px; color: red; font-weight: 700;">'.$row['notice_title'].'</h1>'; 
            ?>
            </p>
            <!-- PETSA -->
            <p style="font-size: 17px;">
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 3,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                if ($row > 0){
                    
                  echo 'Announced on :' .'<h1 style="font-size: 19px; color: green;">'.$row['date_created'].'</h1>';
                }else{
                  echo "No Event yet. Stay tuned!";
                } 
              ?>
            </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 3,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo 'uploads/announcement/'.$row['notice_id'].'.jpg'; 
            ?>" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <!-- DESCRIPTION -->
            <p>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 3,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<p style="font-size: 20px; font-family: cursive;" align="justify">'.$row['notice'].'</p>'; 
                ?>
            </p>
          </div>
        </div><!-- END SA 4th EVENT -->


        <div class="section-title">
          <hr><hr>
          <h2>Event</h2>
          <!-- TITLE -->
          <p>
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 4,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<h1 style="font-family: monospace; font-size: 40px; color: red; font-weight: 700;">'.$row['notice_title'].'</h1>'; 
            ?>
            </p>
            <!-- PETSA -->
            <p style="font-size: 17px;">
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 4,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                if ($row > 0){
                    
                  echo 'Announced on :' .'<h1 style="font-size: 19px; color: green;">'.$row['date_created'].'</h1>';
                }else{
                  echo "No Event yet. Stay tuned!";
                } 
              ?>
            </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 4,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo 'uploads/announcement/'.$row['notice_id'].'.jpg'; 
            ?>" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <!-- DESCRIPTION -->
            <p>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 4,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<p style="font-size: 20px; font-family: cursive;" align="justify">'.$row['notice'].'</p>'; 
                ?>
            </p>
          </div>
        </div><!-- END SA 5th EVENT -->

        <div class="section-title">
          <hr><hr>
          <h2>Event</h2>
          <!-- TITLE -->
          <p>
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 5,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<h1 style="font-family: monospace; font-size: 40px; color: red; font-weight: 700;">'.$row['notice_title'].'</h1>'; 
            ?>
            </p>
            <!-- PETSA -->
            <p style="font-size: 17px;">
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 5,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                if ($row > 0){
                    
                  echo 'Announced on :' .'<h1 style="font-size: 19px; color: green;">'.$row['date_created'].'</h1>';
                }else{
                  echo "No Event yet. Stay tuned!";
                } 
              ?>
            </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="
            <?php

                $query = mysqli_query($con,"select * from noticeboard limit 5,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo 'uploads/announcement/'.$row['notice_id'].'.jpg'; 
            ?>" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <!-- DESCRIPTION -->
            <p>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 5,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<p style="font-size: 20px; font-family: cursive;" align="justify">'.$row['notice'].'</p>'; 
                ?>
            </p>
          </div>
        </div><!-- END SA 6th EVENT -->

      </div>

    </section><!-- End EVENT Section -->


<!-- ANNOUNCEMENT PANE SA BABA -->

    <section id="counts" class="counts section-bg">
      <!-- <span style="margin-left: 50px; font-size: 40px; font-weight: 700; font-family: monospace; color: lawngreen;">ANNOUNCEMENT PANE</span> -->
<hr>

      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <!-- TITLE -->
            <h2>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 6,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                echo '<h1 style="font-family: monospace; font-size: 40px; color: red; font-weight: 700;">'.$row['notice_title'].'</h1>';
              ?>
            </h2><hr>
            <!-- ORAS -->
            <p>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 6,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                if ($row > 0){
                    
                  echo 'Announced on :' .'<h1 style="font-size: 19px; color: green;">'.$row['date_created'].'</h1>';
                }else{
                  echo "No Event yet. Stay tuned!";
                } 
              ?>
            </p>
          </div>
          <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
              <?php

                $query = mysqli_query($con,"select * from noticeboard limit 6,1");
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);

                    
                  echo '<p style="font-size: 20px; font-family: cursive;" align="justify">'.$row['notice'].'</p>'; 
                ?> 
            </p>
          </div>
        </div>
        </div>
      </div>
    </section>
    
          </div>
        </div>

      </div>
    </section>
<hr>
  </main>
  <footer id="footer">
          
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

  <script src="assets/js/main.js"></script>

</body>

</html>
<script>
  $(document).ready(function(){

    function blink(){

      $('#tots').fadeOut(500);
      $('#tots').fadeIn(500);
    }

    setInterval(blink,1000);

  });

</script>