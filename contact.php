<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Global site tag (gtag.js) - Google Analytics -->
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
$current = 'contact';
include "navigation.php";
?>

<!-- Modal Mail -->
<div class="modal">
    <form class="form">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Your Name">
        <br><label>Email</label>
        <input type="text" class="form-control" placeholder="Email Address">
        <br><label>Phone</label>
        <input type="text" class="form-control" placeholder="(999) 999-9999">
        <br>l<label>Message</label>
        <textarea class="form-control" placeholder="Tell us how what we can help you with."></textarea><br>
        <input type="submit" name="submit" class="btn btn-primary" value="Send Message" />
    </form>
</div>
<!-- End Modal Mail -->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <h1>Contact & Office Hours</h1>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <h4>Location & Contact</h4><br>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/ccr_exterior.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <strong>Christ Episcopal Church</strong><br>
                            105 Cottage Place<br>
                            Ridgewood, NJ 07450<br>
                            (201) 652-2350<br><br>
                            <a href="mailto:communications@christchurchridgewood.org" class="btn btn-primary">Send Us An Email</a>
                        </div>
                    </div>
                    <hr>
                    <div align="center">
                        <a class="btn btn-warning" href="http://visitor.r20.constantcontact.com/d.jsp?llr=56u4hgcab&p=oi&m=1101868815294&sit=qgg7clycb&f=eb928dd1-e1c1-442e-a385-dca142ab5c8e" target="_blank">Sign Up For Our Newsletter</a>
                    </div>
            </div>
            <div class="col-md-6">
               <h4>Office Hours</h4>
                <table class="table table-condenced table-striped">
                    <tr><td><strong>Sunday</strong></td><td>Office Closed</td></tr>
                    <tr><td><strong>Monday</strong></td><td>9:00 am - 3:00 pm</td></tr>
                    <tr><td><strong>Tuesday</strong></td><td>9:00 am - 3:00 pm</td></tr>
                    <tr><td><strong>Wednesday</strong></td><td>9:00 am - 3:00 pm</td></tr>
                    <tr><td><strong>Thursday</strong></td><td>9:00 am - 3:00 pm</td></tr>
                    <tr><td><strong>Friday</strong></td><td>9:00 am - 3:00 pm</td></tr>
                    <tr><td><strong>Saturday</strong></td><td>Office Closed</td></tr>
                </table>
            </div>
        </div>
        <div class="row">
            <h1>Map & Directions</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3581.92052076246!2d-74.1143684867126!3d40.98095254942934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x269aa5ff4c0555d7!2sChrist+Church!5e0!3m2!1sen!2sus!4v1445346667866" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <br>
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
