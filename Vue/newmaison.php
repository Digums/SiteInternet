<?php
require("../Modele/connexion_M.php");
?>

<html>

<head>
    <link rel="stylesheet" href="">
</head>

<body>
<div class="newcapteur">
    <fieldset id="formulaire">
        <legend>Vous voulez ajouter une maison?</legend>
        <form method="post" action="../Controleur/maison-controleur.php">
            <p>L'addresse de votre nouveau logement :</p>
            <p><label>Adresse </label><input type="text" name="adresse"></p>
            <p><label>Complement d'addresse </label><input type="text" name="complement"></p>
            <p><label>Code Postal </label><input type="text" name="codep"></p>
            <p><label>Ville </label><input type="text" name="ville"></p>
            <p><label>Superficie de votre maison </label><input type="text" name="superficie"></p>
            <p><label>Nombre de pièce </label><input type="text" name="nbrpiece"></p>
            <input type="submit" id="sent" value="Ajouter" name="btnAddMaison">
        </form>
    </fieldset>
</div>
</body>
</html>