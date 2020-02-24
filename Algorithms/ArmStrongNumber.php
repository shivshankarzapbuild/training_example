<?php 

   //A program to find the Armstrong numbers between the range of a numbers
   //between 100 and 999
    echo "<br>Armstrong Numbers are between 100 and 999 are ";
    for($i = 100;$i<=999;$i++){
            $sum =0;
            $temp = $i;
        while($temp>0){
               
                $remainder = $temp%10;
                $temp = $temp/10;
                $sum = $sum +($remainder*$remainder*$remainder);
                
                }
                if($sum == $i){
                        echo "<br>".$i;
                }
                
               // echo $arr[$j];
              //  $sum = pow($arr[0],3)+pow($arr[1],3)+pow($arr[2],3); 
             /*   if($sum == $i){
                    
                    echo $i;
                }*/

        }
        //A program to find the Armstrong numbers between the range of a numbers
        //between 100 and 999
        echo "<br>Armstrong Numbers are between 1000 and 9999 are ";
        for($i = 1000;$i<=9999;$i++){
                $sum =0;
                $temp = $i;
            while($temp>0){
                   
                    $remainder = $temp%10;
                    $temp = $temp/10;
                    $sum = $sum +($remainder*$remainder*$remainder*$remainder);
                    
                    }
                    if($sum == $i){
                            echo "<br>".$i;
                    }
                    
                   // echo $arr[$j];
                  //  $sum = pow($arr[0],3)+pow($arr[1],3)+pow($arr[2],3); 
                 /*   if($sum == $i){
                        
                        echo $i;
                    }*/
    
            }

        //A program to find the Armstrong numbers between the range of a numbers
        //between 100 and 999
            echo "<br>Armstrong Numbers are between 10000 and 99999 are ";
        for($i = 10000;$i<=99999;$i++){
                $sum =0;
                $temp = $i;
            while($temp>0){
                   
                    $remainder = $temp%10;
                    $temp = $temp/10;
                    $sum = $sum +($remainder*$remainder*$remainder*$remainder*$remainder);
                    
                    }
                    if($sum == $i){
                            echo "<br>".$i;
                    }
                    
                   // echo $arr[$j];
                  //  $sum = pow($arr[0],3)+pow($arr[1],3)+pow($arr[2],3); 
                 /*   if($sum == $i){
                        
                        echo $i;
                    }*/
    
            }
            


?>