<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" href="CSS/ajout_capteur.css">
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $typeErr = $etatErr = $pieceErr = "";
$name = $type = $etat = $piece = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Le nom est requis";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["type"])) {
        $typeErr = " Le type est requis";
    } else {
        $type = test_input($_POST["type"]);
    }

    if (empty($_POST["etat"])) {
        $etat = "";
    } else {
        $etat = test_input($_POST["etat"]);
    }

    if (empty($_POST["piece"])) {
        $pieceErr = "La pièce est requise";
    } else {
        $piece = test_input($_POST["piece"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <label>Nom du capteur:*
        <input type="text" name="<?php echo $name; ?>" required>
    </label>
    <span style="color: red"> *<?php echo $etatErr; ?></span>
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
    <input type="text" name="piece" required> <?php echo $pieceErr; ?>
    <br><br>

    <input type="submit">

</form>

<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 17/05/2017
 * Time: 19:17
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="at'hom";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO capteur(id,nom_capteur,type_capteur,etat,donnée, id_piece,id_action) 
VALUES ('','$name','$type','$etat','',1,'')";
// use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}


catch(PDOException $e)
{
    echo "Connection failed:" . $e ->gerMessage();
}
?>


</body>
</html>
