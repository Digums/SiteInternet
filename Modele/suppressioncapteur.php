<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=athom;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$choix = $_POST['choixcapteur'];
print_r($_POST);

try{
    /*$req = $bdd->prepare("DELETE FROM capteur WHERE nom_capteur = ':choix'");
    $req->bindParam(':choix',$choix);
    $req->execute();*/
    $req = $bdd->prepare("DELETE FROM capteur WHERE nom_capteur = :choix");
    echo $choix;
    $req->execute(array(":choix"=>$choix));
    $req->closeCursor();
echo "Bonjour";
    header ("Location: $_SERVER[HTTP_REFERER]" );

}catch(Exception $e){
    echo "<br>-------------------<br> ERREUR ! <br>";
    //print_r($params);
    die('<br>Requete Erreur !: '.$e->getMessage());
}

?>