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
    <style>
        form{
            margin: 0 auto; 
width:250px;
        }
    </style>
</head>
<body>
<?php
    echo "Welcome ".$_SESSION["username"];
    echo "<br>";
    ?>
    <form action="updatehotels.php" method="post">
        <label for="hotel-name">Enter hotel name</label><br>
        <input type="text" name="hotel-name" id="hotel-name" required>
        <br>
        <label for="hotel-email">Enter hotel email-id</label><br>
        <input type="email" name="hotel-email" id="hotel-email" required>
        <br>
        <input type="submit" name="submit" value="Input changes">        
    </form>
    <?php
    if(isset($_POST['submit'])){
        $hname = $_POST['hotel-name'];
        $hemail = $_POST['hotel-email'];
        include "connection.php";
        $sql = "select * from hotel_register where hotel_name='$hname' and email='$hemail';";
        $result = mysqli_query($conn,$sql); 
        $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)){
            $_SESSION["hotel-email"] = $row['email'];
            $_SESSION["hotel-name"] = $row['hotel_name'];
           header("location: updhotel.php");
        }
        else{
           echo "<h3>Error, no such hotel exist!.</h3>";
            
           }
}
    ?>
    <br><br><br>
    <a href="adminlogout.php"><button>Log out</button></a>
</body>
</html>