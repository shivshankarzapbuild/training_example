<?php

    $number = 17;
    //Prime Numbers in a range 
    $f = 0;
    for($j = 2;$j<10000;$j++){
            $number = $j;
            $f=0;
            for($i = 2;$i<=$number/2;$i++){
                if($number % $i ==0){
                    $f=1;
                }
            }

            if($f == 0){
                echo " ".$j;
            }
    
}

?>