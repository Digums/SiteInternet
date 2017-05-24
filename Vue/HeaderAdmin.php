<?php
require ("../Modele/connexion M.php");
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="CSS/style.css">
    <title>HeaderAdmin</title>
</head>

<body>
<header>
<?php
/**
 * Created by PhpStorm.
 * User: PL
 * Date: 19/05/2017
 * Time: 09:46
 */ ?>
<div id="menutop">
    <ul>
        <li id="site">Domisep Admin</li>
        <li><a                     title="Utilisateurs"  href="">Utilisateurs</a></li>
        <li><a                     title="Maisons"     href="">Maisons</a></li>
        <li><a                     title="Messages"             href="">Messages</a></li>
        <li><a                     title="Données"                href="">Données</a></li>

    </ul>
</div>
</header>

<h1 style="margin-top: 5%">Bonjour Admin</h1>

<div id="adm">
    <h2> Les derniers commentaire : </h2>
<?php
$derniers_messages = $bdd->query('SELECT * FROM commentaire WHERE reponse=0');?>
<div class  ="affichage_commentaire">
    <?php while ($donnees = $derniers_messages->fetch()){?>
    <div class="message">
        <p> Un message a été envoyé par <span><?php echo $donnees['prenom'],' ', $donnees['nom']; ?>!</span><p>
            <?php echo $donnees['commentaire']; ?>
            <form method="post" action="../Modele/traitement_reponse.php">
                <div id="reponse">
        <p  ><!--<label for="reponse" id="reponse">Une réponse à ce message?</label>-->
            <textarea name="reponse" id="reponse" placeholder="Votre réponse..."></textarea></p>
        <input type="submit" id="sent_reponse" value="Envoyer" />
        <input type="hidden" name="mail" value="<?php echo $donnees['mail'] ?>">
    </div>
    </form>
</div>
<?php } ?>
</div>
<?php $derniers_messages->closeCursor();  ?>

</div>

</body>
</html>
