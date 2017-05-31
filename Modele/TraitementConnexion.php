<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$email = $_POST['email'];
$mdp = $_POST['mdp'];



/*echo $mdp,$email;*/


$verifemail = $bdd->query("SELECT email,mdp FROM membre WHERE email='$email' ");
$donnees = $verifemail->fetch();
if($donnees!=null){
    echo 'le mail est bon: '.$donnees['email'];
    if($donnees['mdp']==$mdp){
        /*header('Location: http://localhost/SiteInternet/index.php');*/
        $idUtilisateur= $bdd->query("SELECT id FROM membre WHERE mdp='$mdp'");
        $donnees2=$idUtilisateur->fetch();
        $_SESSION['id']=$donnees2['id'];
        echo ' Id du membre: '.$_SESSION['id'];
        header("Location: ../Vue/accueil_user.php ");


    }
    else{
        echo' mauvais mot de passe';
    }
}
else{
    echo 'mauvaise adresse email';
    /*header ("Location: $_SERVER[HTTP_REFERER]" );*/

}

?>


