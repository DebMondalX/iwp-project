<?php
    $name="";
    $rate="";
    if(isset($_POST['submit']))
    {
        $name = $_POST['hname'];
        $rating = $_POST['rate'];
    }
    
    include "connection.php";
   
       $sql = "SELECT * FROM hotel_register WHERE hotel_name = '$name'";
       $result = mysqli_query($conn, $sql);
       $check = mysqli_fetch_array($result);
       if(isset($check)){
        $sql2 = "INSERT INTO review VALUES ('$name','$rating')";
        if(mysqli_query($conn,$sql2)){
            echo "Rating updated";
            header("Refresh: 3; URL=explore.html");
        }
        else{
            echo "Error updating rating";
        }

       }
       else {
        echo '<h1>Hotel doesnot exist.</h1>';
       }
    
    
?>