<?php
session_start();
require("../Modele/connexion_M.php");
include("../Modele/messagerie-db.php");
?>

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="CSS/style.css">
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../Autre/images/floticon.ico" >
    <title>Title</title>
</head>

<body>

<header>
    <?php
    require("HeaderAdmin.php");
    ?>
</header>

<?php
    $derniers_messages = getListeMessageForAdmin($bdd); ?>
    <div class ="affichage_commentaire">
        <?php while ($donnees = $derniers_messages->fetch()){?>
            <div class="messagecom">
                <p id="couleurmsg"> Un message a été envoyé par <span id="nomprenom"><?php echo $donnees['prenom'],' ', $donnees['nom']; ?>!</span><p>
                    <?php echo $donnees['commentaire']; ?>
                <form method="post" action="../Controleur/messagerie-controleur.php">
                    <div id="reponse">
                        <textarea name="reponse" id="reponse" placeholder="Votre réponse..."></textarea>
                        <input type="hidden" name="iddestinataire" value="<?php echo $donnees['id_membre'] ?>">
                        <input type="hidden" name="idreponse" value="<?php echo $donnees['id'] ?>" />
                        <button id="sent_reponse">Envoyer</button>
                    </div>
                </form>
                <hr>
            </div>
        <?php } ?>
    </div>
    <?php $derniers_messages->closeCursor();  ?>


<footer>
    <?php
    require("footer.html");
    ?>
</footer>

</body>
</html>