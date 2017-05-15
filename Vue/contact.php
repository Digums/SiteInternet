<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="CSS/contact.css">
    <title>Title</title>
</head>
<body>

<header>
<?php
require("footer.html");
?>
</header>

<section>
    <div id="grande">
        <div id="haut">
            <p>
                <img src="../Autre/images/bonhommetel.jpg" id="telephone">
            </p>
        </div>
        <fieldset id="principale">
            <legend>Votre message</legend>
            <div id="gauche">
                <form method="post" action="contact.php">
                    <p><label>Nom* </label></br><input type="text" name="nom" placeholder="Nom" required/></p>
                    <p><label>Prénom* </label></br><input type="text" name="prenom" id="prenom" placeholder="Prénom" required/></p>
                    <p><label>Pseudo* </label></br><input type="text" name="pseudo" placeholder="Pseudo" required/></p>
                </form>
            </div>
            <div id="droite">
                <form method="post" action="traitement.php">
                    <p>
                        <label for="commentaire" id="commentaire">Commentaire</label><br />
                        <textarea name="commentaire" id="commentaire" placeholder="Pas de commentaire"></textarea>
                    </p>
                    <input type="submit" id="sent" value="Envoyer" />

                </form>
            </div>

        </fieldset>
    </div>
</section>

</body>
</html>