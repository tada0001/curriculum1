<?php

for($i = 1; $i <=100; $i++){
    if($i % 15 === 0){
        echo "FizzBuzz";
        echo PHP_EOL;
        echo '<br>';
    }elseif($i % 5 === 0){
        echo "Buzz";
        echo PHP_EOL;
        echo '<br>';
    }elseif($i % 3 === 0){
        echo "Fizz";
        echo PHP_EOL;
        echo '<br>';
    }else{
        echo $i;
        echo PHP_EOL;
        echo '<br>';
    }
}

?>