<?php
require ("../Modele/connexion M.php");
include("../Modele/capteur-db.php");
include("../Modele/messagerie-db.php");
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title> accueil user</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

<?php
require ("Header.php");
?>

<?php
//$id = $_SESSION['id'];
?>

<!-- A remplacer par l'acceuil -->
<div class="center">
    <div class="derniermsg">
        <h1>Vos derniers messages :</h1>
        <?php $derniers_messages =  getListeMessageUser($bdd);
        while ($donnees = $derniers_messages->fetch()){?>
            <p><?php echo $donnees['commentaire'] ?></p>
        <?php }
        ?>
        <a href="contact.php">Vous voulez renvoyez un mail?</a>
    </div>
    <div class="pieceacceuil">
    <?php
    $req = $bdd->query('SELECT id, nom_piece FROM piece WHERE id_maison = 1');
    while ($pieces = $req->fetch()){ ?>
        <div>
            <h2><?php echo $pieces['nom_piece']?></h2>
            <?php
            $req2 = getCapteurSalle($bdd, $pieces['id']);
            while ($donnees = $req2->fetch()){ ?>
                <ul>
                    <li><?php echo $donnees['nom_capteur'] ?> : <?php echo $donnees['donnee'] ?></li>
                </ul>
            <?php } ?>
        </div>
    <?php } ?>
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