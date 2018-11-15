<!--  liste le répertoire et ses sous-dossiers -->
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />

<?php

// $dir = répertoire à scanner
$dir = "./php explorer";

// This function scans the files folder recursively, and builds a large array

<<<<<<< HEAD
function scan($dir){

  // variable qui va recuperer le tableau

	$tableau = array();

	// recherche des fichiers ou des folders

	if(file_exists($dir)){
	
		foreach(scandir($dir) as $f) {
		
			if(!$f || $f[0] == '.') {
				continue; // Ignore hidden files
			}

			if(is_dir($dir . '/' . $f)) {

				// The path is a folder

				$tableau[] = array(
					'name' => $f,
					'type' => "folder",
					'path' => $dir . '/' . $f,
          			'status' => "0", // indique que répertoire et que fermé
				);

				$x=count($tableau);
				$x--;
				$NomSousTab = 
				scanSousRep($tableau[$x]['path'], $tableau[$x]['name']);
			}
			
			else {

				// It is a file

				$tableau[] = array(
					'name' => $f,
					'type' => "file",
					'path' => $dir . '/' . $f,
					// "size" => filesize($dir . '/' . $f) // Gets the size of this file
        		);
      		}
		}
	}




	$nbLigne=count($tableau);
	//Parcours du tableau et affiche des <li>
	for ($i = 0; $i <= $nbLigne; $i++)
	{
		if ($tableau[$i]['type']=="file")
		{
	  	echo '<li>'.$tableau[$i]['name'].'<input id="bouton" type="button" value="Télécharger"/></li>'; 
		}
		else {
		  echo '<li><a href="' . $tableau[$i]['path'] . '">' . $tableau[$i]['name'] . '</a></li>'; 
		  // on passe sur le tableau du sous dossier
			
		// 	$tab1 = $tableau[$i]['name'];

			
		// 	echo '<pre>';
		// 	print_r ($tab1);
		// 	echo '<pre>';
		//   	$nbLigne1 = count($tab1);
		//   	echo $nbLigne1;
		//   	//Parcours du tableau et affiche des <li>
		//   	for ($j = 0; $j <= $nbLigne1; $j++)
		//   	{
		// 	  if ($tab1[$j]['type']=="file")
		// 	  {
		// 		echo '<li>'.$tab1[$j]['name'].'<input id="bouton" type="button" value="Télécharger"/></li>'; 
		// 	  }
		// 	  else {
		// 		echo '<li><a href="' . $tab1[$j]['path'] . '">' . $tab1[$j]['name'] . '</a></li>'; 
	  
		// 	  }
		//   }

		}
	}

}

//Creation tableau pour sous-répertoire
function scanSousRep($nomDir, $nomTab){

	// variable qui va recuperer le tableau
  
	  $nomTab = array();
  
	  // recherche des fichiers ou des folders
  
	  if(file_exists($nomDir)){
	  
		  foreach(scandir($nomDir) as $f) 
		  {
		  
			  if(!$f || $f[0] == '.') 
			  {
				  continue; // Ignore hidden files
			  }
  
			  if(is_dir($nomDir . '/' . $f)) 
			  {
				  // The path is a folder
  
				  $nomTab[] = array(
					  	'name' => $f,
					  	'type' => "folder",
					  	'path' => $nomDir . '/' . $f,
						'status' => "0", // indique que répertoire et que fermé
				  );				   	
			  }		  
			  else 
			  {
				  // It is a file
  
				  $nomTab[] = array(
					  'name' => $f,
					  'type' => "file",
					  'path' => $nomDir . '/' . $f,
					  // "size" => filesize($dir . '/' . $f) // Gets the size of this file
		  				);
				}
		  	}
	  	}

// print_r ($nomTab);
// echo count($nomTab);
=======
function scan($dir)
{
    // variable qui va recuperer le tableau

    $tableau = array();

    // recherche des fichiers ou des folders

    if (file_exists($dir)) {
        foreach (scandir($dir) as $f) {
            if (!$f || $f[0] == '.') {
                continue; // Ignore hidden files
            }

            if (is_dir($dir.'/'.$f)) {
                // The path is a folder

                $tableau[] = array(
                    'name' => $f,
                    'type' => 'folder',
                    'path' => $dir.'/'.$f,
                    //'items' => scan('path'. '/'),
                    'status' => '0', // indique que répertoire et que fermé
                );
            } else {
                // It is a file

                $tableau[] = array(
                    'name' => $f,
                    'type' => 'file',
                    'path' => $dir.'/'.$f,
                    // "size" => filesize($dir . '/' . $f) // Gets the size of this file
                );
            }
        }
    }

    $nbLigne = count($tableau);
    //Parcours du tableau et affiche des <li>
    for ($i = 0; $i <= $nbLigne; ++$i) {
        if ($tableau[$i]['type'] == 'file') {
            echo '<li>'.$tableau[$i]['name'].'<input id="button" type="button" value="Télécharger"/></li>';
        } else {
            echo '<li><a href="'.$tableau[$i]['path'].'">'.$tableau[$i]['name'].'</a></li>';
        }
    }

    echo '<br/><div id="REP"> Répertoire en cours : '.$dir.'</div>';

    //Affichage d'un sous répertoire
>>>>>>> 83cd8d0fde2f6a18ebcc916b8359b90712926473
}

// Appel de la fonction
scan($dir);

// Appel de l'affichage


?> 
