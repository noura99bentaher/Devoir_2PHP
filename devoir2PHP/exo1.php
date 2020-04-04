<?php 

 function mytest($string,$car){
    

    $arr = str_split($string);
    foreach($arr as $value){

        echo $value.$car."\t";
    }
     
 }

 mytest("HelloMyFriendsILoveYouSoMuch","  |  ");
?>