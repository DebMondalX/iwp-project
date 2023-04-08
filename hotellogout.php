<?php
    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    unset($_SESSION["name"]);
    echo "Thank you for visiting our site.";
    header("Location: first-page.html");
?>