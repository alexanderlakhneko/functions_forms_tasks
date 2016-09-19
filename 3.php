<?php
$b = file_get_contents('3.txt');
$a = $_POST['a'];
$arr = explode(' ', $b);
foreach ($arr as $key => $c){
    if (mb_strlen($c) > $a){
        unset($arr[$key]);
    }
}
file_put_contents('3_new.txt', implode(' ', $arr));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>
    <form action="3.php" method="post">
        <label for="one">Максимальная длинна слов</label><br>
        <input type="number" name="a" id="one">
        <input type="submit" value="Проверка">
    </form>
</body>
</html>
