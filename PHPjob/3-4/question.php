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
    
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>


<br>

<p>お疲れ様です<?php echo $my_name; ?>さん</p>


<form action="answer.php" method="post">




<input type="hidden" name="hidden_name" value="<?php echo $my_name; ?>" >


<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
        $port1 = ["80", "22", "20","21"];

foreach ($port1 as $value) { ?>
    <input type="radio" name="port" value=<?php echo $value ?> >
    <?php echo $value;
  
}
?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
        $gengo = ["PHP", "Python", "JAVA","HTML"];

foreach ($gengo as $value) { ?>
    <input type="radio" name="gengo" value=<?php echo $value ?> >
    <?php echo $value;
  
}
?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
        $comand = ["join", "select", "insert","update"];

foreach ($comand as $value) { ?>
    <input type="radio" name="comand" value=<?php echo $value ?> >
    <?php echo $value;
  
}
?>



<!--問題の正解の変数と名前の変数を[answer.php]に送る-->



<br>
  
  <input type="submit" value="回答する" />
</form>




</body>
</html>

