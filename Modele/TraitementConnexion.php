<?php
require('../Modele/connexion M.php');

$email = $_POST['email'];
$mdp = $_POST['mdp'];



/*echo $mdp,$email;*/


$verifemail = $bdd->query("SELECT email,mdp FROM membre WHERE email='$email' ");
$donnees = $verifemail->fetch();
if($donnees!=null){
    session_start();
    echo 'le mail est bon: '.$donnees['email'];
    if($donnees['mdp']==$mdp){
        /*header('Location: http://localhost/SiteInternet/index.php');*/
        $idUtilisateur= $bdd->query("SELECT membre.id, membre.prenom, maison.id AS idmaison FROM membre
                                              JOIN maison ON maison.id_membre = membre.id
                                              WHERE mdp='$mdp'");
        $ligne=$idUtilisateur->fetch();
        $_SESSION['id']=$ligne['membre.id'];
        $_SESSION['idmaison']= $ligne['idmaison'];
        $_SESSION['prenom']=$ligne['membre.prenom'];

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


