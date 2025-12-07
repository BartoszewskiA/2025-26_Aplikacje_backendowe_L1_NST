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
        setcookie('notatka', $tresc, time() + 30 * 24 * 60 * 60);
    }
    ?>
    <h3>Notatka:</h3>
    <?php
    if (isset($_COOKIE['notatka'])) {
        echo "<p>" . $_COOKIE['notatka'] . "</p>";
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