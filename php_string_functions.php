<?php

    //String Inbuilt functions


    //add backward slash before the mentioned word
    $str = addcslashes("This is a simple function ","a");
    echo $str;

    //add backward slashes before and after the quoted word

    $str = addslashes('This is a "simple" sentence');
    echo "<br>";
    echo $str;

    //converts the given string to the hexa decimal system
    $str = bin2hex("This is a simple sentence ");
    echo "<br>";
    echo $str;

    //removes the word passed as the argument of the function
    $str = "hello shiv";
    echo "<br>";
    echo $str. "<br>";
    echo chop($str,"shiv");

    // converts to specified ascii value

    echo chr(56);


    ?>