<?php

$products = array("鉛筆" => 110, "消しゴム" => 165, "物差し" => 550);

$tax = 1.1;    
foreach($products as $key => $value){
    $nedan = $value * $tax;

    echo $key;
    echo "の税込価格は";
    echo $nedan;
    echo "円です<br>";    
}




?>