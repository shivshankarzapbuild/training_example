<?php

    $str1 = "ochu";
    $str2 = "echo";

    $length1 = strlen($str1);
    $length2 = strlen($str2);
    $f = 0;

    if($length1<$length2 || $length1 >$length2){
        echo "<br>The Strings are not anagram";
    }
    else {
        for($i=0;$i<$length1;$i++){
            $f=0;
            for($j=0;$j<$length2;$j++){
                if($str1[$i]=== $str2[$j]){
                    $f=1;
                break;
                
                }else {
                    
                   $f=0;
                }
            }
        }
    }    
    echo $f;
    if($f==1){
        echo "<br>The Strings are anagram";
    }else{
        echo "<br>The Strings are not anagram";
    }