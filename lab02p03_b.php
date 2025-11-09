<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (
        empty($_GET['a']) ||
        empty($_GET['b']) ||
        empty($_GET['c']) ||
        !is_numeric($_GET['a']) ||
        !is_numeric($_GET['b']) ||
        !is_numeric($_GET['c'])
    ) {
        echo 'Brak danych. <a href="lab02p03_a.html">Powrót</a>';
        exit();
    }
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $delta = $b * $b - 4 * $a * $c;
    echo "<p>delta = $delta</p>";
    if ($delta > 0) {
        $x1 = (-$b - sqrt($delta) / (2 * $a));
        $x2 = (-$b + sqrt($delta) / (2 * $a));
        $x1 = round($x1,5);
        $x2 = round($x2, 5);
        echo "<p>x1= $x1 <br>x2= $x2</p>";
    } elseif($delta === 0) {
        $x0 = round((-$b - sqrt($delta) / (2 * $a)),5);
        echo "<p>x0= $x0</p>";
    } else
    {
        echo "<p>Brak rozwiązań</p>";
    }


    ?>
</body>

</html>