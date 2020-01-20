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

    echo chr(56); //decimal value conversion
    echo chr(0x56); // hexadecial value conversion
     // octal value conversion 

     //converts into the hash value using Message Digest 5 algorithm
     $str = "hello";
     echo "<br>";
     echo md5($str);
     
     //converts into the hash value using Secure hash algorithm
     echo "<br>";
     echo sha1($str);

     //splits by the number of letters passed as the argument and also by the character
     //passed in the function
     $str = "hello world";
     echo "<br>";
     echo chunk_split($str,2,"#");

     //Returns the information about the characters used in the string 
     //3 is the mode of the information 
     $str = "Hello World";
     echo "<br>";
     echo count_chars($str,3);

     //calculates the 32-bit CRC(Cyclic Redudancy Check) checksum for the string passed
     echo "<br>";
     echo crc32($str);

     //returns the encoded string 
     echo "<br>";
     echo crypt($str);

     //Breaks into the array to the string passed from the gap or string passed

     $str = "this is a new string for the array conversion";
     echo "<br>";
     print_r(explode(" ",$str));

     //implode combines the array passed in the argument
     $arr = array('Hello','World!','Beautiful','Day!');
     echo "<br>";
     echo implode(" ",$arr);

     //join is an alias of implode i.e. does the same work of joining
     echo "<br>";
     echo join("+",$arr);

     //this function returns ascii value of first character of the string 
     echo "<br>";
     echo ord($str);

     //parse a string value to the variable
     echo "<br>";
     parse_str("name=Shivshankar&batch=2020");
     echo $name." ".$batch;

     //


    ?>