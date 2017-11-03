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
  <h2>Liste des adherents</h2>
  
<?php
if(isset($_SESSION['Nom']) && !empty($_SESSION['Nom']))
{
  $row = 1;
  if (($fichiercsv = fopen("../Controle/fichier.csv", "r")) !== FALSE)
    {
        while (($data = fgetcsv($fichiercsv, 1000, ",")) !== FALSE)
        {
            //$num = count($data);
          $num = 1;
            echo "<p> $num champs à la ligne $row: <br /></p>\n";
            $row++;
            for ($c=0; $c < $num; $c++) 
            {
                echo $data[$c] . "<br />\n";
            }
        }
        fclose($fichiercsv);
    }

}
?>



</div>
<div class="container">
  <a href="inscription.php">
    <button class="btn btn-default">retour</button>
  </a>
</div>
<div class="container">
  <a href="../logout.php">
    <button class="btn btn-default">Deconnexion</button>
  </a>
</div>

</body>
</html>





