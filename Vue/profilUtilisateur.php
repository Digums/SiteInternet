<?php
require ("../Modele/Connexion T.php");
session_start();
if (!isset($_SESSION['verif'])) {
    $_SESSION['verif'] = 1;
    echo $_SESSION['verif'];}

    $_SESSION['id'];
    $idUtilisateur=$_SESSION['id'];
    $reponse= $bdd->query("SELECT * FROM membre WHERE id='$idUtilisateur' ");
    $ligne=$reponse->fetch();
    $_SESSION['prenom']=$ligne['prenom'];
    $_SESSION['nom']=$ligne['nom'];
    $_SESSION['date']=$ligne['date'];
    $_SESSION['email']=$ligne['email'];
    $_SESSION['mdp']=$ligne['mdp'];
    $_SESSION['adresse']=$ligne['adresse'];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="Quentin/styles/index_main.css">
    <link rel='stylesheet' href="CSS/inscription.css">
    <title>Inscription</title>
</head>
<body>




<form method="post" action="../Modele/TraitementProfilUtilisateur.php">

    <div id="formulaire">

            <legend>Vos coordonnées</legend>
            <div id="gauche">
                <p><label>Nom</label></br>
                    <?php  echo $_SESSION['nom']?></p>
                <p> <label>Prénom</label>
                    </br><?php  echo $_SESSION['prenom']?></p>
                <p><label>Date de naissance</label>
                    </br><?php  echo $_SESSION['date']?></p>
                <p><label>E-mail</label>
                    </br><?php  echo $_SESSION['email']?></p>
                <p><label>Mot de passe</label>
                    </br><input type="password" name="mdp" value="<?php  echo $_SESSION['mdp']?>" placeholder="" required></p>
                <p><label>Ressaisie du mot de passe</label>
                    </br><input type="password" name="mdp2" value="<?php  echo $_SESSION['mdp']?>" placeholder="" required></p>
                <input type="submit" value="modifier mot de passe">
            </div>

    </form>
            <form method="post" action="../Modele/TraitementProfilUtilisateur.php">
            <div id="droite">
                <p>Adresse actuelle:
                    </br>
                    <?php  echo $_SESSION['adresse']?></p>
                <p><label>Adresse</label></br><input type="text" name="adresse"   required></p>
                <p><label>Code postal</label></br><input type="text" name="codepostal"  required></p>
                <p><label>Ville</label></br>
                    <select name="ville" id="ville" required>
                        <option value="Paris">Paris</option>
                        <option value="Madrid">Madrid</option>
                        <option value="Rome">Rome</option>
                        <option value="Londres">Londres</option>
                        <option value="Ottawa">Ottawa</option>
                        <option value="Washington">Washington</option>
                        <option value="Pekin">Pekin</option>
                        <option value="Tokyo">Tokyo</option>
                    </select>
                </p>
                <p><label>Pays</label></br>
                    <select name="pays" id="pays" required>
                        <option value="france">France</option>
                        <option value="espagne">Espagne</option>
                        <option value="italie">Italie</option>
                        <option value="royaume-uni">Royaume-Uni</option>
                        <option value="canada">Canada</option>
                        <option value="etats-unis">États-Unis</option>
                        <option value="chine">Chine</option>
                        <option value="japon">Japon</option>
                    </select>
                </p>


                <input type="submit" value="Modifier Adresse" />
                </form>
            </div>

            </div>

    </div>




</body>
</html>
