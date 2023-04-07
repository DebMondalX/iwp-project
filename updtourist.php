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
    <h2>Enter updated values:</h2>
    <form action="updtourist.php" method="post">
    Enter email for tourist to update: <br>
    <input type="email" name="temail" id="temail">
    <br>
    First Name: <br>
    <input type="text" name="f-name" id="f-name"> <br>
    Last Name: <br>
    <input type="text" name="l-name" id="l-name"> <br>

    Enter password:
    <br>
    <input type="password" name="password" id = "password"><br>
    
    <input type="submit" name="submit" value="update">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $temail = $_POST['temail'];
        $tpass = $_POST['password'];
        $firstname = $_POST['f-name'];
        $lastname = $_POST['l-name'];

        include "connection.php";
        $sql = "update tourist_details set password ='$tpass', first_name='$firstname',last_name='$lastname' where email='$temail';";
        if(mysqli_query($conn,$sql)){
           echo "Tourist data updated!";
        }
        else{
           echo "<h3>Error, no such hotel exist!.</h3>";
            
           }
}
    ?>
</body>
</html>