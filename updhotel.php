<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter updated values:</h2>
    <?php
    echo "updating data for hotel ".$_SESSION["hotel-name"];
    ?>
    <form action="updhotel.php" method="post">
    
    Enter password:
    <br>
    <input type="password" name="password" id = "password"><br>
    Enter hotel type:
    <br>
    <select name="HotelType" id="HotelType">
            <option value="none" selected disabled hidden></option>
            <option value="Hotel"> Hotel</option>
            <option value="Villa">Villa</option>
            <option value="Apartment">Apartment</option>
          </select>
          <br>
    Enter phone no: <br>
    <input type="text" name="hphone" id="hphone">
    <br>
    <input type="submit" name="submit" value="update">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $hemail = $_SESSION["hotel-email"];
        $hpass = $_POST['password'];
        $hoteltype = $_POST['HotelType'];
        $phone = $_POST['hphone'];

        include "connection.php";
        $sql = "update hotel_register set password ='$hpass',hotel_type='$hoteltype',phone_no='$phone' where email='$hemail';";
        if(mysqli_query($conn,$sql)){
           echo "Hotel data updated!";
        }
        else{
           echo "<h3>Error, no such hotel exist!.</h3>";
            
           }
}
    ?>
</body>
</html>