<?php

Function Accepted(){
    include("session-list.php");
    $bop = $answers;

    $i = count($bop);
    $d = 1;
    While ($i > 0){
        echo ('<br> Тест №'.$d.'');
        echo '<form action="">
<input type="submit" value="добавить">
</form><br>';
        echo '<form action="">
<input type="submit" value="изменить">
</form><br>';
        echo '<form action="">
<input type="submit" value="удалить">
</form><br>';
        $d+=1;
        $i-=1;
    }
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
Accepted();
?>
</body>
</html>
