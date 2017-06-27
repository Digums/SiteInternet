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

<div id="cadreconnexion">
    <form method="post" action="../Modele/TraitementConnexionAdmin.php">

        <div class="container">
            <label><b>Email</b></label>
            <input type="email" placeholder="Entrer Email" name="email" required>
            <br>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer Mot de passe" name="mdp" required>

            <button type="submit" id="buttonaccueil">Se Connecter</button>
        </div>


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

<footer>
    <?php
    require ("footer.html");
    ?>
</footer>

</body>
</html>