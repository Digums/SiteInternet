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
$verif=true;



/*echo $mdp,$email;*/




$verifemail = $bdd->query("SELECT email FROM membre WHERE email='$email' ");

while ($donnees = $verifemail->fetch())
{

        echo $donnees['email'] . ' appartient à ' . '<br />';
        $verif=false;
}
if ($verif){
    echo'gros bouffon';
}

?>


