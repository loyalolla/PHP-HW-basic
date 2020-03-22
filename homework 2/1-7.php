<?php

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
значения. Затем написать скрипт, который работает по следующему принципу:
a. если $a и $b положительные, вывести их разность;
b. если $а и $b отрицательные, вывести их произведение;
c. если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.*/

$a = rand(-1000,1000);
$b = rand(-1000,1000);

echo "a = $a<br>b = $b<br>";

if ($a >= 0 && $b >= 0) {
    echo "a - b = " . ($a-$b);
} elseif ($a < 0 && $b < 0) {
    echo "a * b = " . ($a*$b);
} else {
    echo "a + b = " . ($a+$b);
}



/*2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
switch организовать вывод чисел от $a до 15.*/

$a = rand(0,15);
$b = "<br>";

echo "a = $a" . $b;

switch ($a) {
    case 0:
        echo "0" . $b;
    case 1:
        echo "1" . $b;
    case 2:
        echo "2" . $b;
    case 3:
        echo "3" . $b;
    case 4:
        echo "4" . $b;
    case 5:
        echo "5" . $b;
    case 6:
        echo "6" . $b;
    case 7:
        echo "7" . $b;
    case 8:
        echo "8" . $b;
    case 9:
        echo "9" . $b;
    case 10:
        echo "10" . $b;
    case 11:
        echo "11" . $b;
    case 12:
        echo "12" . $b;
    case 13:
        echo "13" . $b;
    case 14:
        echo "14" . $b;
    case 15:
        echo "15" . $b;
}


/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.*/

$a = rand(1,10);
$b = rand(1,10);
$c = "<br>";

echo "a = $a<br>b = $b<hr>";

function addition($a, $b) {
    return $a + $b;
}

function subtraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    return $a / $b;
}

echo "a + b = $a + $b = " . addition($a, $b) . $c;
echo "a - b = $a - $b = " . subtraction($a, $b) . $c;
echo "a * b = $a * $b = " . multiplication($a, $b) . $c;
echo "a / b = $a / $b = " . division($a, $b) . $c;

/*4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где
$arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от
переданного значения операции выполнить одну из арифметических операций (использовать
функции из пункта 3) и вернуть полученное значение (использовать switch).*/

$arg1 = rand(0,9);
$arg2 = rand(0,9);
$operations = array("+", "-", "*", "/");
$operation = $operations[rand(0,3)];

echo "arg1 = $arg1<br>arg2 = $arg2<br>operation = $operation<hr>";

function addition($a, $b) {
    return $a + $b;
}

function subtraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            return addition($arg1, $arg2);
        case "-":
            return subtraction($arg1, $arg2);
        case "*":
            return multiplication($arg1, $arg2);
        case "/":
            return division($arg1, $arg2);
    }
}

echo "arg1 $operation arg2 = $arg1 $operation $arg2 = " . mathOperation($arg1, $arg2, $operation);


/*
 * 6. (*) С помощью рекурсии организовать функцию возведения числа в степень.
 * Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
 */

/*Вариант дробной степени не рассматривал*/

function power($val, $pow)
{
    /*Число в нулевой степени = 1*/
    if ($pow == 0) return 1;
    /*На ноль делить нельзя = Бесконечность*/
    if ($val == 0 && $pow < 1) return INF;
    /*Ноль в любой степени = ноль*/
    if ($val == 0) return 0;
    /*Отрицательная степень*/
    if ($pow < 1) return power(1 / $val, -$pow);
    return $val * power($val, $pow - 1);
}

/*Тестирование*/
for ($i = 0; $i < 5; $i++) {
    $val = rand(-9, 9);
    $pow = rand(-9, 9);
    echo "val = $val<br>pow = $pow<br>";
    echo "Проверка функции pow: " . pow($val, $pow) . "<br>";
    // PHP 5.6 и выше - ($a ** $b)
    echo "Проверка операции \"**\": " . ($val ** $pow) . "<br>";
    echo "Рекурсия: " . "val ^ pow = $val ^ $pow = " . power($val, $pow) . "<hr>";
}


/*
 * 7. (*) Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
 * 22 часа 15 минут
 * 21 час 43 минуты
 */

/* Часы */
function hourToString($hour)
{
    if ($hour == 1 || $hour == 21) {
        $hourText = "час";
    } elseif (($hour >= 2 && $hour <= 4) || ($hour >= 22 && $hour <= 24)) {
        $hourText = "часа";
    } else {
        $hourText = "часов";
    }
    return $hourText;
}

/* Минуты */
function minuteToString($minute)
{
    /* Алгоритм: 1, 21, 31, 41, 51 - всегда будет "минута".
     * Если младший разряд больше 1-го и меньше 5, при этом само число при делении на 100
     * имеет остаток больше 20 (то есть, например, не число 12 и не 112), то будут "минуты".
     * В остальных случаях "минут".
    */

    if (strlen($minute) < 2) {
        $minute = "0" . $minute;
    }

    $m = substr($minute, 1, 1);

    if ($m == 1 && $minute != 11) {
        $minuteText = "минута";
    } elseif (($minute > 1 && $minute < 5)
        || (($m > 1 && $m < 5) && (($minute % 100) > 20))
    ) {
        $minuteText = "минуты";
    } else {
        $minuteText = "минут";
    }

    return $minuteText;
}

/* Итог: Часы + Минуты */
function timeToString($hour, $minute)
{
    if ((!is_numeric($hour) || !is_numeric($minute))
        || ($hour < 0 || $hour > 24) || ($minute < 0 || $minute > 60)
    ) {
        $result = "Неверные исходные данные";
    } else {
        $result = "$hour " . hourToString($hour) . " $minute " . minuteToString($minute);
    }
    return $result;
}

/* Тестирование */
for ($i = 0; $i < 10; $i++) {
    $h = rand(0, 23);
    $m = rand(0, 59);

    $randH = time() + (7 * $h * 60 * 60);
    $randM = time() + (7 * 24 * $m * 60);

    $hour = date("H", $randH);
    $minute = date("i", $randM);
    echo "Исходные данные: $hour:$minute<br>";
    echo "Преобразованные:  " . timeToString($hour, $minute) . "<hr>";
}
