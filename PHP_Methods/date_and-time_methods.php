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

    ///More of the function is going to be added 
    



?>