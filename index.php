

<?php

$BASE = "./php explorer";

// pour vérifier que le dossier existe
	if($dossier = opendir($BASE))
	{
		// (false !==) permet de vérifier que la lecture n'a pas retournée d'erreur
		while(false !== ($fichier = readdir($dossier)))
		{ 
      // Pour eliminer les dossiers racine . et ..
      if($fichier != '.' && $fichier != '..')
      {

      echo '<li><a href="' . $BASE . '/' . $fichier . '">' . $fichier . '</a></li>';

      $sousDossier = $BASE . '/' . $fichier;

        if ($dossier1 = opendir($sousDossier))
        {
        // (false !==) permet de vérifier que la lecture n'a pas retournée d'erreur
          while(false !== ($fichier1 = readdir($dossier1)))
          {
            if($fichier1 != '.' && $fichier1 != '..')
            {
        
            $nouveauChemin = $BASE . '/' . $fichier . '/' . $fichier1;
  
            echo '<li id="contenuSousDossier"><a href="' . $nouveauChemin . '">'. $fichier1 . '</a></li>';
            }
          }
          closedir($dossier1);
        }

    }
	}	 
	closedir($dossier);
  }

?> 

