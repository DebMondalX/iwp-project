<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="admin-homepage.css" />
  </head>
  <body>
    <div class="welcome banner">
      <h2>Welcome Admin</h2>
    </div>
    <?php
    echo "Welcome ".$_SESSION["username"];
    echo "<br>";
    ?>
    <a href="viewhotels.php">view hotels</a><br />
    <a href="viewtourists.php">view tourists</a><br />
    <a href="viewreviews.html">view reviews</a><br />
    <a href="updatehotels.php">update hotels</a><br />
    <a href="updatetourists.php">update tourists</a>
    <!--deleting profiles ?-->
  </body>
</html>
