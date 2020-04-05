<!DOCTYPE HTML>
<html>
<head>
    <title>Домашняя работа</title>
</head>
<body>
<?php
include_once('db_utils.php');

connect();

$images_list = get_images();
disconnect();


foreach ($images_list as $key => $value) {
    $path = $value['file_location'];
    echo '<a href="image.php?id=' . $key . '" target="_blank"><img src=' . $path . ' style="width: 200px;"></a>';
}
?>

</body>
</html>
