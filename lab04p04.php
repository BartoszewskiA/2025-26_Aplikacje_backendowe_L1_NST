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
    if (isset($_POST['user']) && !empty($_POST['user'])) {
        $_SESSION['user'] = $_POST['user'];
    } 
    if(isset($_POST['wyloguj']))
    {
        unset($_SESSION['user']);
    }
    ?>

    <?php
    if (isset($_SESSION['user'])) {
        $zalogowany = $_SESSION['user'];
        echo "<h3>Witaj $zalogowany.</h3>";
        echo '<form action="" method="post">';
        echo '<input type="hidden" name="wyloguj" />';
        echo '<input type="submit" value="Wyloguj się" />';
        echo '</form>';
    } else {
        echo '<form action="" method="post">';
        echo '<input type="text" name="user" />';
        echo '<input type="submit" value="Zaloguj się" />';
        echo '</form>';
    }
    ?>
</body>

</html>