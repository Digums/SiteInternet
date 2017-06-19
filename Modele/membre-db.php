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
        die('<br>Requete Erreur !: ' . "inscription". $e->getMessage());

    }
}

function verifConnexion($bdd, $email){
    try {
        $req = $bdd->prepare("SELECT email,mdp FROM membre WHERE email=:email");
        $req -> bindParam(":email",$email);
        $req->execute();
        return $req;
    }catch (Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        die('<br>Requete Erreur !: ' . "verif connexion " . $e->getMessage());
    }
}

function infoUsers($bdd, $mdp){
    try {
        $req = $bdd->prepare("SELECT membre.id, membre.prenom FROM membre
                                                  WHERE mdp= :mdp ");
        $req-> bindParam(":mdp",$mdp);
        $req->execute();
        return $req;
    }catch (Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        die('<br>Requete Erreur !: ' ."info users". $e->getMessage());
    }
}
function idmaison($bdd, $idmembre){
    try {
        $req = $bdd->prepare("SELECT id FROM maison WHERE id_membre=:idmembre");
        $req-> bindParam(":idmembre", $idmembre);
        $req->execute();
        return $req;
    }catch (Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        die('<br>Requete Erreur !: ' ."info users". $e->getMessage());
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
        die('<br>Requete Erreur !: ' . "Gestion User". $e->getMessage());
    }
}

?>