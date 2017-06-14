<?php
session_start();

if (!isset($_SESSION['verif'])) {
    $_SESSION['verif'] = 1;
    echo $_SESSION['verif'];
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../Autre/images/floticon.ico" >
    <link rel='stylesheet' href="CSS/style.css">
    <title>Accueil</title>
</head>
<body id="bodyaccueil">

<header>
    <?php
    require ("Header.php");
    ?>
</header>

<div id="animaccueil">
    <button type="submit" id="buttoninscription"><a id="buttoninscriptionbis" href="#cadreinscription">Inscription</a></button>
    <button type="submit" id="buttonconnexion"><a id="buttonconnexionbis" href="#cadreconnexion">Connexion</a></button>
    <div id="cadreconnexion">
        <form method="post" action="../Modele/TraitementConnexion.php">

        <div class="container">
            <label><b>Email</b></label>
            <input type="email" placeholder="Entrer Email" name="email" required>
            <br>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer Mot de passe" name="mdp" required>

            <button type="submit" id="buttonaccueil">S Connecter</button>
            <input type="checkbox" cheked="checked"> Se souvenir de moi
        </div>



        <!--<div class="container" style="background-color:#f1f1f1">
            <!-- <button type="button" class="cancelbtn">Cancel</button>
        </div>-->
        <?php

        if($_SESSION['verif']==2){

            ?>
            <p style="color: red">Le Mot de passe est incorrect.</p>

        <?php }
        elseif($_SESSION['verif']==3){
            ?> <p style="color: red"> Email invalide.</p>
            <?php
        }
        ?>
        </form>

    </div>
    <div id="cadreinscription">
        <div id="gauche">
            <p><label>Nom*</label></br>
                <input type="text" name="nom" placeholder="" required></p>

            <p> <label>Prénom*</label>
                </br><input type="text" name="prenom" placeholder="" required></p>
            <p><label>E-mail*</label>
                </br><input type="email" name="email" placeholder="" required></p>
            <p><label>Mot de passe*</label>
                </br><input type="password" name="mdp" placeholder="" required></p>
            <p><label>Ressaisie du mot de passe*</label>
                </br><input type="password" name="mdp2" placeholder="" required></p>
        </div>
        <div id="droite">
            <p><label>Adresse*</label></br><input type="text" name="adresse" placeholder="" required></p>
            <p><label>Code postal*</label></br><input type="text" name="codepostal" placeholder="" required></p>
            <p><label>Ville*</label></br>
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
            <p><label>Pays*</label></br>
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
        <button type="submit" id="buttoninscrire">S'inscrire</button>
    </div>
</div>
<footer>
    <?php
    require ("footer.html");
    ?>
</footer>

</body>
</html>