<?php

    $arr = array(12,125,451,547,56,45,457,25,174,896);

    
    $high = count($arr);
    $length = $high;

    
    function mergeSort($arr,$low,$high){

        
        if($low < $high){

            $mid = (int)(($high + $low)/2);  
            
            
            mergeSort($arr,$low, $mid);
            //echo "<br> ";
            mergeSort($arr,$mid+1,$high);

            return merge($arr,$low,$mid,$high);
        }
        
    }

    function merge($arr, $low, $mid, $high){
        
        $arr1 = array($high);
    

    $mid = (int)($low + ($high - $low)/2);
    $length1 = (int)($mid);
    $length2 = (int)($length - $mid +1);

   // echo "<br>Value of Length2 ".$length2;
    
    $leftArray = array($length1);
   
    $rightArray = array($length2);

    for($i = 0;$i<$length1;$i++){
        $leftArray[$i] = $arr[$i]; 
       // echo "Value of leftarray  = $leftArray[$i]<br>";
    }

    $k=0;
  //  echo "<br>value of mid = ".$mid;
    //echo "<br>value of length2 = ".$length2;


    for($j=$mid;$j<$high;$j++){
        $rightArray[$k]=$arr[$j];
        
       // echo "Value of right array  = $rightArray[$k]<br>";
        $k++;
    }

       

       // echo "Value of Length1  = $length1 <br>";
        //echo "Value of Length2  = $length2 <br> ";

        $i=0;
        $j=0;
        $k=0;
        echo "<br>";
       print_r($leftArray);

       while($i<$length1 && $j<$length2){
            //echo $k." ";
            if($leftArray[$i]<$rightArray[$j]){
                $arr1[$k] = $leftArray[$i];
                $i++;
            }
            else {
                $arr1[$k] = $rightArray[$j];
                $j++;
            }
            $k++;
        }
       //echo "Value 0f i = $i <br>";

        while($i<$length1){
            $arr1[$k] = $leftArray[$i]; 
            //echo "\n".$arr[$k];
            $i++; 
            $k++;
        }

        while($j<$length2){
            $arr1[$k] = $leftArray[$j];
           // echo " \n".$arr[$k]; 
            $j++; 
            $k++;
        }



    }

    $result = mergeSort($arr,0,$length-1);

    echo "$result = value of result ";

    print_r($arr1);


?>