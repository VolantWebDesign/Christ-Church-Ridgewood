<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Worship & Calendar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php include "navigation.php" ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Worship</h1><br>
            </div>
            <div class="col-12">
                <h3>Sunday</h3><br>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Holy Eucharist<br>8:00 AM<br><span class="text-muted">Mass</span></h4>
                <p>A quiet, spoken liturgy.  There's no music and usually the service is under an hour.  It's attended by all ages although it mostly appeals to individuals and families without children.  We usually use the Rite II Book of Common Prayer liturgy.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>JOY! Mass<br>9:15 AM<br><span class="text-muted">Eucharist for children</span> </h4>
                <p>Designed for families with young children, infant to age 4-5 (although some older children do attend).  The service incorporates music, movement, and Bible stories with a children's sermon.  The children learn how to pray, share, and receive Communion.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Holy Eucharist<br>10:00 AM<br><span class="text-muted">Mass with music</span></h4>
                <p>Our principle weekend worship.  Attended by all ages, families and individuals, the service incorporates music offered by the organist, choir, and occasional soloist.  We use the Rite II Book of Common Prayer liturgy.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Celtic Eucharist<br>5:00 PM<br><span class="text-muted">3rd Sunday of the month</span></h4>
                <p>The Third Sunday Celtic Eucharist offers the worshipper a quiet, meditative, reflective experience.  It incorporates silence along with ancient Celtic prayers and music along with Taize style music.  There is no sermon, but there are readings for reflection.  Prayers are offered via candle light, and communicants gather around the altar for the Eucharist.</p>
            </div>
        </div>
        <div class="row">
            <h1>Church Calendar</h1>
            <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=06uj07pfpegphtlafknmbi95vs%40group.calendar.google.com&amp;color=%231B887A&amp;src=ccridgewood%40gmail.com&amp;color=%23125A12&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no"></iframe>
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
