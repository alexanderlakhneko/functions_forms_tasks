<?php
function long($a){
    $b = explode(' ', $a);
    if (count($b) < 3){
        $res = 'Недостаточно значений';
    }
    else {
        foreach ($b as $c) {
            $d[] = mb_strlen($c);
        }
        $res = '';
        for ($i = 0; $i < 3; $i++) {
            $f = array_search(max($d), $d);
            $res .= $i+1 . ' позиция ' . $b[$f] . '<br>';
            $d[$f] = NULL;
        }
    }
    if (isset($res)){
        return $res;
    }
    else{
        return 'Отсутствуюют значения';
    }
}
if (isset($_POST['a'])){
    $a = $_POST['a'];
    $res = long($a);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>
<form action="2.php" method="post">
    <div>
        <label for="one">Введите информацию сюда</label><br>
        <textarea name="a" id="one"></textarea>
    </div>
    <div>
        <input type="submit" value="Проверка">
    </div>
    <div>
        <?php if(isset($res)): ?>
        <p>Результат <?php echo $res ?></p>
        <?php endif ?>
    </div>
</form>
</body>
</html>
