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

     //splits by the number of letters passed as the argument and also by the character
     //passed in the function
     $str = "hello world";
     echo "<br>";
     echo chunk_split($str,2,"#");

     

     //converts into the hash value using Message Digest 5 algorithm
     $str = "hello";
     echo "<br>";
     echo md5($str);
     
     //converts into the hash value using Secure hash algorithm
     echo "<br>";
     echo sha1($str);

     

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

     //String comparision case insensitive returns 0 if equal 
     echo "<br>";
     $equal = strcasecmp("shivshankar","SHIVSHANKAR");
     echo $equal;

     //String comparision case sensitive returns 0 if equal
     echo "<br>";
     $equal = strcmp("SHIVSHANKAR","shivshankar");
     echo $equal;

     //Returns integer length of a string
     echo "<br>";
     $equal = strlen("shivshankar");
     echo $equal;

     //Returns the reverse of a string 
     echo "<br>"; 
     $equal = strrev("Shivshankar");
     echo $equal;

     // Returns the string in the lower case 
     echo "<br>"; 
     $equal = strtolower($str);
     echo $equal;

     //Returns the string in the upper case
     echo "<br>";
     $equal = strtoupper($str);
     echo $equal;

     //trims out the passed string or the white spaces 
     echo "<br>";
     echo trim($str,"thon");

     //WORDWRAP function wraps a string into a new line when the specified limit is reached
     echo "<br>";
     $str = "this is a simple sentence for example";
     echo wordwrap($str,15,"<br>\n");

     //ucwords function turns first character of each word to upper case
     echo "<br>";
     echo ucwords("hello world");

     //ucfirst function turns first character of first word to uppercase
     echo "<br>";
     echo ucfirst("hello world");

     //substr_replace replace one string with another string 
     echo "<br>";
     echo substr_replace("hello","world",0);

     //substr count counts the number of times a specific substring is occured

     echo "<br>";
     echo substr_count("this is the first session of the office","the");


     //substr compare  two string 

     echo "<br>";
     echo substr_compare("hello world ", "hello world");

     //substr returns a part of the string 
     echo "<br>";
     echo substr("hello world",6);

     //strtr function translates certain characters in a string
     echo "<br>";
     echo strtr("hello world","he","io");

     //strtok splits the string from the specified string 
     echo "<br>";
     print_r(strtok("Hello world"," "));

     //strstr searches for the first occurence of the string inside of other string
     //and returns the rest of the string
     echo "<br>";
     echo strstr("hello world THIS IS SHIVSHANKAR","world");

     //strspn returns the number of character which is found in the string which is passed 
     //in the parameter string, starts from the left

     echo "<br>";
     echo strspn("Hello World ","Hekll");

     //strrpos returns the position for the last occurence of the string passed in the 
     //parameter ,, case sensitive
     //strripos is also the same function but is case insensitive
     echo "<br>";
     echo strrpos("this is the simple seentence for the test case","the");


     //strrchr search for the provided string and returns the characters from that 
     //position
     echo "<br>";
     echo strrchr("hello world this is good","wor");
     
     //strpos finds the first occurence of the string provided in the parameter
     echo "<br>";
     echo strpos("this is the simple seentence for the test case","the");

     //strcoll compares the two string it works same as strcmp if the locale is 
     //set to C or POSIX if returns 0 then the strings are equal
     echo "<br>";
     setlocale(LC_COLLATE, 'en_US');
     echo strcoll("hello world","hello world");

     //strchr finds the first occurence of any string passed as the parameter and 
     //returns the rest of the string
     echo "<br>";
     echo strchr("hello world this is shivshankar","this");

     //str_word_count function counts the number of word found in the string
     echo "<br>";
     echo str_word_count("hello world this is shivshankar");

     //str_split split the characters of the string into the 
     echo "<br>";
     print_r(str_split("shivshankar"));
     
     //str_replace replaces the word of string with another string provided in 
     //the string 
     echo "<br>";
     echo str_replace("world","ShivShankar","Hello world");

     //str_repeat repeats the string upto specified number of times
     echo "<br>";
     echo str_repeat("Shivshankar",10);

     //str_pad pads to the right side of the string 
     //to a new specified length 
     echo "<br>";
     echo str_pad("hello shiv",20,".");

     //str_ireplace replaces the string with another string in the string 
     //case insensitive
     echo "<br>";
     echo str_ireplace("WORLD","shiv","hello world ");

     //str_getcsv returns and array with the all csv fields 

     //rtrim trims the specified string from the string from the right 
     echo "<br>";
     echo rtrim("hello world","world");

     //printf outputs a formatted string like in c++
     echo "<br>";
     $str = "this ";
     $number = 9;
     printf("%s is number %u",$str,$number);

     //print writes some text to the output
     echo "<br>";
     print("hello world"); 
     
     //ltrim trims the string from the left to the passed string 
     echo "<br>";
     echo ltrim("hello world","hello");

     //lcfirst converts the first character of the string to lower case
     echo "<br>";
     echo lcfirst("Hello World");

     //htmlspecialchars converts the html tag into its effective way
     echo "<br>";
     $str = "this is <b>bold</b> text.";
     echo htmlspecialchars($str);

     //htmlspecialchar_decode converts the html tag 
     echo "<br>";
     $str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
     echo htmlspecialchars_decode($str);

     //htmlentities converts some characters to html entities
     echo "<br>";
     $str='<a href="www.google.com"> Google</a>';
     echo htmlentities($str);

     //htmlentities_decode converts the html entities to the normal character and is 
     //opposite of the htmlentities
     echo "<br>";
     $str="&lt;a href=&quot;http://www.google.com&quot;&gt; Google&lt;/a&gt;";
     echo html_entity_decode($str);

     //hex2bin converts the hexadecimal to the ASCII characters
     echo "<br>";
     echo hex2bin("48454C4C4F");


?>