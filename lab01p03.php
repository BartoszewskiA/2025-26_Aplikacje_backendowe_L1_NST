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

    <div>
        <h2>Losowanie</h2>
        <?php
        $liczby = [];
        for ($i = 0; $i < $ile; $i++) {
            $liczby[] = mt_rand($od, $do);
        }
        ?>
    </div>


    <?php

    $kolumny = 15;
    $wiersze = ceil(count($liczby) / $kolumny);
    echo "<table>";
    for ($i = 0; $i < $wiersze; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $kolumny; $j++) {
            $index = $i * $kolumny + $j;
            if ($index < count($liczby)) {
                echo "<td>", $liczby[$index], "</td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    ?>

</body>

</html>