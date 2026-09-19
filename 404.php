<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page Not Found - Christ Church, Ridgewood NJ">
    <meta name="author" content="">

    <title>404 Page Not Found - Christ Church Ridgewood</title>
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
	$current = '';
	include "navigation.php";
	?>

    <!-- Page Content -->
    <div class="container" style="min-height: 50vh;">
        <div class="row text-center vCenter">
            <div class="col-md-12">

                <h1 class="invitation" style="font-size: 3rem; border: none;">Oops! Page Not Found</h1>
                <h2 class="invitation" >Error Code: 404</h2>
                <p>We couldn't find the page you were looking for. It may have been moved or deleted.</p>
                <div style="margin-top: 2rem;">
                    <a href="index.php" class="btn btn-primary btn-lg">Return to Home Page</a>
                </div>
                <div style="margin-top: 3rem;">
                    <img src="images/ccr_exterior.jpg" alt="Christ Church Ridgewood" class="img-fluid" style="max-width: 400px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
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
