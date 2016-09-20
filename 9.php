<?php
function reverse($a){
    $b = array_reverse(str_split($a));
    return implode('',$b);

}
if(isset($_POST['text'])){
    $a = $_POST['text'];
    echo reverse($a);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
<form action="9.php" method="post">
    <label for="text">Введите текст</label><br>
    <textarea name="text" id="text"></textarea><br>
    <input type="submit">
</form>
</body>
</html>
