<?php
require('../Modele/connexion_M.php');
include('../Modele/membre-db.php');

$email = $_POST['email'];
$mdp = $_POST['mdp'];



/*echo $mdp,$email;*/


$verifemail = verifConnexion($bdd, $email);
$donnees = $verifemail->fetch();
session_start();
if($donnees!=null){

    echo 'le mail est bon: '.$donnees['email'];
    if($donnees['mdp']==$mdp){
        /*header('Location: http://localhost/SiteInternet/index.php');*/
        $idUtilisateur= infoUsers($bdd, $mdp);
        $ligne=$idUtilisateur->fetch();
        $_SESSION['id']=$ligne['id'];

        $_SESSION['prenom']=$ligne['prenom'];
        $idUtilisateur=$_SESSION['id'];
        $idmaison1=idmaison($bdd, $idUtilisateur);
        $idmaison2=$idmaison1->fetch();
        $idmaison=$idmaison2['id'];
        $_SESSION[$idmaison]=$idmaison;

        header("Location: ../Vue/accueil_user.php ");



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


