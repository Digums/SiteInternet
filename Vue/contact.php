<?php
require("../Modele/connexion M.php");
include("../Modele/messagerie-db.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="CSS/contact.css">
    <title>Title</title>
</head>
<body>

<header>
    <?php
    require("Header.php");
    ?>
</header>

<?php
$admin = true;
if ($admin == false){ ?>
    <section>
        <div class="grande">
            <p>
                <img src="../Autre/images/telephone.png" id="telephone">
            </p>
            <fieldset id="principale">
                <legend>Votre message</legend>
                <form method="post" action="../Controleur/messagerie-controleur.php">
                    <div id="gauche">
                        <p><label>Nom*</label><br /><input type="text" name="nom" placeholder="Votre nom..." required/></p>
                        <p><label>Prenom*</label><br/><input type="text" name="prenom" placeholder="Votre prenom..." required></p>
                        <p><label>Mail*</label><br/><input type="text" name="mail" placeholder="Votre mail..." required></p>
                    </div>
                    <div id="droite">
                        <p><label for="commentaire" id="commentaire">Commentaire*</label>
                            <textarea name="commentaire" id="commentaire" placeholder="Pas de commentaire..."></textarea> </p>
                        <input type="submit" id="sent" name="btnSendMsgUser" value="envoyer" />
                    </div>
                </form>
            </fieldset>
        </div>
    </section>
<?php }
else {
    $derniers_messages = getListeMessageForAdmin($bdd); ?>
    <div class ="affichage_commentaire">
    <?php while ($donnees = $derniers_messages->fetch()){?>
        <div class="message">
            <p> Un message a été envoyé par <span><?php echo $donnees['prenom'],' ', $donnees['nom']; ?>!</span><p>
            <?php echo $donnees['commentaire']; ?>
            <form method="post" action="../Controleur/messagerie-controleur.php">
                <div id="reponse">
                    <textarea name="reponse" id="reponse" placeholder="Votre réponse..."></textarea>
                    <input type="hidden" name="iddestinataire" value="<?php echo $donnees['id_membre'] ?>">
                    <input type="hidden" name="idreponse" value="<?php echo $donnees['id'] ?>" />
                    <input type="submit" id="sent_reponse" value="Envoyer" name="btnSendMsgAdmin"/>
                </div>
            </form>
        </div>
    <?php } ?>
    </div>
    <?php $derniers_messages->closeCursor(); } ?>


<footer>
    <?php
    require("footer.html");
    ?>
</footer>

</body>
</html>