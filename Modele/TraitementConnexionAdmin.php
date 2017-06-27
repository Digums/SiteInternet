<?php
require('../Modele/connexion_M.php');
include('../Modele/membre-db.php');
$email = $_POST['email'];
$mdp = $_POST['mdp'];
session_start();
$_SESSION['idmaison']=1;
$_SESSION['client']=true;


/*echo $mdp,$email;*/


$verifemail = verifConnexion($bdd, $_POST['email']);
$donnees = $verifemail->fetch();

if($donnees!=null){

    echo 'le mail est bon: '.$donnees['email'];
    if($donnees['mdp']==$mdp){
        /*header('Location: http://localhost/SiteInternet/index.php');*/
        $idUtilisateur= infoUsers($bdd, $mdp);
        $ligne=$idUtilisateur->fetch();
        $_SESSION['id']=$ligne['id'];
        $_SESSION["Admin"]="true";

        $_SESSION['prenom']=$ligne['prenom'];
        $idUtilisateur=$_SESSION['id'];
        $idmaison1=idmaison($bdd, $idUtilisateur);
        $idmaison2=$idmaison1->fetch();
        $idmaison=$idmaison2['id'];
        $_SESSION['idmaison']=$idmaison;
        echo $idmaison;
        echo $idUtilisateur;
        echo $_SESSION['id'];
        echo $_SESSION['idmaison'];

        header("Location: ../Vue/accueil_admin.php ");



    }
    else{
        $_SESSION['verif']=2;
        echo $_SESSION['verif'];
        header ("Location: $_SERVER[HTTP_REFERER]");
    }
}
else{

    $_SESSION['verif']=3;
    echo $_SESSION['verif'];
    header ("Location: $_SERVER[HTTP_REFERER]" );


}

?>


