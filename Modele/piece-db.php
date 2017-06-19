<?php

require('../Modele/connexion_M.php');

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
                              VALUES(:nom, :mesure, :nbr_capteur, :id_maison)");
        $req->bindParam(':nom',$nom);
        $req->bindParam(':mesure',$taille);
        $req->bindParam(':nbr_capteur',$nbrcapteur);
        $req->bindParam(':id_maison', $_SESSION['idmaison']);
        $req->execute();
        $req->closeCursor();
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());

    }
}

function listepiece($bdd, $id){
    try{
        $req = $bdd->query("SELECT nom_piece, mesure, nbr_capteur
                            FROM piece p  
                            INNER JOIN maison m 
                            ON m.id = p.id_maison
                            WHERE m.id_membre = $id");
        return $req;
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}

?>