<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../../style/style.css" media="screen">
    <title>Лабораторная работа №2. Задание 2.</title>

    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
<div class="title">
    <h1 style="font-variant-caps: normal">
        Здание 2
    </h1>
    <h3>
        Создайте php-скрипт, который формирует web-страницу с таблицей умножения.
    </h3>
</div>

<div>
    <table>
        <thead>
        <tr>
            <th>&times;</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<th>' . $i . '</th>';
            }
            ?>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            for ($j = 1; $j <= 10; $j++) {
                echo '<td>' . $i * $j . '</td>';
            }
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
