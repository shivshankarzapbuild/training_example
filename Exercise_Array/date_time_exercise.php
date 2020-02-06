
<h1>&copy<?php 
//TO show the date with copyright sign
    echo " ".date ('Y');
?></h1>

<?php

//to convert date into timestamp

    echo "Convert date into timestamp <br> ";
    $date=date_create();
    // $date=date_create();
   // echo date_timestamp_get($date);
    print_r(date_timestamp_set($date));

   
    
    //echo date_format($date,"y");
    $date=date_create();
    print_r(date_timestamp_set($date));
    echo "<br>".time()."<br>";
    
    
    //add 1 months in the current date
    echo "<br>Add 1 month in the current date";

    $date = date_create("2020-02-05");

    date_add($date,date_interval_create_from_date_string('1 Month'));
    echo "<br>".date_format($date,"y/m/d");

    
    
    //  Add 2 days in the current date
    $date = date_create("2020-02-05");

    date_add($date,date_interval_create_from_date_string('2 Days'));

    echo "<br>".date_format($date,"y/m/d") ."<br>";

    
    
    //date difference 

    echo "<br>To find the difference between the two dates  2020-06-19 13:44:02 and 2020-10-13 23:04:22";

    $date1 = date_create("2020-06-19 13:44:02");
    $date2 = date_create("2020-10-13 23:04:22");

    $date = date_diff($date1,$date2);
    // echo $date1;

    echo "<br>".$date->format("%R%a days");

    
    
    //utc time (time in the current timezone)

    echo "<BR><BR>Show time in UTC ()";
    echo "<br>The time in " . date_default_timezone_get() . " is " . date("H:i:s");

    date_default_timezone_set("UTC");

    echo "<br>The time in " . date_default_timezone_get() . " is " . date("H:i:s")."<br>";

   // echo date();

//    Convert timestamp in the date
    echo "<br>Convert timestamp in the date ";

   $date = date_create();
   //echo "<br>". date_timestamp_get($date);

   echo "<br>".date_format($date,"U = Y-m-d"). "<br><br>";

//    Convert 2020-06-19 13:44:02 into 19/06/2020 01:44:02 am

  echo "<br><br>Convert 2020-06-19 13:44:02 into 19/06/2020 01:44:02 am";
   $date = date_create("2020-06-19 13:44:02");

   echo "<br>".date_format($date,"d/m/Y h:i:s");
   

?>