<?php

require('../Modele/connexion M.php');

?>

<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 29/05/2017
 * Time: 23:35
 */
function addmaison($bdd, $adresse, $complement, $cp, $ville, $superficie, $nbrpiece){
    try{
        //echo $adresse, $complement, $cp;
        $req = $bdd->prepare("INSERT INTO maison(addresse, complement, cp, ville, superficie, nbrpiece, id_membre) 
                                   VALUES(:adresse, :complement, :cp, :ville, :superficie, :nbrpiece, 1)");
        $req->bindParam(':adresse',$adresse);
        $req->bindParam(':complement',$complement);
        $req->bindParam(':cp',$cp);
        $req->bindParam(':ville',$ville);
        $req->bindParam(':superficie',$superficie);
        $req->bindParam(':nbrpiece',$nbrpiece);
        $req->execute();
        $req->closeCursor();
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());

    }
}