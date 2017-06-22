<?php
session_start();
include("../Controleur/piece-controleur.php");
include("../Controleur/capteur-controleur.php");
require("../Modele/connexion_M.php");
require("Header.php");

 ?>

<html>
<head>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<section class="add">
    <button id="addelmt" onclick="document.getElementById('id05').style.display='block'">Ajouter une maison</button>

    <div id="id05" class="modal">
        <div class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <form action="../Controleur/piece-controleur.php" method="post">
                    <div id="pop2">
                        <h1>Vous voulez ajouter une maison?</h1>
                        <form method="post" action="../Controleur/maison-controleur.php">
                            <p>L'addresse de votre nouveau logement :</p>
                            <p><label>Adresse </label>
                                <input type="text" name="adresse"></p>
                            <p><label>Complement d'addresse </label>
                                <input type="text" name="complement"></p>
                            <p><label>Code Postal </label>
                                <input type="text" name="codep"></p>
                            <p><label>Ville </label>
                                <input type="text" name="ville"></p>
                            <p><label>Superficie de votre maison </label>
                                <input type="text" name="superficie"></p>
                            <p><label>Nombre de pièce </label>
                                <input type="text" name="nbrpiece"></p>
                        <br>
                        <button type="submit" value="Submit" name="btnAddPiece">Ajouter</button>
                    </div>
                </form><br>
            </div>
        </div>
</section>

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

<footer>
    <?php include ("footer.html");
    ?>
</footer>
</html>
