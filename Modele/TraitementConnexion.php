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
    echo  ' Bon mot de Passe: ' . $donnees['mdp'] . '<br />';
    }
    else{
        echo' mauvais mot de passe';
    }
}
else{
    echo 'mauvaise adresse email';
    /*header('http://localhost/SiteInternet/Modele/TraitementConnexion.php');*/
    include ("../Quentin/acceuil_popup.php");
}

?>


