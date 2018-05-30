<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VBS at Christ Church, Ridgewood</title>

  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  <!-- Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="theme-color" content="#3b74fb">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Spectral+SC:400,500,600,700" rel="stylesheet">

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105226374-6"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105226374-6');
</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <?php
  $thekeys=time();
  include "navigation.php";
  ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12" align="center">
        <h2 class="page-header invitation">Musical Theatre VBS</h2>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12" align="center">
        <br>
        <h5>
          Join Christ Episcopal Church for
        </h5>
        <h4 style="color:#178ed1;">
          The Big Fish: Jonah’s Whale of a Tale
        </h4>
      </div>
      <div class="row">
        <div class="col-md-4"><img src="images/vestry/missing.jpg" alt="" class="img-fluid"></div>
        <div class="col-md-4" align="center">
          <br>
          <p style="font-size:1.3em;padding:0;border-style:solid;border-width:0.2em;">
            <br>
            <b>August 6-10</b>
            <br>
            9 am – 12 pm
            <br>
            For Ages 4 – 12
            <br>
            $80 per child
            <br><br>
          </p>
        </div>
        <div class="col-md-4"><img src="images/vestry/missing.jpg" alt="" class="img-fluid"></div>
      </div>
      <div class="row">
        <div class="col-md-8" align="center">
          <br>
          <p class="ten-padding" style="border-style:solid;border-width:0.2em;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;">
            Come join in the fun of Musical Theatre Vacation Bible School (VBS)! We’ll learn the bible story of Jonah and the Whale and perform a creative musical told in “film noir” style, like an old-fashioned detective movie. Don’t miss this wonderful week of faith, music, drama, and art, with a performance on Friday morning.
            <br><br>
            Register now to secure a spot, space is limited.
            <br><br>
            Please pay via the PayPal link (coming soon) or write a check to the church with VBS and the names of your child(ren) in the memo line.
            <br><br>
            <b>Questions?</b>
            <br>
            Contact <a href="mailto:mwhittemore@christchurchridgewood.org?subject=VBS">Marlene Whittemore Pillow</a>
            <br>
            Director of Children’s & Youth Choirs
          </p>
        </div>
        <div class="col-md-4"><img src="images/vestry/missing.jpg" alt="" class="img-fluid"></div>
      </div>
    </div>

    <!-- Call to Action Section -->
    <?php include "donate.php"; ?>

  </div>
  <!-- /.container -->

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Script to Activate the Carousel -->
  <script>
  $('.carousel').carousel({
    interval: 5000 //changes the speed
  })
  </script>

</body>

</html>
