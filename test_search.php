
<?php
    /**
     * Recherche d'un fichier dans un dossier et son arborescence.
     *
     * @param string $dir      dossier a chercher
     * @param string $filename nom du fichier a chercher
     *
     * @return string chemin complet du fichier ou bool false si introuvable
     */
    function searchFile($dir, $filename)
    {
        //si pas de slash final on l'ajoute
        $last = $dir[strlen($dir) - 1];
        if ($last != '/' && $last != '\\') {
            $dir .= '/';
        }
        //chargement dossier
        if (is_dir($dir)) {
            $filelist = new DirectoryIterator($dir);
            //on boucle le contenu
            foreach ($filelist as $file) {
                //si . ou .. on zappe
                if ($file->isDot()) {
                    continue;
                }
                //si dir on explore
                if ($file->isDir()) {
                    //si on trouve on renvoi
                    if ($res = searchFile($dir.$file->getFilename(), $filename)) {
                        return $res;
                    //sinon on continue
                    } else {
                        continue;
                    }
                } else {
                    //si on a un fichier correspondant ï¿½ ce qu'on cherche, on le renvoi
                    if ($file->getFilename() == $filename) {
                        return $dir.$file->getFilename();
                    }
                }
            }
        } else {
            return '<br/>Dossier '.$dir.' inexistant';
        }
    }
?>
