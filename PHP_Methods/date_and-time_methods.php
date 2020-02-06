<?php 

    //The PHP methods which involves date and time

    //checkdate method is used for the validation of the date that if the date is a valid 
    //date or not

    var_dump(checkdate(12,24,2020));//returns true if the date exist and false if the date is
                                    // not valid

    //date_create creates a date and we can show it using date_format Y-M-D

    $date = date_create("2020-01-31");

    // date_format is used for formatting the date according to the given format
    
    echo date_format($date,"Y/m/d");

    // date add just adds the date to the given date and date interval create from date string 
    // is used the date passed in the string format

    $date = date_create("2020-01-31");

    date_add($date,date_interval_create_from_date_string('1 Year 40 days'));

    echo date_format($date,"y/m/d");

    ///this function get the default timezone and can set the default timezone also
    /// and then can show the date of the stimezone which we have set 

    echo "<br>The time in " . date_default_timezone_get() . " is " . date("H:i:s");

     date_default_timezone_set("Asia/Calcutta");

     echo "<br>The time in " . date_default_timezone_get() . " is " . date("H:i:s")."<br>";


     ///It Lists all the timezone identifiers and we can just manipulate it as we want
     /// the list is to provide the idea about the timezone

            // $timezone_identifiers = DateTimeZone::listIdentifiers();

            // foreach($timezone_identifiers as $key => $list){

            // echo $list . "<br/>";
            // }

    //   echo date_default_timezone_set ( $timezone_identifiers );

      echo "<br>".var_dump(date());
      //date sunset method with its original timestamp and all the function


      echo date("D M d Y"). ', sunset time : ' .date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);


    // function getdate returns and array having all the information about todays date

    $date = getdate();
    print_r($date);

    //the function strtotime is used to return the time provided in the form of the string

?>