<?php

$link = NULL;

function connect() {
    global $link;
    $link = mysqli_connect('127.0.0.1', 'root', '123', 'gb');

}

function disconnect() {
    global $link;
    mysqli_close($link);
}

function get_images() {
    global $link;
    $sql = "SELECT ID, name, file_location, size, views FROM images_info";
    $result = mysqli_query($link, $sql);
    $data = array();

    while(($row = mysqli_fetch_assoc($result))) {
        $data[$row["ID"]] = $row;
    }
    return $data;
}
function update_views($id){
    if ($id) {
        $sql="UPDATE images_info SET views = views + 1 WHERE ID = $id";
        global $link;
        $result = mysqli_query($link, $sql);
        return $result;
    }

    return false;
}

?>
