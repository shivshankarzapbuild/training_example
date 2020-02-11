<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Registration Form</title>

    </head>
    <body>
        <form method="POST" action="registration.php">

            <input type="email" name="email" placeholder="Input Email" required/><br>
            <input type="password" name="password" placeholder="Input Password" required/><br>
            
            <input type="submit" name="register" value="Register" />
            
            <a href="index.html" >Go To Login Page</a>
        </form>
    </body>
</html>

