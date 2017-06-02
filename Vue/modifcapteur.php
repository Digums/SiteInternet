<?php

require ("../Modele/connexion M.php");
?>

<html>

<head>
<!--<link rel="stylesheet" href="CSS/ajout_capteur.css">-->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<header>
    <?php
    require ("Header.php");
    ?>
</header>


<?php
require ("../Controleur/test_ajout_capteur.php");
?>

<div class="test">
<div class="newcapteur">
    <fieldset id="formulaire">
        <legend>Ajouter un capteur</legend>
        <form method="post" action="../Modele/creationcapteur.php">
            <p><label>Nom du capteur: </label><input type="text" name="name" required></p>

            <p><label>Type de capteur: </label><select name="typecapteur" id="type_capteur" required>
                <option value="">--Faites votre choix--</option>
                <option value="temperature">Temperature</option>
                <option value="humidite">Humidité</option>
                <option value="camera">Caméra</option>
                <option value="fumee">Détection de fumée</option>
                <option value="Sdb">Position de porte</option></select></p>
            <p><label>Etat du capteur: </label>
                <input type="radio" name="etat" value="On">Allumé
                <input type="radio" name="etat" value="Off">Eteint</p>
            <p><label>Nom de la pièce: </label>
                <select name="piece" id="piece">
                <option value="">--Faites votre choix--</option>
                <?php
                $piece = $bdd->query("SELECT * FROM piece");
                while ($info = $piece->fetch()){ ?>
                <option value="<?php echo $info['nom_piece']?>"><?php echo $info['nom_piece'] ?></option>
                <?php }?>

                </select>
                </p>
            <input type="submit" id="sent" value="Ajouter">
        </form>
    </fieldset>
</div>

    <div class="delcapteur">
        <p><span class="sousligne">Tous vos capteurs</span></p>
        <div class="listecapteur">
            <?php
            $capteurs = $bdd->query("SELECT * FROM capteur WHERE idmaison=1");
            while($donnees = $capteurs->fetch()){ ?>
                <p>Il y a un capteur <?php echo $donnees['type_capteur'] ?> (nom :<?php echo $donnees['nom_capteur']?>) dans : <?php echo $donnees['nom_pièce']?>  <button onclick="document.getElementById('id03').style.display='block'">Supprimer</button>
                </p>


                <div id="id03" class="modal">
                    <div class="modal-content animate">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container">
                            <p> Voulez-vous vraiment supprimer ce capteur ?</p>
                            <a href="../Modele/delete_bdd.php?id=<?php echo $donnees['id'];  ?>" class="delete_form">
                                <button> Supprimer</button>
                            </a><br><br>
                        </div>
                    </div>

                </div>
            <?php }
            ?>

        </div><br />

       <!-- <div class="suppression">
            <p><span class="sousligne">Vous voulez supprimez l'un de vos capteurs?</span></p>
            <form method="post" action="../Modele/suppressioncapteur.php">
                <p><label>Lequel? </label>
                    <select name="choixcapteur" id="choixcapteur">
                        <option value="">--Faites votre choix--</option>
                        <?php
                        $capteurs = $bdd->query("SELECT * FROM capteur WHERE idmaison=1");
                        while ($donnees = $capteurs->fetch()){ ?>
                            <option value="<?php echo $donnees['nom_capteur']?>"><?php echo $donnees['nom_capteur'] ?></option>
                        <?php }?></select>   <input type="submit" id="sent2" value="Supprimer" /></p>

            </form>
        </div>-->
    </div>
</div>


<footer>
    <?php
    require ("footer.html");
    ?>
</footer>

</body>
</html>

