<?php

require('../Modele/connexion M.php');

?>

<?php

function getListeMessageUser($bdd){
    try{
        $req = $bdd->query('SELECT mail, commentaire FROM commentaire 
                            JOIN membre ON membre.id = commentaire.id_membre
                            WHERE reponse=0 AND id_membre = 3');
        return $req;
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}

function getListeMessageAdmin($bdd){
    try{
        $req = $bdd->query('SELECT * FROM commentaire 
                            WHERE reponse=0');
        return $req;
    }catch(Exception $e){
        echo "<br>-------------------<br> ERREUR ! <br>";
        //print_r($params);
        die('<br>Requete Erreur !: '.$e->getMessage());
    }
}

function addNewMsg($bdd, $nom, $prenom, $mail, $commentaire){
    try{
        echo $nom, $prenom, $mail, $commentaire;
        $req = $bdd->prepare('INSERT INTO commentaire(nom, prenom, mail, commentaire) VALUES(:nom, :prenom, :mail, :commentaire)');
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
?>
