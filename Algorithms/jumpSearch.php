<?php 


$arr = array(12,125,451,547,56,45,457,25,174,896);

$count = count($arr);
$element = 12;
echo "<br>Sored array = :";
sort($arr);
print_r($arr);
echo "<br>Element to be searched = $element";

$step = floor(sqrt($count));

    function jumpSearch($arr,$n,$element){

        $i = 0;
        
        $step = floor(sqrt($n));

        while($arr[$step] < $element && $step < $n){

            $i = $step;
            $step = $step + floor(sqrt($n));


            if($step>$n){
                return -1;

            }
        }

        for($x = $i ; $x<=$step ;$x++){

            if($arr[$x]==$element){
                return $x;
            }
        }

        return -1;


    }


    $search = jumpSearch($arr,$count,$element);

    if($search == -1){
        echo "<br>Element Not Found in the Array  ".$search;
    }else {
        echo "<br>Element found at index $search in sorted array";
    }

    

?>