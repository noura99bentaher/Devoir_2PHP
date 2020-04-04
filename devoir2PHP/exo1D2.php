<?php
function couper($string,$car)
{
    $strings=str_split($string);
    $i=0;
        foreach($strings as $value){
            
     if($i<2*strlen($string)){
     $res[$i]=$value;
     $res[$i+1]=$car;
     $i+=2;
 
    }
}
return$res;
}

$res=couper("hellonoura",'/');
foreach($res as $value){
    echo "$value <br> fffff";
}
?>