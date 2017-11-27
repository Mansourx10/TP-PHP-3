<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Page de connexion</h2>
  <form class="form-inline" action="Controle/controleConnexion.php" method="post">
    <div class="form-group">
      <label for="Nom">Nom:</label>
      <input type="texte" class="form-control" id="Nom" placeholder="Entre votre nom d'utilisateur" name="Nom">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Entre votre mot de passe" name="pwd">
    </div>
  
    <button type="submit" class="btn btn-default">Envoyer</button>
  </form>
</div>
<div class="contenaire">
<?php

  if(isset($_SESSION["info"]) && !empty($_SESSION["info"]))
    {
      echo $_SESSION["info"];
    }

?>
</div>
</body>
</html>
