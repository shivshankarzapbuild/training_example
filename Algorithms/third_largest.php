<?php

    $value = array(8,57,6742,65,5,8,2262,56);
    $first = $value[0];
    echo $first;
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
