<?php

if (!isset($_SESSION['client'])) {
    $_SESSION['client'] = false;
}
$client = $_SESSION['client'];

if ($client == false){ ?>
    <div class="menutop">
        <ul>

            <li><img src="../Autre/images/newlogo.png" id="site" ></li>
            <div class="menudroite">
            <li><a                     title="Accueil"             href="accueil.php">Accueil</a></li>
            <li><a                     title="Nos prestations"     href="nosprestations.php">Nos prestations</a></li>
            <li><a                     title="Contact"             href="contact.php">Contact </a></li>
            <li><a                     title="Aide"                href="aide.php">Aide</a></li>
            <!--<li style="float: right"><button   onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>-->

                <!--<li style="float: right"><button   onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>-->
            </div>
        </ul>
    </div>

<?php }

elseif ($client == true) { ?>

    <div class="menutop" >
        <ul >
            <li ><img src = "../Autre/images/newlogo.png" id = "site" ></li >
            <div class="menudroite">
            <li ><a                     title = "Accueil"             href = "accueil_user.php" >Accueil</a ></li >
            <li class="dropdown"><a title="Mes maisons" href="maison.php" class="dropbtn">Mes maisons</a>
                <div class="dropdown-content">
                    <a title="pièce"    href="piece.php">Pièce</a>
                    <a title="capteur" href="capteur2.php">Capteurs</a>
                </div> </li>
            <li ><a                     title = "Profil"              href = "profilUtilisateur.php"   >Profil</a ></li >
            <li ><a                     title = "Aide"                href = "aide.php" > Aide </a ></li >
            </div>
        </ul >
    </div >

    <?php }
    ?>

    <!--<div id="id01" class="modal">

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
    </div>-->