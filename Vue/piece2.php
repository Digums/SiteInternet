<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=athom;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

<html>

<head>
    <link rel="stylesheet" href="">
</head>

<body>
<div class="newcapteur">
    <fieldset id="formulaire">
        <legend>Vous voulez ajouter une maison?</legend>
        <form method="post" action="../Modele/creationmaison.php">
            <p>L'addresse de votre nouveau logement :</p>
            <input type="submit" id="sent" value="Ajouter">
        </form>
    </fieldset>
</div>
</body>
</html>