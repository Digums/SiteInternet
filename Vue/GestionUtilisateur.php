<?php

require("../Modele/Connexion_T.php");
session_start();
//$_SESSION['verif']=1;
?>
<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../Autre/images/floticon.ico" >
    <title>Gestion Utilisateur</title>
</head>
<body>
<header>
    <?php
    require ("HeaderAdmin.php");
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



        <div style=" display: flex ">
            <form method="post" action="../Modele/TraitementGestionUtilisateur.php" style=" display: flex">
            <div class="idgestionU">
                <input type="text" readonly name="id"  value="<?php  echo $donnees['id']?>"  placeholder="<?php  echo $donnees['id']?>" >
            </div>
            <div >
            <input type="text" name="nom" value="<?php  echo $donnees['nom']?>"    placeholder="<?php  echo $donnees['nom']?>">
            </div>
            <div>
            <input type="text" name="prenom" value="<?php  echo $donnees['prenom']?>"  placeholder="<?php  echo $donnees['prenom']?>">
            </div>
            <div >
            <input type="email" name="email" value="<?php  echo $donnees['email']?>" placeholder="<?php  echo $donnees['email']?>">
            </div>
            <div >
            <input type="password" name="mdp" value="<?php  echo $donnees['mdp']?>" placeholder="<?php  echo $donnees['mdp']?>">
            </div>
            <div class="statutgestionU">
            <input type="text" name="statut" value="<?php  echo $donnees['statut']?>" placeholder="<?php  echo $donnees['statut']?>" >
            </div>
            <div class="appartgestionU">
                <input type="text" name="nombreappart" value="<?php  echo $donnees['nbrapp']?>" placeholder="<?php  echo $donnees['nbrapp']?>">
            </div>
            <div>
            <input type="submit" value="Envoyer" />
            </div>
        </form>

            <a href="http://localhost/SiteInternet/Modele/TraitementModificationUtilisateur.php?id=<?php echo $donnees['id']; ?>">
                <button>Modification </button>
            </a>


        </div>



        <?php


    }
    else{

        ?>

        <div style="display: flex">
            <form method="post" action="../Modele/TraitementGestionUtilisateur.php" style="display: flex">

            <div class="idgestionU">
                <label>id</label></br>
                <input  type="text" readonly name="id" value="<?php  echo $donnees['id']?>"  placeholder="<?php  echo $donnees['id']?>"  >
            </div>
            <div >
                <label>nom</label></br>
                <input type="text" name="nom" value="<?php  echo $donnees['nom']?>" placeholder="<?php  echo $donnees['nom']?>"  >
            </div>
            <div>
                <label>prenom</label></br>
                <input type="text" name="prenom" value="<?php  echo $donnees['prenom']?>" placeholder="<?php  echo $donnees['prenom']?>"  >
            </div>
            <div >
                <label>email</label></br>
                <input type="email" name="email" value="<?php  echo $donnees['email']?>" placeholder="<?php  echo $donnees['email']?>">
            </div>
            <div >
                <label>mdp</label></br>
                <input type="password" name="mdp" value="<?php  echo $donnees['mdp']?>" placeholder="<?php  echo $donnees['mdp']?>">
            </div>
                <div class="statutgestionU">
                    <label>statut</label></br>
                    <input type="text" name="statut" value="<?php  echo $donnees['statut']?>" placeholder="<?php  echo $donnees['statut']?>">
                </div>
            <div class="appartgestionU">
                <label>nombreappart</label></br>
                <input type="text" name="nombreappart" value="<?php  echo $donnees['nbrapp']?>" placeholder="<?php  echo $donnees['nbrapp']?>" >
            </div>
                <div>
                <br>
                <input type="submit" value="Envoyer" />
            </div>
            </form>
            <div>
                </br>
            <a href="http://localhost/SiteInternet/Modele/TraitementModificationUtilisateur.php?id=<?php echo $donnees['id']; ?>">
                <button>Modification </button>
            </a>
            </div>
        </div>



    <?php



    }
}
?>


</div>


<footer>
    <?php
    require ("footer.html");
    ?>
</footer>

</body>
</html>