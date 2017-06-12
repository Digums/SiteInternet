<?php
require ("../Modele/connexion M.php");
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
$id = $_SESSION['id'];
?>

<!-- A remplacer par l'acceuil -->
<div class="center">
    <div class="derniermsg">
        <h1>Vos derniers messages :</h1>
        <?php $derniers_messages = $bdd->query('SELECT mail, commentaire FROM commentaire 
                                                         JOIN membre ON membre.id = commentaire.id_membre
                                                         WHERE reponse=0 AND id_membre = 3');
        while ($donnees = $derniers_messages->fetch()){?>
            <p><?php echo $donnees['commentaire'] ?></p>
        <?php }
        ?>
        <a href="contact3.php">Vous voulez renvoyez un mail?</a>
    </div>
</div>

<footer>
    <?php
    require ("footer.html");
    ?>
</footer>
</body>
</html>