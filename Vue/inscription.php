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
</div>
<footer>
    <?php
    require ("footer.html");
    ?>
</footer>

</body>
</html>