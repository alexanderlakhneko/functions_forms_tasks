<?php
function getCommonWords($a, $b){
    $c = explode(' ', $a);
    $d = explode(' ', $b);
    foreach ($c as $u){
        foreach ($d as $v){
            if ($u === $v){
                $w[] = $u;
            }
        }
    }
    if (isset($w)){
        return $w;
    }
    else {
        return 'Нет совпадений!';
    }
}
$a = $_POST['a'];
$b = $_POST['b'];
$w = getCommonWords($a, $b);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>1</title>
    </head>
    <body>
        <form action="1.php" method="post">
            <div>
                <label for="first">First</label><br>
                <textarea name="a" id="first"></textarea>
            </div>
            <div>
                <label for="second">Second</label><br>
                <textarea name="b" id="second"></textarea>
            </div>
            <div>
                <input type="submit" value="Проверка">
            </div>
            <div>
                <?php if(isset($w)): ?>
                <p>Результат: <?php print_r($w) ?> </p>
                <?php endif ?>
            </div>
        </form>
    </body>
</html>
