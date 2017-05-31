<?php
session_start();
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