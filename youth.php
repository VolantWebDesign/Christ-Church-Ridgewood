<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Youth Group at Christ Church, Ridgewood</title>
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
  $current = 'youth';
  include "navigation.php";
  ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12" align="center">
        <h2 class="page-header">Youth Group</h2>
      </div>
    </div>

    <!-- Carousel -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div  align="center">
              <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/Ministries/youth-group/christmasparty.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Youth Group Christmas Party</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/Ministries/youth-group/hike.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Youth Group Hike</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/Ministries/youth-group/party.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Youth Group Confirmation Party</h5>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Upcoming Events -->
    <div class="col-md-12" align="center">
      <h2 style="color:#113056">Upcoming Events</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div  align="center">
              <h4>More coming soon</h4>
              <p>Youth group is fun, social fellowship for youth in grades 7-12.  Social events are planned once or twice a month with an occasional service project or outreach opportunity thrown in.</p>
            </div>
          </div>
        </div>
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

</body>

</html>
