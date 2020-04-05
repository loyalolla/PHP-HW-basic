<!DOCTYPE HTML>
<html>

<head>
    <title>Домашняя работа</title>
</head>

<body>
    <?php
        include_once('db_utils.php');
        $id =$_GET['id'];
        connect();
        $images_list = get_images();
        $src = "";
        if (isset($images_list[$id])) {
            $element = $images_list[$id];
            $src = $element['file_location'];
            $res = update_views($id);
        }
        disconnect();
    ?>
    <?php if ($src):?>
    <span> <?php echo $element["name"] ?> </span>
    <span>Views: <?php echo $element["views"] + 1 ?> </span>
    <img src="<?php echo $src ?>" alt="">
    <?php else:?>
    no such id
    <?php endif;?>
</body>

</html>
