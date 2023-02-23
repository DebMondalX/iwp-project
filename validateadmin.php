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
    $sql = "select * from admin_cred where username ='$name' and password = '$pass'";
    $result = mysqli_query($conn, $sql);
    
   // mysqli_store_result($conn);

       // echo "Total No. of records :".mysqli_num_rows($result);
    
        
    
    if( mysqli_num_rows($result) > 0)
    {
        header("Location: admin-homepage.html");
        echo "User exists";
    }
    else
    {
        echo "Login unsuccessful";
    }
    mysqli_close($conn);
    
    
?>