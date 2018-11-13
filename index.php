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
    <form class="recherche" type="text">
        <input id="champ" type="text" value="rechercher"> 
    </form>
    

<div id="navigation">


<?php
$nb_fichier = 0;
$nomDossier = getcwd('.');

echo getcwd()."\n".'<br/>';
echo '<ul>';

if ($dossier = opendir('./Sources/php explorer')) {
    while (false !== ($fichier = readdir($dossier))) {
        ++$nb_fichier;
        echo '<li><a href="./Sources/php explorer/'.$fichier.'">'.$fichier.'</a></li>';
    }
    echo '</ul><br />';
    echo 'Il y a <strong>'.$nb_fichier.'</strong> fichier(s) dans le dossier.';

    closedir($dossier);
} else {
    echo 'Le dossier n\' a pas pu être ouvert';
}

?>

<h1>Methode 2</h1>

    <script src="main.js"></script>
</body>

</html>
