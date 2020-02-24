<?php

    //BUBBLE SORT ALGORITHM
    $arr = array(12,125,451,547,56,45,457,25,174,896);
    $length = count($arr);
    for($i = 0;$i<$length-1;$i++){
        for($j=$i;$j<$length;$j++){
            if($arr[$i]>$arr[$j]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] =$temp;

             }
        }
    }

    for($i=0;$i<$length;$i++){
        echo "\t$arr[$i]";
    }

?>