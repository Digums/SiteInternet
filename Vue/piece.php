<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Gestion des pièces</title>
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/floticon.ico" >
    <link rel="stylesheet" href="CSS/piece.css">
</head>

<body>
<header>
    <?php
    require("Header.php");
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

<form>
    <div id="groscadre">
        <h1>Gestion des pièces</h1>

        <label> Nom de la pièce</label>
        <input type="text" id="nom" name="nom" placeholder="">
        <br>

        <label> Taille de la pièce</label>
        <input type="int" id="taille" name="taille" placeholder="">
        <br>

        <label> Nombre de capteurs</label>
        <select id="capteur" name="capteur">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

        </select>
        <br>

        <input type="submit" value="Submit">
    </div>
</form>

<footer>
    <?php
require ("footer.html");
?>
</footer>

</body>
</html>

