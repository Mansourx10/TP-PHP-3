<?php
session_start();

	if(isset($_POST["Nom"]) && isset($_POST["pwd"])){
		

		if(empty($_POST["Nom"]) && empty($_POST["pwd"]))
		{
			
			$_SESSION["info"] = "Veuillez remplir les champs!";

			header("location: ../view/inscription.php");
		}else{

			$nom = htmlspecialchars($_POST["Nom"]);
			$pwd = htmlspecialchars($_POST["pwd"]);
			$pwdC = sha1($pwd);
			$lignes[] = array($nom, $pwdC);
      		$chemin = "fichier.csv";
      		$delimiteur = ',';
      		$fichier_csv = fopen($chemin, 'a+');

      		foreach($lignes as $ligne)
	      		{
	        		fputcsv($fichier_csv, $ligne, $delimiteur);
	      		}
      		fclose($fichier_csv);

      		$_SESSION["info"] = "Success";

      		header("location: ../view/inscription.php");
		}
	}

	

?>