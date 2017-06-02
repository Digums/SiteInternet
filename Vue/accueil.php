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

<div class="cadre">
    <form method="post" action="../Modele/TraitementConnexion.php">

        <div class="container">
            <label><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <input type="checkbox" cheked="checked"> Remember me
        </div>

        <!--<div class="container" style="background-color:#f1f1f1">
            <!-- <button type="button" class="cancelbtn">Cancel</button>
        </div>-->
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