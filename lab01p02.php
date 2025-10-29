<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="styl.css">
</head>

<body>
    <?php
    $od = 0;
    $do = 99;
    $ile = 204;
    ?>

    <?php
    $wiersze = 10;
    $kolumny = 15;
    echo "<table>";
    for ($i = 0; $i < $wiersze; $i++)
    {
        echo "<tr>";
        for ($j = 0; $j < $kolumny; $j++)
        {
            echo "<td>" . mt_rand($od, $do) . "</td>";
        }
        echo "</tr>";
    }
    ?>

</body>

</html>