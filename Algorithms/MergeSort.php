<?php

$arr = array(12,125,451,547,56,45,457,25,174,896);
print_r($arr);
echo "<br>";
$arr=mergeSort($arr);

print_r($arr);

function mergeSort($num)
{
    if(count($num)==1)
    return $num;
       $mid=count($num)/2;
        //echo " $mid ";
        $left=array_slice($num,0,$mid);
        $right=array_slice($num,$mid);
        $left=mergeSort($left);
        $right=mergeSort($right);
        return merge($left,$right);
}
function merge($left,$right)
{
    $res=array();
    $i=0;
    $j=0;
    while($i<count($left) && $j<count($right))
    {
        if($left[$i] > $right[$j])
        {
            $res[]=$right[$j];
            $j++;
        }
        else
        {
            $res[]=$left[$i];
            $i++;
        }
    }
    while($i<count($left))
    {
        $res[]=$left[$i];
        $i++;    
    }
    while($j<count($right))
    {
        $res[]=$right[$j];
            $j++;
    }
    return $res;
}
?>