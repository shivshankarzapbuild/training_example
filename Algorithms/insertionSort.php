<?php 


//Sorting algorithm  insertion sort

    $arr = array(12,125,451,547,56,45,457,25,174,896);

        $length = count($arr);

    for($i=0;$i<$length;$i++){

        $temp = $arr[$i];
        $j = $i-1;
         
         while($j>=0 && $arr[$j]>$temp){
            
            $arr[$j+1]= $arr[$j];
             $j = $j-1;
         }
         $arr[$j+1] = $temp;

    }
    print_r($arr);


?>