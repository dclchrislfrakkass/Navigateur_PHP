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
function list_dir($name, $level = 0)
{
    if ($dir = opendir($name)) {
        while ($file = readdir($dir)) {
            for ($i = 1; $i <= (4 * $level); ++$i) {
                echo '&nbsp;';
            }
            echo "$file<br>\n";
            if (is_dir($file) && !in_array($file, array('.', '..'))) {
                list_dir($file, $level + 1);
            }
        }
        closedir($dir);
    }
}
list_dir('.');
?>






</div>









    <script src="main.js"></script>
</body>

</html>