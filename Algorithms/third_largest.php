<?php

    //  program to find out the third largest in the unsorted array 
    $value = array(898,57,674,659,875,8,262,56);
    $first = $value[0];
    // echo $first;
    $second = 0;
    $third = 0;
    for($i=0;$i<8;$i++){
        if($value[$i]>$first){

                $third = $second;
                $second = $first;
                $first = $value[$i];
                //echo $first;
                //echo $second;
                //echo $third;
         }
         else if($value[$i]>$second) {

             $third = $second;
             $second = $value[$i];
         }
         else if($value[$i]>$third){

             $third = $value[$i];
         }

    }

    echo "Third largest value = ".$third;

?>
