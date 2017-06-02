<?php
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=athom;charset=utf8", 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$choix = $_POST['id'];

try{
    /*$sql = "DELETE FROM capteur WHERE nom_capteur=':choix'";
// use exec() because no results are returned
    $bdd->exec($sql);
    */
    $req = $bdd->prepare("DELETE FROM capteur WHERE nom_capteur = :choix");
    $req->bindParam(':choix',$choix);
    $req->execute();

    $req->closeCursor();
    header ("Location: $_SERVER[HTTP_REFERER]" );
}catch(Exception $e){
    echo "<br>-------------------<br> ERREUR ! <br>";
    //print_r($params);
    die('<br>Requete Erreur !: '.$e->getMessage());
}

?>