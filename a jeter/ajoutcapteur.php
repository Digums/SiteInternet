<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 17/05/2017
 * Time: 19:17
 */
 require("../Modele/connexion_M.php");
?>

<html>

<head>
<link rel="stylesheet" href="../Vue/CSS/style.css">
</head>
<body>

<?php
    require("../Controleur/test_ajout_capteur.php");
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <label>Nom du capteur:*</label>
        <input type="text" name="name" required>
    <span style="color: red">* <?php echo $etatErr;?></span>
    <br><br>

Type de capteur:
    <select name="type" id="type" required> <?php echo $typeErr; ?>
        <option value="" > </option>
        <option value="temperature">Tempeture</option>
        <option value="humidite">Humidité</option>
        <option value="camera">Caméra</option>
        <option value="porte">Porte</option>
        <option value="fumee">Fumée</option>
    </select><br><br>

Etat du capteur :
    <input type="radio" name="etat" value="allume">Allumé
    <input type="radio" name="etat" value="eteint ">Eteint
    <span style="color: red"> <?php echo $etatErr; ?><br><br></span>

Nom de la pièce :
    <input type="" name="piece" required> <?php echo $pieceErr; ?>
    <br><br>

    <input type="submit" name="submit" value="Valider">

</form>


<?php
try {
    $sql = "INSERT INTO `capteur`(`nom_capteur`, `type_capteur`, `etat`, `id_piece`)
VALUES ('$name','$type','$etat','$piece')";
// use exec() because no results are returned
    $conn->exec($sql);
    /*echo "New record created successfully";*/
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
?>

</body>
</html>

