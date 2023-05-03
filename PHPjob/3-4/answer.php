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

<p><?php echo $hidden_name; ?>さんの結果は・・？</p>


<p>①の答え</p>
<?php

$port = $_POST['port'];

if ( $port == "80" ) {
    echo '正解!';
} else {
    echo '残念・・・';
}

?>


<br>


<p>②の答え</p>

<?php

$gengo = $_POST['gengo'];

if ( $gengo == "HTML" ) {
    echo '正解!';
} else {
    echo '残念・・・';
}

?>



<p>③の答え</p>

<?php

$comand = $_POST['comand'];

if ( $comand == "select" ) {
    echo '正解!';
} else {
    echo '残念・・・';
}

?>



</body>
</html>




