<?php
require("../Modele/connexion_M.php");
require ("../Modele/messagerie-db.php");
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
            <li><a                     title="Maisons"     href="">Maisons</a></li>
            <li><a                     title="Messages"             href="">Messages</a></li>
            <li><a                     title="Données"                href="">Données</a></li>
            <!--<li style="float: right"><button   onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>-->

            <!--<li style="float: right"><button   onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>-->
        </div>
    </ul>
</div>

</body>
</html>
