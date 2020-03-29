<?php
header("Content-type:text/html; charset=utf-8");

/*
 * 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
 *
 * Функцию strtr() использовать запрещено!
 */

function replaceSpace($phrase){
    return preg_replace('/\s/',  '_', $phrase);
    }

echo replaceSpace('Все пробелы заменены');
