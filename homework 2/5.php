<html>
<head>
    <title>Homework 2_5</title>
    <meta charset="utf-8">
</head>
<body>
<h1>5</h1>
<h3>Посмотреть на встроенные функции PHP.<br>
    Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</h3>
<?php
    $year = date('Y');
    echo <<<"html"
       <header style="height: 150px;background-color:blue;"></header>
<main style="height: 300px; background-color:red;">

</main>
<footer style="text-align: center; font-size: 30px"> $year Copyright</footer>
html;
?>
</body>
</html>
