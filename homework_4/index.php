<!DOCTYPE HTML>
<html>
<head>
    <title>Домашняя работа</title>
</head>
<body>
<?php
$dir = 'gallery_img/big/';
$images = scandir($dir);
for ($i = 0; $i < count($images); $i++) {
    if ($images[$i] != '.' && $images[$i] != '..') {
        echo '<a href="' . $dir . $images[$i] . '" target="_blank"><img src=' . $dir . $images[$i] . ' style="width: 200px;"></a>';
    }
};?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>
