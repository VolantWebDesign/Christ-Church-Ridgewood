<?php
//Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "onezerofivedb.db.5716966.hostedresource.com";
$username = "onezerofivedb";
$dbname = "onezerofivedb";

//These variable values need to be changed by you before deploying
$password = "EasterIsHere!05";
// $usertable = "your_tablename";
// $yourfield = "your_field";

//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
$connection = mysql_select_db($dbname);



// Production Connection
// $connection = new mysqli("localhost", "onezerofivedb", "EasterIsHere!05", "ccr_db");

//Development Connection
 // $connection = new mysqli("localhost", "root", "pinpin", "ccr_db");

// Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

/* change character set to utf8 */
// if (!$connection->set_charset("utf8")) {} else {}

?>
