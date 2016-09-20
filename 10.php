<?php
function unique($a){
    $b = explode(' ',$a);
    return count(array_unique($b));
}
if(isset($_POST['text'])){
    $a = $_POST['text'];
    echo unique($a);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
<form action="10.php" method="post">
    <label for="text">Введите текст</label><br>
    <textarea name="text" id="text"></textarea><br>
    <input type="submit">
</form>
</body>
</html>