<?php

    $number = 570;
    $k=0;
    $arr = array();
    

    //Factors of number 16 are 

    echo "Prime factors are :";

    for($i =2;$i<$number;$i++){
        $f = 0;
            if($number%$i ==0){
                $primeNumber = $i;
                for($j = 2;$j<=$primeNumber/2;$j++){
                    if($primeNumber % $j ==0){
                        $f=1;
                    }
                }
                if($f==0){
                    echo " ".$primeNumber;
                    $arr[$k] = $primeNumber;
                    $k++; 
                }



                
        }

    }


    echo "<br>Largest Prime Factor is:  ".$arr[--$k];

?>