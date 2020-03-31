<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-5">
    <link rel="stylesheet" href="style.css">
</head>

<?php
$menu = [
	["name" => "Главная"],
	[
		"name" => "Новости",
		"submenu" => [
			["name" => "Новости о спорте"],
			["name" => "Новости о политике"],
			["name" => "Новости о мире"],
		]
	],
	["name" => "Контакты"],
	["name" => "Справка"]
];

// var_dump($menu);

?>

<body>
    <header>
        <nav>
            <?php foreach($menu as $value): ?>
                <div>
                    <a><span><?php echo $value["name"]?></span></a>
                    <?php if (isset($value["submenu"])):?>
                        <div>
                            <?php foreach($value["submenu"] as $value2): ?>
                                <a><?php echo $value2["name"]?></a>
                            <?php endforeach?>
                        </div>
                    <?php endif?>

                </div>

            <?php endforeach?>
        </nav>
    </header>
    <h1>Заголовок</h1>
    <p>Информация</p>

</body>

</html>
