<?php
function save_name($data){
    return file_put_contents('name_image.txt',serialize($data));
}
function get_name(){
    return unserialize(file_get_contents('name_image.txt'));
}
if (file_exists('name_image.txt')) {
    $result = get_name();
}
@mkdir("gallery", 0777);
if(isset($_POST['submit'])){
    $parts = explode(".", $_FILES['photo']['name']);
    $graphics = ["jpg","png","gif","bmp"];
    if(in_array($parts[count($parts)-1], $graphics))
    {
        $upload_dir = './gallery/';
        $upload_file = $upload_dir . basename($_FILES['photo']['name']);
        if (copy($_FILES['photo']['tmp_name'], $upload_file)){
            echo "<h3>Файл успешно загружен на сервер</h3>";
            $result[] = $_FILES["photo"]["name"];
            save_name($result);
        }
    }
    else
        echo "Wrong file type";

}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>6</title>
</head>
<body>
    <form action="6.php" method="post" enctype="multipart/form-data">
        <label for="photo[]">Photo</label>
        <input id="photo" type="file" name="photo">
        <input type="submit" value="Загрузить" name="submit">
    </form>
    <?php if(file_exists('name_image.txt')): ?>
    <table>
        <?php foreach($result as $b): ?>
        <tr>
            <td>
                <img src="<?php echo 'gallery' . DIRECTORY_SEPARATOR . $b; ?>"
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <?php endif ?>
</body>
