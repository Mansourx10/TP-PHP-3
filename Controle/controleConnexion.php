<?php
session_start();


        if(isset($_POST['Nom'], $_POST['pwd']))
        {
            if(!empty($_POST['Nom']) && !empty($_POST['pwd']))
            {
                
                $login = "non";
                $nom = htmlspecialchars($_POST["Nom"]);
                $pwd = htmlspecialchars($_POST["pwd"]);
                $pwd = sha1($pwd);
                $fichiercsv = fopen("fichier.csv", "a+");

                while($tableau = fgetcsv($fichiercsv,100,','))
                {
                    if($nom === $tableau[0] && $pwd === $tableau[1])
                    {
                        $_SESSION['Nom'] = $nom;
                        $login = "oui";
                        header("location: ../view/inscription.php");
                    }
                }
               
                if ($login === "non") 
                {
                    $_SESSION['info'] = "vous n'etes pas autoriser";
                    header("location: ../Index.php");  
                }
            }else
            {
                $_SESSION['info'] = "Veuillez remplir tout les champs!";
                header("location: ../Index.php");
            }
        }else
        {
            $_SESSION['info'] = "Veuillez remplir tout les champs!";
            header("location: ../Index.php");
        }
?>