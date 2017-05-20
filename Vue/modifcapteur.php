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

<html>

<head>
<link rel="stylesheet" href="CSS/ajout_capteur.css">
</head>
<body>

<!-- <?php require ("../Controleur/test_ajout_capteur.php");?> -->
<div class="test">
<div class="newcapteur">
    <fieldset id="formulaire">
        <legend>Ajouter un capteur</legend>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <p><label>Nom du capteur: </label><input type="text" name="name" required></p>
            <p><label>Type de capteur: </label><select name="type_capteur" id="type_capteur" required>
                <option value="">--Faites votre choix--</option>
                <option value="temperature">Temperature</option>
                <option value="humidite">Humidité</option>
                <option value="camera">Caméra</option>
                <option value="fumee">Détection de fumée</option>
                <option value="Sdb">Position de porte</option></select></p>
            <p><label>Etat du capteur: </label>
                <input type="radio" name="etat" value="On">Allumé
                <input type="radio" name="etat" value="Off">Eteint</p>
            <p><label>Nom de la pièce: </label><input type="text" name="pièce" id="pièce"></p>
            <input type="submit" id="sent" value="Valider">
        </form>
    </fieldset>
</div>
<div class="delcapteur">
    <p class="sousligne">Tous vos capteurs</p>
    <?php
    $capteurs = $bdd->query('SELECT * FROM capteur');
    while($donnees = $capteurs->fetch()){ ?>
        <p>Il y a un capteur <?php echo $donnees['type_capteur'] ?> dans : <?php echo $donnees['nom_pièce']?></p>
    <?php }
    ?>
</div>
</div>
</body>
</html>

