<?php

require('../Modele/connexion M.php');

?>

<?php

function getListeMessageUser($bdd){
    try{
        $req = $bdd->query('SELECT mail, commentaire FROM messageuser 
                            JOIN membre ON membre.id = messageuser.id_membre
                            WHERE reponse=0 AND id_membre = 3');
        return $req;
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}

function getListeMessageFromAdmin($bdd){
    try{
        $req = $bdd->query('SELECT * FROM messageadmin
                            JOIN messageuser ON messageuser.id = messageadmin.idreponse
                            WHERE iddestinataire = 3');
        return $req;
    }catch(Exception $e) {
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: ' . $e->getMessage());
    }
}

function getListeMessageForAdmin($bdd){
    try{
        $req = $bdd->query('SELECT * FROM messageuser 
                            WHERE reponse=0');
        return $req;
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}

function addNewMsgUser($bdd, $nom, $prenom, $mail, $commentaire){
    try{
        echo $nom, $prenom, $mail, $commentaire;
        $req = $bdd->prepare('INSERT INTO messageuser(nom, prenom, mail, commentaire) VALUES(:nom, :prenom, :mail, :commentaire)');
        $req->bindParam(':nom',$nom);
        $req->bindParam(':prenom',$prenom);
        $req->bindParam(':mail',$mail);
        $req->bindParam(':commentaire',$commentaire);
        $req->execute();
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}

function addNewMsgAdmin($bdd, $iddestinataire, $idreponse, $reponse){
    try{
        $req = $bdd->prepare('INSERT INTO messageadmin(iddestinataire, idreponse, message)
                              VALUES (:iddestinataire, :idreponse, :reponse)');
        $req->bindParam(':iddestinataire', $iddestinataire);
        $req->bindParam(':idreponse', $idreponse);
        $req->bindParam(':reponse', $reponse);
        $req->execute();
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}
?>
