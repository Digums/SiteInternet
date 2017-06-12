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

<section class="add">
    <button onclick="document.getElementById('id04').style.display='block'">Ajouter capteur</button>

    <div id="id04" class="modal">
        <div class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <form action="../Controleur/piece-controleur.php" method="post">
                    <div id="groscadre">
                        <h1>Gestion des pièces</h1>

                        <label> Nom de la pièce</label>
                        <input type="text" id="nom" name="nom" placeholder="">
                        <br>

                        <label> Taille de la pièce</label>
                        <input type="int" id="taille" name="taille" placeholder="">
                        <br>

                        <label> Nombre de capteurs</label>
                        <select id="capteur" name="nbrcapteur">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>

                        </select>
                        <br>

                        <input type="submit" value="Submit" name="btnAddPiece">
                    </div>
                </form><br><br>
            </div>
        </div>
</section>
<div class="listepiece">
    <p> Votre maison :</p>

    <?php
    $piece = listepiece($bdd, 3);
    $capteur = listecapteur($bdd, 3);
    $nbcapt = 0;
    $nbpiece = 0;
    while($donnees = $piece->fetch()){ ?>
        <a href="">
            <ul><input type="button"> <?php echo $donnees['nom_piece'] ?></ul></a><hr>
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
