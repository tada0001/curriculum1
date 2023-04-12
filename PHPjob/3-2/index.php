<?php

const tax = 0.1; 

function priceEcho($price){
     
    $str = $price + ($price * tax);
    $str = number_format($str);
    return($str); 
    }


    $products = ["鉛筆" => 110, "消しゴム" => 165, "物差し" => 550];

    foreach($products as $key => $price){
        print($key. "の税込み価格は" . priceEcho($price) . "円です<br>");
    }

?>