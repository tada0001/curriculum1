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
        $my_name = $_POST['my_name'];
    ?>

    <br>

    <p>お疲れ様です<?php echo $my_name; ?>さん</p>

    <form action="answer.php" method="post">

        <input type="hidden" name="hidden_name" value="<?php echo $my_name; ?>" >

        <h2>①ネットワークのポート番号は何番？</h2>

        <?php
            $port1 = ["80", "22", "20","21"];

            foreach ($port1 as $value) { ?>
            <input type="radio" name="port" value=<?php echo $value ?> >
            <?php echo $value;         
            }
        ?>

        <h2>②Webページを作成するための言語は？</h2>

        <?php
            $gengo = ["PHP", "Python", "JAVA","HTML"];

            foreach ($gengo as $value) { ?>
                <input type="radio" name="gengo" value=<?php echo $value ?> >
                <?php echo $value;
            }
        ?>

        <h2>③MySQLで情報を取得するためのコマンドは？</h2>

        <?php
            $comand = ["join", "select", "insert","update"];

            foreach ($comand as $value) { ?>
            <input type="radio" name="comand" value=<?php echo $value ?> >
            <?php echo $value;          
            }
        ?>
        <br>
              
        <input type="submit" value="回答する" />
    </form>

</body>
</html>

