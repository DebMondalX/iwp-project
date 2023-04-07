<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updatetourists.php" method="post">
        <label for="tourist-name">Enter Tourist name</label><br>
        <input type="text" name="tourist-name" id="tourist-name" required>
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
        if(mysqli_query($conn,$sql)){
           header("location: updtourist.php");
        }
        else{
           echo "<h3>Error, no such tourist registered!.</h3>";
            
           }
}
    ?>
</body>
</html>