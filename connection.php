<?php
    $username = "root";
    $password = "";
    $servername = "127.0.0.1";
    $dbname = "iwp";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
 
    if($conn)
    {
        echo "Connection successful"."<br><br>";
    }
    else
    {
        echo ("Connection to DB failed: ".mysqli_connect_error());
    }
?>