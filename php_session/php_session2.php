<?php

    session_start();
    echo "Your name is " . $_SESSION["name"];
    echo "Visiter Number = " . $_SESSION["counter"];

?>