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
            <p><label>Addresse </label><input type="text" name="addresse"></p>
            <p><label>Complement d'addresse </label><input type="text" name="complement"></p>
            <p><label>Code Postal </label><input type="text" name="codep"></p>
            <p><label>Ville </label><input type="text" name="ville"></p>
            <p><label>Superficie de votre maison </label><input type="text" name="superficie"></p>
            <p><label>Nombre de pièce </label><input type="text" name="nbpiece"></p>
            <input type="submit" id="sent" value="Ajouter">
        </form>
    </fieldset>
</div>
</body>
</html>