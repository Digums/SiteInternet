
<?php
require ("Header.php");
?>

<div id="menuleft">
    <ul>
        <li><a title="Accueil"         href="accueil_user.php">Accueil</a></li>
        <li><a title="Profil "      href="">Profil</a></li>
        <li><a title="Maison "      href="maison.php">Maison</a></li>
        <li><a title="Statistique " href="">Statistique</a></li>
        <li class="dropdown">
            <a href="modifcapteur.php" class="dropbtn">Capteur</a>
            <div class="dropdown-content">
                <a title="Température" href="">Température</a>
                <a title="Humidité"    href="">Humidité</a>
                <a title="Caméra "     href="">Caméra</a>
                <a title="Porte "      href="">Porte</a>
                <a title="Fumée "      href="">Fumée</a>
            </div>
        </li>
    </ul>
</div>

