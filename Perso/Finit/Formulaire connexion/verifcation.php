<!DOCTYPE html>

<html>

<!-- Head -->
<head>

  <meta charset="UTF-8">

  <meta name="description" content="Page de Verif"/>

  <meta name="author" content="DJquinquin"/>

</head>

<body>
    <?php
    include("index.php");

    $login = $_POST['login'];
    $password = $_POST['password'];

    echo lrenvoie_id($login, $password);
    ?>
</body>

</html>