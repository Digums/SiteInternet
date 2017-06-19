<?php

require("../Modele/connexion_M.php");
?>

<?php

$addresse = $_POST['addresse'];
$complement = $_POST['complement'];
$cp = $_POST['codep'];
$ville = $_POST['ville'];
$superficie = $_POST['superficie'];
$nbrpiece = $_POST['nbpiece'];
echo $nbrpiece, $addresse;

try{
    $req = $bdd->prepare("INSERT INTO maison(addresse, complement, cp, ville, superficie, nbrpiece, id_membre) 
                                   VALUES(:addresse, :complement, :cp, :ville, :superficie, :nbrpiece, 1)");
    $req->bindParam(':addresse',$addresse);
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
header ("Location: $_SERVER[HTTP_REFERER]" );
?>