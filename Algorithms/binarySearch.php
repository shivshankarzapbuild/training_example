<?php

    $arr = array(12,125,451,547,56,45,457,25,174,896);

     sort($arr);
     print_r($arr);
    //element to be searched
    $element = 45;
    
    $high = count($arr);
    //echo count($arr);
    $length = $high;
    function binarySearch($arr,$low ,$high,$element){
        
        if($low < $high){
            $mid = (int)($low + ($high-$low)/2);
           // echo "<br>".$mid;

            if($arr[$mid] == $element){
                return $mid;
            }
                elseif($arr[$mid]>$element){

                    return binarySearch($arr,$low,$mid-1,$element);

                }
                else {
                    return binarySearch($arr,$mid+1,$high,$element);   
                }
                    
                

        }

        return -1;

    }

  

    $result = binarySearch($arr,0,$length-1,$element);

    //echo "$result";

    if($result == -1){
        echo "<br>Element Not present in the list";
    }else{
        echo "<br>Element Present in the list on Index $result after sorting";
    } 



?>