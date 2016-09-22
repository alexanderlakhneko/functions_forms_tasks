<?php
function save_text($text){
    $f = fopen('text_for_7.txt', 'a');
    fwrite($f, $text . '<br>');
    return;
}
function get_text(){
    return file_get_contents('text_for_7.txt');
}
if (isset($_POST['text'])){
    save_text($_POST['text']);
}
if (file_exists('text_for_7.txt')){
    echo get_text();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>7</title>
</head>
<body>
<form action="7.php" method="post">
    <label for="text">Введите комментарий</label><br>
    <textarea id="text" name="text"></textarea><br>
    <input type="submit" value="Оставить комент">
</form>
</body>
</html>