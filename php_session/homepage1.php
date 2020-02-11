<?php

session_start();

echo "Welcome " . $_SESSION["username"];
echo "welcome " . $_COOKIE["username"];

?>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <button onclick="<?php  unset($_SESSION["username"]);
         ?>"> LOGOUT</button>
    </body>
</html>

