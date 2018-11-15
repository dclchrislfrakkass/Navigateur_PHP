<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Navigateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>

<body onload="reloadNavigation()">
    <form class="recherche" type="text" value="faite votre recherche">
        <input id="champ" type="text" value="rechercher"> 
    </form>
    
<div id="navigation">
    <?php include 'accueil.php'; ?>

</div>

<!-- <script>
    function reloadNavigation() {
    setInterval(function(){  $("#navigation").load('accueil.php'); }, 4000);
}
</script> -->


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
    <script src="main.js"></script>
</body>

</html>