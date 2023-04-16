<?php
  
  //②フォームからのデータを受け取ります
  $my_name = $_GET['my_name'];
  $omikuji = $_GET['omikuji'];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $random1 = mt_rand(1, 6);

  

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  $kekka = $omikuji * $random1;

  if ($kekka >= 1 && $kekka <= 10) {
    $omikuji1 = '凶'; 
  } elseif ($kekka >= 11 && $kekka <= 15) {
    $omikuji1 = '小吉';
  } elseif ($kekka >= 16 && $kekka <= 20) {
    $omikuji1 = '中吉';
  } elseif ($kekka >= 21 && $kekka <= 25) {
    $omikuji1 = '吉';
  } elseif ($kekka >= 26 && $kekka <= 36) {
    $omikuji1 = '大吉';
  } elseif ($kekka >= 37) {
    $omikuji1 = '残念';
  }

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう

?>
  
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>練習問題</title>
</head>
<body>


<br>

<?php
date_default_timezone_set('Asia/Tokyo');
echo date("Y-m-d H:i:s", time()); 
?>

<div>名前は<?php echo $my_name; ?>です。</div>
<div>番号は<?php echo $kekka; ?>です。</div>
<div>結果は<?php echo $omikuji1; ?>です。</div>

</body>
</html>



