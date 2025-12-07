<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Forum</h2>
    <?php
    $adres = "forum.txt";
    if (file_exists($adres)) {
        $wpisy_string = file_get_contents($adres);
        $wpisy_array = explode("{Nw}", $wpisy_string);
        // echo "<pre>";
        // echo print_r($wpisy_array);
        // echo "</pre>";
        foreach ($wpisy_array as $wpis) {
            $wpis_format = trim($wpis);
            if (!empty($wpis_format)) {
                echo "<p>" . $wpis_format . "</p>";
                echo "<hr>";
            }
        }
    } else {
        echo "<p>Dodaj pierwszy wpis</p>";
    }
    ?>

    <form action="form.php" method="post">
        <input type="hidden" name="send" />
        <input type="submit" value="Dodaj post" />

    </form>
</body>

</html>