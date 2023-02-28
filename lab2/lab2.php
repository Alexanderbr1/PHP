<html>

<head>

    <title>

        Тестируем PHP

    </title>

</head>

<body>
<header>
    <img alt="logo" src="https://iq2u.ru/upload/blog_files/2022/10/12/13/32/8TOmy3/Mospolite.png" width="327">
    <h1 style="text-align: center">Hello, World!(Lab1)</h1>
</header>
<main>
    <?php
    foreach (range(0, 12) as $number) {
        echo $number . PHP_EOL;
        echo 'Hello, World!' . PHP_EOL;
        echo '<br>';
    }
    ?>

</main>
<footer>
    <p style="text-align: center; font-size: 40px">Выполнил Брянцев Александр</p>
</footer>
</body>

</html>
