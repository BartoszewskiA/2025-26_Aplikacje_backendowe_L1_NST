<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <?php
    // echo "<pre>";
    // echo print_r($_GET);
    // echo "</pre>";
    if(isset($_GET['pelnoletni']))
    {
        $user = $_GET['user'];
        echo "<h3>Witaj $user</h3>";
    }
    else
    {
        echo "<p>nie jesteś pełnoletni</p>";
    }
    ?>
  </body>
</html>