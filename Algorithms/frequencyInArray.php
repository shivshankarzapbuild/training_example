<?php

    $arr = [1,2,3,2,1,2,1,1,1,1,1,2,1,1,5,2,6,6,6,5,6,2,6,2,2,6,3,1,2,1];
    $length = count($arr);
    $count = 0;
    for($i =0;$i <$length;$i++){
        $temp = $arr[$i];
        $count = 1;
        if($arr[$i] == '$'){
            continue;

        }else{
                for($j=$i+1;$j<$length;$j++){
                        if($arr[$i]==$arr[$j]){
                        
                            $count++;
                            $arr[$j] = '$';
                        }
                    
            }
            
            echo " $temp is $count Number of times. ";
        }
       
    }

?>