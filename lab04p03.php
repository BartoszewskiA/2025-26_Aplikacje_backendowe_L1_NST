<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['notatka']) && !empty($_GET['notatka'])) {
        $tresc = $_GET['notatka'];
        $_SESSION['notatka'] = $tresc;
    }
    ?>
    <h3>Notatka:</h3>
    <?php
    if (isset($_SESSION['notatka'])) {
        echo "<p>" . $_SESSION['notatka'] . "</p>";
    } else {
        echo "<p>Brak notatki</p>";
    }
    ?>
    <form action="" method="get">
        <textarea cols="40" rows="5" name="notatka"></textarea>
        <br>
        <input type="submit" value="Zostaw notatkę" />
    </form>
</body>

</html>