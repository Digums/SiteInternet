<?php

require ("../Modele/connexion M.php");
?>

<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 29/05/2017
 * Time: 23:41
 */

function addcapteur($bdd, $name, $typecapteur, $etat, $piece){
    try {
        $idmaison=1;
        $req = $bdd->prepare("INSERT INTO capteur(nom_capteur, type_capteur, etat,nom_piece,id_maison) VALUES(:nom, :typecapteur,:etat,:piece, :idmaison)");
        $req->bindParam(':nom', $name);
        $req->bindParam(':typecapteur', $typecapteur);
        $req->bindParam(':etat', $etat);
        $req->bindParam(':piece', $piece);
        $req->bindParam(':idmaison', $_SESSION['idmaison']);
        $req->execute();
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}

function deletecapteur($bdd, $id){
    $req = $bdd->prepare("DELETE FROM capteur WHERE id = :id_el");
    $req->bindParam(':id_el',$id);
    $req->execute();
}

function listecapteur($bdd, $id){
    try{
        $req = $bdd->query("SELECT *
                            FROM capteur c  
                            INNER JOIN maison m 
                            ON m.id = c.id_maison
                            WHERE m.id_membre = $id");
        return $req;
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}

function getCapteurSalle($bdd, $piece){
    try{
        $req = $bdd->prepare('SELECT capteur.nom_capteur, donnees.donnee
                              FROM capteur
                              JOIN donnees ON capteur.id = donnees.id_capteur
                              WHERE capteur.id_piece = :piece');
        $req->bindParam(':piece', $piece);
        $req->execute();
        return $req;
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}


?>