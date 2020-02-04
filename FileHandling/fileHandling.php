<?php 

$file = "sample.txt";
    $myfile = fopen($file, "a+") or die("Unable to open the file");

    $text = "\nThis is again a simple data for writing in the file";
    fwrite($myfile,$text);
   // echo filesize($file);
   fclose($myfile);

   $myfile = fopen($file, "r") or die("Unable to open the file");
    echo fread($myfile,filesize($file));
   // echo $myfile;
    fclose($myfile);

 ?>