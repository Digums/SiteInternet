<?php

require("../Modele/connexion_M.php");
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../Autre/images/floticon.ico">
    <link rel='stylesheet' href="CSS/style.css">
    <title>Capteur</title>
</head>
<body>
    <header>
        <?php require("Header.php"); ?>
    </header>

    <?php
        $user = true;
        $admin = false;

    if ($user && !$admin){ ?>
        <div class="ajout">
            <?php include("modifcapteur.php"); ?>
        </div>
    <?php }
    ?>

    <footer>
        <?php require("footer.html"); ?>
    </footer>

</body>

</html>


