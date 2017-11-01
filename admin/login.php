<?php
include 'connect.php';

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 
// $username= "rector@christchurchridgewood.org"; 
// $password = "churchmouse";

// To protect MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
// $username = mysqli_real_escape_string($connection,$username);
// $password = mysqli_real_escape_string($connection,$password);

$sql="SELECT email, hash, user FROM admin_users WHERE email='$username' AND hash='$password'";
$result=mysql_query($sql);
if (!$result) {echo "database did not connect"; die();}
$user_profile = mysql_fetch_assoc($result);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
  session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user_profile["email"];
    header("Location: index.php"); /* Redirect browser */
} else {
   header("Location: login.html"); /* Redirect browser */
  exit();
}

?>

