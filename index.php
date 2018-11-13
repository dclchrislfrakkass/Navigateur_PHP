<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Navigateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>

<body>
    <form class="recherche" type="text" value="faite votre recherche">
        <input id="champ" type="text" value="rechercher"> 
    </form>
    
<div id="navigation">

<?php

$BASE = "./php explorer";

// pour vérifier que le dossier existe
	if($dossier = opendir($BASE))
	{
		// (false !==) permet de vérifier que la lecture n'a pas retournée d'erreur
		while(false !== ($fichier = readdir($dossier)))
		{ 
      if($fichier != '.' && $fichier != '..')
      {

      echo '<li><a href="' . $BASE . '/' . $fichier . '">' . $fichier . '</a></li>';

      $sousDossier = $BASE . '/' . $fichier;

      // echo $sousDossier;

      if (is_dir($sousDossier)) 
      {

        if ($dossier1 = opendir($sousDossier))
        {
          // (false !==) permet de vérifier que la lecture n'a pas retournée d'erreur
          while(false !== ($fichier1 = readdir($dossier1)))
          {
            if($fichier1 != '.' && $fichier1 != '..'){
      
            echo '<li id="contenuSousDossier"><a href="./php explorer/' . $fichier1 . '">'. $fichier1 . '</a></li>';
            }
          }
          closedir($dossier1);
        }
        else
        {
         echo 'Le dossier n\' a pas pu être ouvert';
        }
      }
    }
		}
		 
		closedir($dossier);
	}
 	else
	{
	 echo 'Le dossier n\' a pas pu être ouvert';
	}
?> 
?>






</div>









    <script src="main.js"></script>
</body>

</html>
