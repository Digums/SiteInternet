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
    <link rel='stylesheet' href="CSS/style.css">
    <title>Accueil</title>
</head>
<body>

<header>
<?php
require ("Header.php");
?>
</header>

<div id="cadre">
    <div id="connexion">
        <form method="post" action="../Modele/TraitementConnexion.php">
            <label for="email">Username</label>
            <input type="text" id="email" name="email" placeholder="Your username..">
            <br>
            <label for="mdp">Password</label>
            <input type="password" id="mdp" name="mdp" placeholder="Your password..">
            <br>
            <input type="submit" value="Submit">
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
</div>
<footer>
    <?php
require ("footer.html");
?>
</footer>

</body>
</html>