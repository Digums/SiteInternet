<?php
session_start();
//$_SESSION['verif']=1;
?>
<!DOCTYPE HTML>
<?php

require ("../Modele/Connexion T.php");
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <!--<link rel='stylesheet' href="CSS/style.css"> -->
    <title>Gestion Utilisateur</title>
</head>
<body>
<header>
    <?php
    //require ("Header.php");
    ?>
</header>
<div class="gestionutilsateur">
<?php
$incrementation=0;
while ($donnees = $reponse->fetch())
{
    $incrementation=$incrementation+1;

    if($incrementation>1) {

        ?>

        <form method="post" action="../Modele/TraitementGestionUtilisateur.php" style=" margin-left: 20%;">

        <div style="display: flex">
            <div >
                <input type="text" readonly name="id"  value="<?php  echo $donnees['id']?>"  placeholder="<?php  echo $donnees['id']?>" >
            </div>
            <div >
            <input type="text" name="nom" value="<?php  echo $donnees['nom']?>"    placeholder="<?php  echo $donnees['nom']?>">
            </div>
            <div>
            <input type="text" name="prenom" value="<?php  echo $donnees['prenom']?>"  placeholder="<?php  echo $donnees['prenom']?>">
            </div>
            <div>
            <input type="email" name="email" value="<?php  echo $donnees['email']?>" placeholder="<?php  echo $donnees['email']?>">
            </div>
            <div>
            <input type="password" name="mdp" value="<?php  echo $donnees['mdp']?>" placeholder="<?php  echo $donnees['mdp']?>">
            </div>
            <div>
            <input type="text" name="administrateur" value="<?php  echo $donnees['nbrapp']?>" placeholder="<?php  echo $donnees['nbrapp']?>" >
            <input type="submit" value="Envoyer" />
            </div>

        </div>


    </form>
        <?php


    }
    else{

        ?>
        <form method="post" action="../Modele/TraitementGestionUtilisateur.php" style=" margin-left: 20%;">

        <div style="display: flex">
            <div >
                <label>id</label></br>
                <input type="text" readonly name="id" value="<?php  echo $donnees['id']?>"  placeholder="<?php  echo $donnees['id']?>" >
            </div>
            <div >
                <label>nom</label></br>
                <input type="text" name="nom" value="<?php  echo $donnees['nom']?>" placeholder="<?php  echo $donnees['nom']?>"  >
            </div>
            <div>
                <label>prenom</label></br>
                <input type="text" name="prenom" value="<?php  echo $donnees['prenom']?>" placeholder="<?php  echo $donnees['prenom']?>"  >
            </div>
            <div>
                <label>email</label></br>
                <input type="email" name="email" value="<?php  echo $donnees['email']?>" placeholder="<?php  echo $donnees['email']?>">
            </div>
            <div>
                <label>mot de passe</label></br>
                <input type="password" name="mdp" value="<?php  echo $donnees['mdp']?>" placeholder="<?php  echo $donnees['mdp']?>">
            </div>
            <div>
                <label>administrateur</label></br>
                <input type="text" name="administrateur" value="<?php  echo $donnees['nbrapp']?>" placeholder="<?php  echo $donnees['nbrapp']?>" >
                <input type="submit" value="Envoyer" />
            </div>

        </div>


    </form>
    <?php



    }
}
?>


</div>


<footer>
    <?php
    //require ("footer.html"); probleme au niveau du css à corriger
    ?>
</footer>

</body>
</html>