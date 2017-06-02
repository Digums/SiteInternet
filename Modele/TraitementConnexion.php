<?php

require('../Modele/connexion M.php');

?>
<?php

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
        $idUtilisateur= $bdd->query("SELECT id FROM membre WHERE mdp='$mdp'");
        $donnees2=$idUtilisateur->fetch();
        $_SESSION['id']=$donnees2['id'];
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


