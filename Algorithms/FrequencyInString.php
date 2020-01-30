<?php 

    $str = "kjashfdhkjaskjfhkjhasdfasdfafasdgas";

    $arr = str_split($str);

   // print_r($arr);
    echo "<br>The String is ".$str."<br><br>";
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
            
            echo " <br>$temp is $count Number of times. ";
        }
       
    }

?>