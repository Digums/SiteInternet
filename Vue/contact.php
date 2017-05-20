<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=athom;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
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
            <form method="post" action="../Modele/traitement.php">
                <div id="gauche">
                    <p><label>Nom* </label></br><input type="text" name="nom" placeholder="Nom" required/></p>
                    <p><label>Prénom* </label></br><input type="text" name="prenom" id="prenom" placeholder="Prénom" required/></p>
                    <p><label>Pseudo* </label></br><input type="text" name="pseudo" placeholder="Pseudo" required/></p>
                </div>
                <div id="droite">
                    <p>
                        <label for="commentaire" id="commentaire">Commentaire</label><br />
                        <textarea name="commentaire" id="commentaire" placeholder="Pas de commentaire"></textarea>
                    </p>
                    <input type="submit" id="sent" value="Envoyer" />

                </div>
            </form>
        </fieldset>
    </div>
</section>
</body>
</html>