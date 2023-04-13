<?php

const TAX = 0.1; 

function priceEcho($price){
     
    $str = $price + ($price * TAX);
    $str = number_format($str);
    return($str); 
    }


    $products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];

    foreach($products as $key => $price){
        print($key. "の税込み価格は" . priceEcho($price) . "円です<br>");
    }

?>