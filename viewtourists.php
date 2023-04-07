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
    <style>
      h3 {
        text-align:center;
        background: aqua;
      }
      td{
        text-align: center;
        height: 50px;
  vertical-align: bottom;
      }
    </style>
  </head>
  <body>
    <?php
      echo "<h3> List of Tourists Registered With SuitCase :</h3>";
      echo "Welcome ".$_SESSION["username"];
      echo "<br>";
  
        function openConnection(){
            $username = "root";
            $password = "";
            $servername = "127.0.0.1";
            $dbname = "iwp";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if($conn)
            {
                return $conn;
            }
            else
            {
                echo ("Connection to DB failed: ".mysqli_connect_error());
            }
            }
            function closeConnection($conn){
                $conn->close();
            }

            $conn = openConnection();
            
            $sql = "select * from tourist_details;";


    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border = 1>
              <tr>
              <th>Email ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Password</th>
              </tr>
              ";
        while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>".$row['email']."</tid>";
              echo "<td>".$row['first_name']."</tid>";
              echo "<td>".$row['last_name']."</tid>";
              echo "<td>".$row['password']."</tid>";
              echo "</tr>";
        }
            echo "</table>";
        }
        else{
            echo "No Tourist details found.";
        }
        closeConnection($conn);

      
    ?>
  </body>
</html>
