
<?php
require ("../Modele/connexion M.php");
session_start();

?>

<!DOCTYPE HTML>
<head>
    <title> accueil user</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

<?php
require ("Menu_user.php");
?>

<!-- A remplacer par l'acceuil -->
<div class="test">
    <div class="newcapteur">
        <fieldset id="formulaire">
            <legend>Ajouter un capteur</legend>
            <form method="post" action="../Controleur/capteur-controleur.php">
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


                        $piece = $bdd->query("SELECT nom_piece FROM piece WHERE id_maison = 1");
                        while ($info = $piece->fetch()){ ?>
                            <option value="<?php echo $info['nom_piece']?>"><?php echo $info['nom_piece'] ?></option>
                        <?php } ?>

                    </select>
                </p>
                <input type="submit" id="sent" value="Ajouter" name="btnAddCapteur">
            </form>
        </fieldset>
    </div>

    <div class="delcapteur">
        <p><span class="sousligne">Tous vos capteurs</span></p>
        <div class="listecapteur">
            <?php
            $capteurs = $bdd->query("SELECT * FROM capteur WHERE id_maison=1");
            while($donnees = $capteurs->fetch()){ ?>
                <p>Il y a un capteur <?php echo $donnees['type_capteur'] ?> dans <?php echo $donnees['nom_piece']?> (nom :<?php echo $donnees['nom_capteur']?>) <button onclick="document.getElementById('id03').style.display='block'">Supprimer</button>
                </p>


                <div id="id03" class="modal">
                    <div class="modal-content animate">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container">
                            <form method="post" action="../Controleur/capteur-controleur.php" class="delete_form">
                                <p> Voulez-vous vraiment supprimer ce capteur ?</p>
                                <button type="submit" name="btnDelCapteur" value="<?php echo "".$donnees['id'] ?>"> Supprimer</button>
                            </form><br><br>
                        </div>
                    </div>

                </div>
            <?php }
            ?>

        </div><br />
    </div>
</div>


<footer>
    <?php
    require ("footer.html");
    ?>
</footer>
</body>
