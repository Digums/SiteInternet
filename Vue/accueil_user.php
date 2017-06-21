<?php
require("../Modele/connexion_M.php");
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
if (isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}
else {
    $prenom =  'matthieu';
}
?>

<!-- A remplacer par l'acceuil -->
<div class="accueil">
    <div class="center">
        <div class="bonjour">
            <p>Bonjour <?php echo $prenom ?>,</p>
            <p>Ravi de vous revoir !</p>
        </div>
        <div class="derniermsg">
            <h1>Vos derniers messages :</h1>
            <?php $derniers_messages =  getListeMessageFromAdmin($bdd);
            while ($donnees = $derniers_messages->fetch()){?>
                <p><?php echo $donnees['commentaire'] ?></p>
                <p><?php echo $donnees['message'] ?></p>
            <?php }
            ?>
            <a href="contact.php">Vous voulez renvoyez un mail?</a>
        </div>
    </div>
    <div class="pieceacceuil">
        <?php
        
        $req = $bdd->prepare("SELECT id, nom_piece FROM piece WHERE id_maison=:idmaison ");
        $req->bindParam(":idmaison", $_SESSION['idmaison']);
        $req->execute();
        while ($pieces = $req->fetch()){ ?>
            <div class="pieces">
                <h2><?php echo $pieces['nom_piece']?></h2>
                <?php
                $req2 = getCapteurSalle($bdd, $pieces['id']);
                while ($donnees = $req2->fetch()){ ?>
                    <p><?php echo $donnees['nom_capteur'] ?> : <?php echo $donnees['donnee'] ?></p>
                    <ul>
                        <li><?php echo $donnees['nom_capteur'] ?> : <?php echo $donnees['donnee'] ?></li>
                    </ul>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

</div>

<footer>
    <?php
    require ("footer.html");
    ?>
</footer>
</body>
</html>