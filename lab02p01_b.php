<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo "<pre>";
    // echo print_r($_GET);
    // echo "</pre>";

    if(isset($_GET['imie']) && isset($_GET['nazwisko']))
    {
        $imie = $_GET['imie'];
        $nazwisko = $_GET['nazwisko'];
        if (!empty($imie) || !empty($nazwisko))
            echo "<h3>Witaj $imie $nazwisko!</h3>";
        else
            echo "<h3>Pracujesz jako gość</h3>";
    }
    else
        echo "<a href=lab02p01_a.html>Wróć do formularza</a>";
    
    ?>
</body>

</html>