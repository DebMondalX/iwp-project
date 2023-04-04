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
    </style>
  </head>
  <body>
    <?php
      echo "<h3> The Hotels Registered With SuitCase :</h3>";

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
            
            $sql = "select * from hotel_register;";


    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border = 1>
              <tr>
              <th>Hotel Name</th>
              <th>email ID</th>
              <th>Hotel Type</th>
              <th>Phone</th>
              <th>Destination</th>
              </tr>
              ";
        while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>".$row['hotel_name']."</tid>";
              echo "<td>".$row['email']."</tid>";
              echo "<td>".$row['hotel_type']."</tid>";
              echo "<td>".$row['phone_no']."</tid>";
              echo "<td>".$row['destination']."</tid>";
              echo "</tr>";
        }
            echo "</table>";
        }
        else{
            echo "No Hotels have registered.";
        }
        closeConnection($conn);

      
    ?>
  </body>
</html>
