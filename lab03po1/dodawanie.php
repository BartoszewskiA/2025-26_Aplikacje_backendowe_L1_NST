<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['wpis']) && !empty(trim($_POST['wpis'])))
    {
        $temp = trim($_POST['wpis'])."{Nw}\n";
        file_put_contents('forum.txt',$temp, FILE_APPEND);
        echo "<h3>Dziękujemy za dodanie wpisu</h3>";
        echo "<p><a href=\"index.php\">Powrót do forum</p>";
    }else
    {
        echo "Post nie może być pusty. ";
        echo "<a href=\"form.php\">Powrót do formularza</a>";
    }
    ?>
</body>
</html>