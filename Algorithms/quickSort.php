<?php

    //function to create the Quick sort 
    
    $arr = array(12,125,451,547,56,45,457,25,174,896);
 
function quickSort($data)
{
    if (count($data) == 0) {
        return $data;
    }
 
    $pivot = $data[0];
 
    $left = $right = [];
 
    for ($i = 1; $i < count($data); $i++) {
        if ($data[$i] < $pivot) {
            $left[] = $data[$i];
        } else {
            $right[] = $data[$i];
        }
    }
 
    return array_merge(quicksort($left), array($pivot), quicksort($right));
}
 
print_r(quickSort($arr));
    


?>