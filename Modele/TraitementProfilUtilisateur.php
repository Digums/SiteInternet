<?php
session_start();
require("../Modele/Connexion_T.php");
$email=$_POST['email'];
$mdp=$_POST['mdp'];

$idmembre=$_SESSION['id'];
$_SESSION['checkmdp']=1;
$_SESSION['checkemail']=1;
$_SESSION['checkadresse']=1;
$_SESSION['changement']=1;
$checkemail = $bdd->query("SELECT * FROM membre WHERE email= '$email' ");
$checkemail2= $checkemail->fetch();
if ($checkemail2==null) {

    $_SESSION['changement'] = 2;



    $bdd->exec("UPDATE membre SET email = '$email' WHERE id = $idmembre ");
}
else if ($_SESSION['email']!=$_POST['email']){
    $_SESSION['checkemail']=2;
}



if($_POST['mdp']==$_POST['mdp2']){
    $mdp=$_POST['mdp'];
    if ($_SESSION['mdp'] != $mdp){
        $_SESSION['changement']=2;
    }
    $bdd->exec("UPDATE membre SET mdp = '$mdp' WHERE id = $idmembre ");

}
else{
    $_SESSION['checkmdp']=2;

}
if($_POST['adresse']!=null && $_POST['codepostal']!=null)
{
    $adresse=$_POST['adresse'] . ", " . $_POST['codepostal'] . ", " . $_POST['ville'] . ", " . $_POST['pays'];
    $bdd->exec("UPDATE membre SET adresse = '$adresse' WHERE id = $idmembre ");
    $_SESSION['changement']=2;

}
elseif($_POST['adresse']!=null || $_POST['codepostal']!=null){
    $_SESSION['checkadresse']=2;
}



header ("Location: $_SERVER[HTTP_REFERER]" );

?>