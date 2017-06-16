<?php
include("../Controleur/piece-controleur.php");
include("../Controleur/capteur-controleur.php");
require("../Modele/connexion M.php");
require("Header.php ");
 ?>
<html>
<head>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<div class="listepiece">
    <p> Votre maison :</p>

    <?php
    $piece = listepiece($bdd, $_SESSION['id']);
    $capteur = listecapteur($bdd, $_SESSION['id']);
    $nbcapt = 0;
    $nbpiece = 0;
    while($donnees = $piece->fetch()){ ?>
        <a href="">
            <ul><input type="button"> <?php echo $donnees['nom_piece'] ?></ul></a>
    <?php
        $nbpiece = $nbpiece + 1;
        $nbcapt = $nbcapt + $donnees['nbr_capteur'];
    }
    while($donnees = $capteur->fetch()){ ?>
        <ul> <?php echo $donnees['nom_capteur'] ?> </ul>
    <?php }
    ?>
    <p>Vous disposez de <?php echo $nbpiece ?> pièces et <?php echo $nbcapt ?> capteurs !</p>
</div>
</html>
