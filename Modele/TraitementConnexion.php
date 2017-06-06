<?php
<<<<<<< HEAD

require('../Modele/connexion M.php');

?>
<?php
=======
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=athom;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
>>>>>>> 5d198c7e4e1b79747da491b935cd011b3863ecc1

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


