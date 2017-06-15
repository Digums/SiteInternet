<?php
require("../Modele/connexion M.php");
?>

<?php

function inscription($bdd, $nom, $prenom, $date, $email, $mdp, $statut, $adresse, $nbrapp){
    try {
        $req = $bdd->prepare("INSERT INTO membre(nom,prenom, date,email,mdp,statut,adresse,nbrapp,nomloca) 
                          VALUES (:nom,:prenom,:date,:email,:mdp,:statut,:adresse,:nbrapp,:nom)");
        $req->bindParam(":nom", $nom);
        $req->bindParam(":prenom", $prenom);
        $req->bindParam(":date", $date);
        $req->bindParam(":email", $email);
        $req->bindParam(":mdp", $mdp);
        $req->bindParam(":statut", $statut);
        $req->bindParam(":adresse", $adresse);
        $req->bindParam(":nbrapp", $nbrapp);
        $req->execute();
    } catch (Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: ' . $e->getMessage());

    }
}
?>