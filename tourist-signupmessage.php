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
 // Check if user already exists in the database
$sql = "SELECT * FROM tourist_details WHERE Email='$temail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // User already exists
  echo "This account already exists.";
} else {
 $sql1 = "INSERT INTO tourist_details VALUES('$temail','$tfname','$tlname','$tpass')";
 if(mysqli_query($conn,$sql1)){
    echo "<h3>Successfully registered.</h3>";
 }
 else{
    echo "<h3>Error, can't register.</h3>";
 }
}
?>