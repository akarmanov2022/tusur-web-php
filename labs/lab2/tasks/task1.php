<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../../style/style.css" media="screen">
    <title>Лабораторная работа №2. Задание 1.</title>

    <style>
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="title">
    <h1 style="font-variant-caps: normal">
        Здание 1
    </h1>
    <h3>
        Создайте php-скрипт, который создает страницу с таблицей возможных цветов HTML.<br>
        В теле цикла с произвольным шагом(чтобы всю палитру не распечатывать) выводить текст, содержащий код цвета.<br>
        Цвет текста задавать этим же кодом.
    </h3>
</div>

<div>
    <table>
        <thead>
        <tr>
            <th>Цвет</th>
            <th>Код</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $start = hexdec("000000");
        $end = hexdec("FFFFFF");

        for ($i = $start; $i <= $end; $i += 1000000) {
            $color = sprintf("#%06X", $i);
            echo "<tr>";
            echo "<td style='background-color: $color;'></td>";
            echo "<td>$color</td>";
            echo "</tr>";
        }

        ?>
        </tbody>
    </table>
</div>
</body>
</html>
