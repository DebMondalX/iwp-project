
<?php
    $name=$pass="";
    if(isset($_POST['submit']))
    {
        $name = $_POST['username'];
        $pass = $_POST['pswd'];
    }
    //echo $name;
    //echo $password;
    include "connection.php";
    //$sql = "select * from admin_cred where username = '$name' and password ='$pass'"
    $sql = "select * from hotel_register where email ='$name' and password = '$pass'";
    $result = mysqli_query($conn, $sql);
    
   // mysqli_store_result($conn);

       // echo "Total No. of records :".mysqli_num_rows($result);
    
        
    
    if( mysqli_num_rows($result) > 0)
    {    $row  = mysqli_fetch_array($result);
        session_start();
        $_SESSION["username"] = $row['email'];
        $_SESSION["password"] = $row['password'];
        $_SESSION["name"] = $row['hotel_name'];
       header("Location: hotel-homepage.php");
    }
    else
    {
        echo "Login unsuccessful";
    }
    mysqli_close($conn);
    
    
?>