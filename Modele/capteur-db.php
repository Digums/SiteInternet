<?php

require("../Modele/connexion_M.php");
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
        //$idmaison=1;
        $idpiece = $bdd->prepare("SELECT id FROM piece WHERE nom_piece = :piece AND id_maison = :idmaison");
        $idpiece->bindParam(':piece', $piece);
        $idpiece->bindParam(':idmaison', $_SESSION['idmaison']);
        $idpiece->execute();
        $pieceid = $idpiece->fetchColumn(0);
        echo $pieceid;
        $req = $bdd->prepare("INSERT INTO capteur(nom_capteur, type_capteur, etat,nom_piece,id_piece, id_maison) VALUES(:nom, :typecapteur,:etat,:piece, :idpiece, :idmaison)");
        $req->bindParam(':nom', $name);
        $req->bindParam(':typecapteur', $typecapteur);
        $req->bindParam(':etat', $etat);
        $req->bindParam(':piece', $piece);
        $req->bindParam(':idpiece', $pieceid);
        $req->bindParam(':idmaison', $_SESSION['idmaison']);
        $req->execute();
        $last_id = $bdd->lastInsertId();
        $req2 = $bdd->prepare("INSERT INTO donnees(donnee, id_capteur) VALUES(0, :last_id)");
        $req2->bindParam(':last_id', $last_id);
        $req2->execute();
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
        $req = $bdd->prepare("SELECT * FROM capteur c 
                              INNER JOIN maison m ON m.id = c.id_maison 
                              WHERE m.id_membre = :id");
        $req -> bindParam(':id', $id);
        $req->execute();
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

function donneesTrame(){
    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    echo "Raw Data:<br />";
    //return $data;
    $data_tab = str_split($data,33);
    echo "Tabular Data:<br />";
    return $data_tab;
}

function trame($bdd, $trame){
    // décodage avec des substring
    $t = substr($trame,0,1);
    $o = substr($trame,1,4);
    $r = substr($trame,5,1);
    $c = substr($trame,6,1);
    $n = substr($trame,7,2);
    $v = substr($trame,9,4);
    $a = substr($trame,13,4);
    $x = substr($trame,17,2);
    $year = substr($trame,19,4);
    $month = substr($trame,23,2);
    $day = substr($trame,25,2);
    $hour = substr($trame,27,2);
    $min = substr($trame,29,2);
    $sec = substr($trame,31,2);
    echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");

    if($c == 3){
        $id = $n;
        $date = $year + "-" + $month + "-" + $day + " " + $hour + ":" + $min + ":" + $sec;
        $donnee = $v * 0.001;

    }
    if(empty($donnee)){
        echo "non";
    }

    $req = $bdd->prepare("INSERT INTO donnees(donnee, id_capteur, date) VALUES (:donnee, :idcapteur, :date)");
    $req->bindParam(':donnee', $donnee);
    $req->bindParam(':idcapteur', $id);
    $req->bindParam(':date', $date);
    $req->execute();
    echo "Vous avez réussi !";
}
?>