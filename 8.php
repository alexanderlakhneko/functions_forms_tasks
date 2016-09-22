<?php
function save_text($text){
    $f = fopen('file_for_8.txt', 'a');
    fwrite($f,$text . '<br>' . PHP_EOL);
    return;
}
function get_text(){
    return file_get_contents('file_for_8.txt');
}
$pattern = '@<\/?[^/b?][a-zA-Z0-9]+>|<\/?b[a-zA-Z0-9]+>@';
$mat = ['xxx', 'xx']; // Перечень запрещенных слов после которых будет выводится сообщение о некорректном комментарии
if (isset($_POST['text'])){
    $a = $_POST['text'];
    foreach ($mat as $m){
        if (stristr($a, $m)){
            echo "Некорректный комментарий";
            exit();
        }
    }
    if(preg_match($pattern, $a, $m)){
       $a = preg_replace($pattern,'', $a);
    }
    save_text($a);
}
if (file_exists('file_for_8.txt')){
    echo get_text();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<form action="8.php" method="post">
    <label for="text">Введите комментарий</label><br>
    <textarea id="text" name="text"></textarea><br>
    <input type="submit" value="Оставить комментарий">
</form>
</html>
