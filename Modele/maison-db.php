<?php

require('../Modele/connexion_M.php');

?>

<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 29/05/2017
 * Time: 23:35
 */
function addmaison($bdd, $adresse, $complement, $cp, $ville, $superficie, $nbrpiece, $id_membre){
    try{
        //echo $adresse, $complement, $cp;
        $req = $bdd->prepare("INSERT INTO maison(adresse, complement, cp, ville, superficie, nbrpiece, id_membre) 
                                   VALUES(:adresse, :complement, :cp, :ville, :superficie, :nbrpiece, :id_membre)");
        $req->bindParam(':adresse',$adresse);
        $req->bindParam(':complement',$complement);
        $req->bindParam(':cp',$cp);
        $req->bindParam(':ville',$ville);
        $req->bindParam(':superficie',$superficie);
        $req->bindParam(':nbrpiece',$nbrpiece);
        $req->bindParam(':id_membre', $id_membre);
        $req->execute();
        $req->closeCursor();
        $_SESSION['idmaison'] = $bdd->lastInsertId();
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());

    }
}