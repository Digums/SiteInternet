<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Nos prestations</title>
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/floticon.ico" >
    <link rel="stylesheet" href="CSS/nosprestations.css">
</head>

<body>
<header>
<?php
require("footer.html");
?>
</header>

<div id="menuleft">
    <ul>
        <li><a title="Menu"         href="">Menu</a></li>
        <li><a title="Profil "      href="">Profil</a></li>
        <li><a title="Maison "      href="">Maison</a></li>
        <li><a title="Statistique " href="">Statistique</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Capteur</a>
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

<section>
<div id="groscadre">

    <h1>Nos prestations</h1>

    <div class="souscadre">
        <h2>Installation</h2>
        <p><img src="../Autre/images/installation.jpg" class="images" alt="template installateur" style="width: 200px; height: 200px; border: 3px solid #CFB294 ;"  />
            Notre équipe de techniciens viendra chez vous pour installer votre système domotique. Ainsi, vous ne vous encombrerez pas avec l'installation, soyez serein !
            <!--<img src="Images/installation.jpg" class="images" alt="template installateur" style="width: 200px ; border: 3px solid #CF9442 ;"  />-->
        </p>
    </div>

    <div class="souscadre">
        <h2>Surveillance</h2>
        <p><img src="../Autre/images/surveillance.jpg" class="images" alt="template caméra" style="width: 200px; height: 200px; border: 3px solid #CFB294 ;" />
            2 offres vous sont disponibles: l'offre surveillance et l'offre surveillance avancée !
            <br>L'offre surveillance vous permet d'avoir accès à l'enregistrement de vos caméras et de voir ce qu'elles voient en temps réel ! Grâce à votre smartphone/ordinateur, il vous est désormais possible de surveiller votre maison n'importe où, n'importe quand !
            <br>L'offre surveillance avancée vous permet d'avoir une équipe entièrement mise à votre disposition afin de surveiller votre domicile 24h/24 et7j/7 lorsque vous êtes absent.
            <!--<img src="Images/surveillance.jpg" class="images" alt="template caméra" style="width: 200px ; border: 3px solid #CF9442 ;" />-->
        </p>
    </div>

    <div class="souscadre">
        <h2>Maintenance</h2>
        <p><img src="../Autre/images/maintenance.jpg" class="images" alt="template technicien" style="width: 200px; height: 200px; border: 3px solid #CFB294 ;" />Notre équipe de techniciens se tient prête à intervenir à n'importe quel moment lorsque vous rencontrez un souci technique avec votre système domotique.
            <!--<img src="Images/maintenance.jpg" class="images" alt="template technicien" style="width: 200px ; border: 3px solid #CF9442 ;" />-->
        </p>
    </div>

    <div class="souscadre">
        <h2>Suivi</h2>
        <p><img src="../Autre/images/suivi.jpg" class="images" alt="template téléphone" style="width: 200px; height: 200px; border: 3px solid #CFB294" />
            Notre SAV pourra vous aider à distance lorsque vous rencontrerez des problèmes de configuration ou tout autre problèmee que les problèmes techiques.
            <br>C'est aussi par notre SAV que vous pourrez passer afin d'effectuer toutes vos éventuelles réclamations.
            <!--<img src="Images/suivi.jpg" class="images" alt="template téléphone" style="width: 200px ; border: 3px solid #CF9442" />-->
        </p>
    </div>

</div>
</section>

</body>

</html>