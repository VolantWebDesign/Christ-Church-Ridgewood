
<?php
    // Development Connection
    $connection = new mysqli("localhost", "root", "root", "ccr_start");

    if (mysqli_connect_errno())
        {
            echo "Failed to connect: " . mysqli_connect_error();
        }

    // Live Connection
?>