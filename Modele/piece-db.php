<?php

require('../Modele/connexion M.php');

?>

<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 31/05/2017
 * Time: 23:47
 */

function addpiece($bdd, $nom, $taille, $nbrcapteur){
    try{
        echo $nom, $taille, $nbrcapteur;
        $req = $bdd->prepare("INSERT INTO piece(nom_piece, mesure, nbr_capteur, id_maison) 
                              VALUES(:nom, :mesure, :nbr_capteur, 1)");
        $req->bindParam(':nom',$nom);
        $req->bindParam(':mesure',$taille);
        $req->bindParam(':nbr_capteur',$nbrcapteur);
        $req->execute();
        $req->closeCursor();
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());

    }
}

?>