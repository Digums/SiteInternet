<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="CSS/style.css">
    <title>HeaderAdmin</title>
</head>

<body>

<div class="menutop">
    <ul>
        <li><img src="../Autre/images/newlogo.png" id="site" ></li>
        <div class="menudroite">
            <li><a                     title="Utilisateurs"  href="GestionUtilisateur.php">Utilisateurs</a></li>
            <li><a                     title="Messages"             href="messageadmin.php">Messages</a></li>
            <!--<li><a                     title="Maisons"     href="">Maisons</a></li>
            <!--<li><a                     title="Données"                href="">Données</a></li>-->
            <li><form action="../Controleur/general-controleur.php"><button type="submit" id="btndecon" name="btndecon"> Déconnexion</button> </form></li>
        </div>
    </ul>
</div>

</body>
</html>
