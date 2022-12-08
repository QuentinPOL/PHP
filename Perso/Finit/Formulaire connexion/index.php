<!DOCTYPE html>

<html>

<!-- Head -->
<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <meta name="description" content="Page de Connexion"/>

  <meta name="keywords" content="NULL">

  <meta name="author" content="DJquinquin"/>

  <title>Page de Connexion</title>

  <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
  <div id="container">
  <!-- zone de connexion -->
      <form action="verifcation.php" method="POST">
        
          <h1>Connexion</h1>
                
          <label>Nom d'utilisateur</label>
          <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" value="" required>

          <label>Mot de passe</label>
          <input type="password" placeholder="Entrer le mot de passe" name="password" value="" required>
          <?php
            function lrenvoie_id($login, $password) {
              if ($login == "Quentin" and $password == "1234") {
                header("Location: accueil.php");
              }
              else {
                echo "<p style='color:red;text-align:center;margin-left:30px;'>Mot de passe ou Nom d'utilisateur incorrect !</p>";
              }
            }
          ?>
          <input type="submit" id='submit' name="connexion" value='SE CONNECTER'>
      </form>
    </div>
</body>

</html>