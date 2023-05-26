<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style11.css">
    </head>
<body>
    <br>

    <?php
        $hidden_name = $_POST['hidden_name'];
    ?>

    <p>
        <?php echo $hidden_name; ?>さんの結果は・・？
    </p>

    <?php

        $port = $_POST['port'];
        $gengo = $_POST['gengo'];
        $comand = $_POST['comand'];

        function kakunin ($atai1, $atai2) {
            if ( $atai1 == $atai2 ) {
                echo '正解!';
            } else {
                echo '残念・・・';
            } 
        }
        
        echo '<p>①の答え</p>';
        kakunin($port , "80");
        echo '<br>';

        echo '<p>②の答え</p>';
        kakunin($gengo , "HTML");
        echo '<br>';

        echo '<p>③の答え</p>';
        kakunin($comand , "select");
        echo '<br>';

    ?>
    
</body>
</html>




