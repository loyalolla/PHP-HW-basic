<?php
$target_dir = "gallery_img/big/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Это изображение - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "Это не изображение<br>";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Такое изображение уже загружено<br>";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Слишком большое изображение<br>";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Неправильный формат изображения. Допускается JPG PNG JPEG GIF<br>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Файл не был загружен";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Файл". basename( $_FILES["fileToUpload"]["name"]). "загружен<br>";
    } else {
        echo "Ошибка при загрузке файла<br>";
    }
}
