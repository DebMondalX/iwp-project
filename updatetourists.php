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
<?php
    echo "Welcome ".$_SESSION["username"];
    echo "<br>";
    ?>
    <form action="updatetourists.php" method="post">
        <label for="tourist-email">Enter tourist email-id</label><br>
        <input type="email" name="tourist-email" id="tourist-email" required>
        <br>
        <input type="submit" name="submit" value="Input changes">        
    </form>
    <?php
    if(isset($_POST['submit'])){
        $temail = $_POST['tourist-email'];
        include "connection.php";
        $sql = "select * from tourist_details where email='$temail';";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
           header("location: updtourist.php");
        }
        else{
           echo "<h3>Error, no such tourist registered!.</h3>";
            
           }
}
    ?>
</body>
</html>