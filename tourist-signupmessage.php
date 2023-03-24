<?php
 $tfname="";
 $tlname="";
 $tpass="";
 $temail="";
 

 if(isset($_POST['submit']))
 {
     $tfname = $_POST['fname'];
     $tlname = $_POST['lname'];
     $temail = $_POST['email'];
     $tpass = $_POST['psw'];
     
 }
 include "connection.php";
 $sql = "INSERT INTO tourist_details VALUES('$tfname','$tlname','$temail','$tpass')";
 if(mysqli_query($conn,$sql)){
    echo "<h3>Successfully registered.</h3>";
 }
 else{
    echo "<h3>Error, can't register.</h3>";
 }

?>