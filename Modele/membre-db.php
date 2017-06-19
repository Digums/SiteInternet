<?php
require("../Modele/connexion_M.php");
?>

<?php

function inscription($bdd, $nom, $prenom, $date, $email, $mdp, $statut, $adresse, $nbrapp){
    try {
        $req = $bdd->prepare("INSERT INTO membre(nom,prenom, date,email,mdp,statut,adresse,nbrapp) 
                          VALUES (:nom,:prenom,:date,:email,:mdp,:statut,:adresse,:nbrapp)");
        $req->bindParam(":nom", $nom);
        $req->bindParam(":prenom", $prenom);
        $req->bindParam(":date", $date);
        $req->bindParam(":email", $email);
        $req->bindParam(":mdp", $mdp);
        $req->bindParam(":statut", $statut);
        $req->bindParam(":adresse", $adresse);
        $req->bindParam(":nbrapp", $nbrapp);
        $req->execute();
    }catch (Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: ' . $e->getMessage());

    }
}

function verifConnexion($bdd, $email){
    try {
        $req = $bdd->query("SELECT email,mdp FROM membre WHERE email=$email");
        return $req;
    }catch (Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        die('<br>Requete Erreur !: ' . $e->getMessage());
    }
}

function infoUsers($bdd, $mdp){
    try {
        $req = $bdd->query("SELECT membre.id, membre.prenom, maison.id AS idmaison FROM membre
                                                  JOIN maison ON maison.id_membre = membre.id
                                                  WHERE mdp= $mdp ");
        return $req;
    }catch (Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        die('<br>Requete Erreur !: ' . $e->getMessage());
    }
}

function gestionUser($bdd, $nom, $prenom, $mdp, $email, $idmembre){
    try{
        $req = $bdd->prepare("UPDATE membre SET nom = :nom , prenom = :prenom, mdp= :mdp, email= :email WHERE id = :idmembre ");
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':mdp', $mdp);
        $req->bindParam(':email', $email);
        $req->bindParam(':idmembre', $idmembre);
        $req->execute();
    }catch (Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        die('<br>Requete Erreur !: ' . $e->getMessage());
    }
}

?>