<?php
require("../Modele/connexion_M.php");
include("../Modele/messagerie-db.php");
?>

<!DOCTYPE html>
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
    require("Header.php");
    ?>
</header>

<?php
$admin =false  ;
if ($admin == false){ ?>
    <h1 id="titrecontact">Nous contacter</h1>
    <section>
        <div class="grande">
            <p>
                <img src="../Autre/images/telephone.png" id="telephone">
            </p>
            <fieldset id="principale">
                <legend>Votre message</legend>
                <form method="post" action="../Controleur/messagerie-controleur.php">
                    <div id="gauchecontact">
                        <p><label>Nom*</label><br /><input type="text" name="nom" class="info" placeholder="Votre nom..." required/></p>
                        <p><label>Prenom*</label><br/><input type="text" name="prenom" class="info" placeholder="Votre prenom..." required></p>
                        <p><label>Mail*</label><br/><input type="text" name="mail" class="info" placeholder="Votre mail..." required></p>
                    </div>
                    <div id="droitecontact">
                        <p><label for="commentaire" id="commentaire2">Commentaire*</label>
                            <textarea name="commentaire" id="commentaire" placeholder="Pas de commentaire..."></textarea> </p>
                        <button type="submit" id="buttoncontact">Envoyer</button>
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
    <?php $derniers_messages->closeCursor(); } ?>


<footer>
    <?php
    require("footer.html");
    ?>
</footer>

</body>
</html>