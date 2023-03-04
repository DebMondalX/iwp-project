<?php
 $hname="";
 $hpass="";
 $hemail="";
 $htype="";
 $hphone="";

 if(isset($_POST['submit']))
 {
     $hname = $_POST['name'];
     $hemail = $_POST['email'];
     $hpass = $_POST['password'];
     $htype = $_POST['HotelType'];
     $hphone = $_POST['phone'];
 }
 include "connection.php";
 $sql = "INSERT INTO hotel_register VALUES('$hname','$hemail','$hpass','$htype','$hphone')";
 if(mysqli_query($conn,$sql)){
    echo "<h3>Successfully registered.</h3>";
 }
 else{
    echo "<h3>Error, can't register.</h3>";
 }
//  echo $hname;
//  echo  "<br>";
//  echo $hemail;
//  echo  "<br>";
//  echo $hpass;
//  echo  "<br>";
//  echo $htype;
//  echo  "<br>";
//  echo $hphone;
//  echo  "<br>";
//  echo "all good";
?>