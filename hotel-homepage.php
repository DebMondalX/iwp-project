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
      body{
        background-color: aqua;
      }
      table{
        
justify-content: center;
      }
    </style>
  </head>
  <body>

   <h2>Your hotel reviews:</h2>
   <br>
     <?php
      
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
          $hname = $_SESSION["name"];
          $sql = "select * from reviews where hotelname = '$hname';";


  $result = mysqli_query($conn,$sql);

  if (mysqli_num_rows($result) > 0) {
      echo "<table border = 1>
            <tr>
            <th>Hotel Name</th>
            <th>From</th>
            <th>To</th>
            <th>Review</th>
            </tr>
            ";
      while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['hotelname']."</tid>";
            echo "<td>".$row['date_from']."</tid>";
            echo "<td>".$row['date_to']."</tid>";
            echo "<td>".$row['review']."</tid>";
            echo "</tr>";
      }
          echo "</table>";
      }
      else{
          echo "No Hotels have given any review.";
      }

      echo "<br>";
      echo "<h3>The booking details:</h3>";
      echo "<br>";


            $sqlsec = "select * from booking where hotel_name = '$hname';";


  $resultsec = mysqli_query($conn,$sqlsec);

  if (mysqli_num_rows($resultsec) > 0) {
      echo "<table border = 1>
            <tr>
            <th>Hotel Name</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Destination</th>
            <th>From</th>
            <th>To</th>
            </tr>
            ";
      while($rowsec = mysqli_fetch_array($resultsec)){
            echo "<tr>";
            echo "<td>".$rowsec['hotel_name']."</tid>";
            echo "<td>".$rowsec['Customer_name']."</tid>";
            echo "<td>".$rowsec['Customer_email']."</tid>";
            echo "<td>".$rowsec['Destination']."</tid>";
            echo "<td>".$rowsec['From_date']."</tid>";
            echo "<td>".$rowsec['To_date']."</tid>";
            echo "</tr>";
      }
          echo "</table>";
      }
      else{
          echo "No bookings for ".$hname;
      }

  ?>
    
    <br>
    <br><br><br>
    <a href="hotellogout.php"><button>Log out</button></a>
  </body>
</html>
