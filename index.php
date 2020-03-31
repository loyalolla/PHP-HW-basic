<?php

//ob_start();
//include '1.php';
//$a = ob_get_clean();

//var_dump(file_exists('log.txt'));

//copy('log.txt', 'ads');

$file = 'ads';
//if (file_exists($file)) {
//    unlink($file);
//}
//@unlink($file);

var_dump(scandir(dirname(__DIR__, 1)));