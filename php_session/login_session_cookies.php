<?php

session_start();
    $_SESSION["username"] = "admin";
    $_SESSION["password"] = "admin";


    
    if(isset($_POST["submit"])){
        if($_POST["username"] == $_SESSION["username"] && $_POST["password"] == $_SESSION["password"]){

            setcookie("username",$_POST["username"],time()+2*24*60*60);
            header("location:homepage1.php");            
        }
     }
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Login Form</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="username" placeholder="Input username" /><br>
            <input type="password" name="password" placeholder="Input password" /><br>

            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>