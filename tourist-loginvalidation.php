<?php
    $name="";
    $pass="";
    if(isset($_POST['submit']))
    {
        $name = $_POST['email'];
        $pass = $_POST['pswd'];
    }
    
    include "connection.php";
   
       $sql = "SELECT * FROM tourist_details WHERE Email = '$name' AND assword =
       '$pass'";
       $result = mysqli_query($conn, $sql);
       $check = mysqli_fetch_array($result);
       if(isset($check)){
        header("Location: explore.html");
        echo '<h1>Connection is done</h1>';
       }
       else {
        echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
       }
    
    
?>