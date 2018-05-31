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
        <h2 class="page-header invitation">vbs music & lyrics download</h2>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6" align="center">
        <h3 class="page-header invitation">Lyrics</h3>
        <a href="media/The-Big-Fish.docx" download="The Big Fish lyrics.docx" class="btn btn-lg btn-outline-primary">Download</a>
      </div>
      <div class="col-md-6" align="center">
        <h3 class="page-header invitation">Songs</h3>
        <a href="media/music.mp3" download="The Big Fish song1.mp3" class="btn btn-lg btn-outline-primary disabled">Download</a>
        <p>To be Added</p>
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
