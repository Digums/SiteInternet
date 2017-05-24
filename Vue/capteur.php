<?php
require ("../Modele/connexion M.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

<?php
require ("../Controleur/test_ajout_capteur.php")
?>

<header>
    <?php
    require ("Header.php");
    ?>
</header>

<?php
require ("Menu_user.php");
?>


<div class="test">
    <div class="newcapteur">
        <fieldset id="formulaire">
            <legend>Ajouter un capteur</legend>
            <form method="post" action="../Modele/creationcapteur.php">
                <p><label>Nom du capteur: </label><input type="text" name="name" required></p>
                <p><label>Type de capteur: </label><select name="typecapteur" id="type_capteur" required>
                        <option value="">--Faites votre choix--</option>
                        <option value="temperature">Temperature</option>
                        <option value="humidite">Humidité</option>
                        <option value="camera">Caméra</option>
                        <option value="fumee">Détection de fumée</option>
                        <option value="Sdb">Position de porte</option></select></p>
                <p><label>Etat du capteur: </label>
                    <input type="radio" name="etat" value="On">Allumé
                    <input type="radio" name="etat" value="Off">Eteint</p>
                <p><label>Nom de la pièce: </label><input type="text" name="piece" id="piece"></p>
                <input type="submit" id="sent" value="Valider">
            </form>
        </fieldset>
    </div>
    <!--<div class="delcapteur">
        <p class="sousligne">Tous vos capteurs</p>

    </div>-->
</div>

<?php

try{
echo $type, $name, $piece, $etat;
$req = $conn->prepare("INSERT INTO capteur(nom_capteur, type_capteur, etat,id_piece) VALUES(:nom, :typecapteur,:etat,:piece)");
$req->bindParam(':nom',$name);
$req->bindParam(':type',$type);
$req->bindParam(':etat',$etat);
$req->bindParam(':piece',$piece);
$req->execute();
$req->closeCursor();
}catch(Exception $e){
echo "<br>-------------------<br> ERREUR ! <br>";
//print_r($params);
die('<br>Requete Erreur !: '.$e->getMessage());

}
header ("Location: $_SERVER[HTTP_REFERER]" );
?>

</body>
</html>

<!--page action du formulaire:
<?php
/*require ("../Modele/connexion M.php");

$name = $_POST['name'];
$typecapteur = $_POST['typecapteur'];
$etat = $_POST['etat'];
$piece = $_POST['piece'];
try{
    echo $typecapteur, $name, $piece, $etat;
    $req = $conn->prepare("INSERT INTO capteur(nom_capteur, type_capteur, etat,id_piece) VALUES(:nom, :typecapteur,:etat,:piece)");
    $req->bindParam(':nom',$name);
    $req->bindParam(':typecapteur',$type);
    $req->bindParam(':etat',$etat);
    $req->bindParam(':piece',$piece);
    $req->execute();
    $req->closeCursor();
}catch(Exception $e){
    echo "<br>-------------------<br> ERREUR ! <br>";
    //print_r($params);
    die('<br>Requete Erreur !: '.$e->getMessage());

}
header ("Location: $_SERVER[HTTP_REFERER]" ); */
?>-->

