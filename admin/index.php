<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   header("Location: login.html"); /* Redirect browser */
    exit();
}
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Christ Church, Ridgewood New Jersey 07450</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php

$max = 9000 *1024;
if (isset($_POST['pic_up'])) {
    $destination .= '../documents/';
    $destination .= $_POST["slide"];
    $destination .= '.pdf';
    if ($_FILES['filename']['error'] == 0) {
        if(move_uploaded_file($_FILES['filename']['tmp_name'], $destination)){
        chmod($destination, 0755);
        }
        else{
            switch ($_FILES['filename'] ['error'])
 {  case 1:
           print '<h2> The file is bigger than this PHP installation allows</h2>';
           break;
    case 2:
           print '<h2> The file is bigger than this form allows</h2>';
           break;
    case 3:
           print '<h2> Only part of the file was uploaded</h2>';
           break;
    case 4:
           print '<h2> No file was uploaded</h2>';
           break;
 }
        };
    }
}
?>

<body>
    <div class="container">
        <h1>ADMIN: Christ Church Ridgewood <small><a href="log_out.php" class="btn btn-danger btn-sm">log out</a></small></h1>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Upload Bulletin</h2>
                    </div>
                    <div class="panel-body">
                        <form action="index.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max; ?>">
                            <input type="hidden" name="slide" value="bulletin">
                            <input type="file" accept="application/pdf" name="filename" id="filename"><br>
                            <input type="submit" name="pic_up" value="Upload This Weeks Bulletin" class="btn btn-warning" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Upload Bulletin Insert</h2>
                    </div>
                    <div class="panel-body">
                        <form action="index.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max; ?>">
                            <input type="hidden" name="slide" value="insert">
                            <input type="file" accept="application/pdf" name="filename" id="filename"><br>
                            <input type="submit" name="pic_up" value="Upload This Weeks Insert" class="btn btn-warning" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2 class="panel-title">CRITICAL ALERT</h2>
                    </div>
                    <div class="panel-body">
                        THIS SHOULD BE LEFT COMPLETELY BLANK MOST OF THE TIME
                        <form class="form">
                            <textarea class="form-control"></textarea><br>
                            <input type="submit" name="create_alert" value="POST ALERT">    
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
