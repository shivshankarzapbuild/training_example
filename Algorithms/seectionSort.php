<?php

    $arr = array(12,125,451,547,56,45,457,25,174,896);

    $length = count($arr);
    for($i=0;$i<$length;$i++){
        $min = $i;
         
            for($j=$i+1;$j<$length;$j++){
                if($arr[$j]<$arr[$min]){
                    $min = $j;
                }
            }

        if($min != $i){
            $temp = $arr[$min];
            $arr[$min]=$arr[$i];
            $arr[$i]=$temp;
        }

    }

    print_r($arr);
?>