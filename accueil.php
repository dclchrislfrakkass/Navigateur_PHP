<!--  liste le répertoire et ses sous-dossiers -->
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />

<?php

// $dir = répertoire à scanner
$dir = './php explorer';

// Run the recursive function
$response = scan($dir);

// This function scans the files folder recursively, and builds a large array

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
}

?> 
