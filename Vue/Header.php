<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../Autre/images/floticon.ico" >
    <link rel='stylesheet' href="CSS/style.css">
    <title>Header</title>
</head>


<body>
<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 15/05/2017
 * Time: 11:19
 */ ?>

<header>
    <div id="menutop">

        <ul>
            <li id="site">Domisep</li>
            <li><a                     title="Accueil"             href="accueil.php">Accueil</a></li>
            <li><a                     title="A propos de nous ?"  href="quisommesnous.php">A propos de nous ?</a></li>
            <li><a                     title="Nos prestations"     href="nosprestations.php">Nos prestations</a></li>
            <li><a                     title="Contact"             href="contact.php">Contact</a></li>
            <li><a                     title="Aide"                href="aide.php">Aide</a></li>
            <li style="float: right"><button   onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>
            <!--<li><a   class="active"    title="Login"               href="">Login</a></li>-->
        </ul>

    </div>


    <div id="id01" class="modal">

        <form class="modal-content animate" action="">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="../Images/user.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>E-mail</b></label>
                <input type="text" placeholder="Entrer votre email" name="uname" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votrre mot de passe" name="psw" required>

                <button type="submit">Se connecter</button>
                <input type="checkbox" checked="checked"> Se souvenir de moi
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Inscription</button>
                <span class="psw">Mot de passe <a href="#">oublié ?</a></span>
            </div>
        </form>
    </div>
    </ul>

</header>


</body>