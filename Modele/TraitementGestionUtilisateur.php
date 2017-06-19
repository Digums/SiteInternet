<?php
require("../Modele/connexion_M.php");
?>

<?php
if (!isset($_SESSION['verif'])){
session_start();
}

echo $_POST['nom'];
$idmembre = $_POST['id'];
echo $idmembre;
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];

$req = gestionUser($bdd, $nom, $prenom, $mdp, $email, $idmembre);

header ("Location: $_SERVER[HTTP_REFERER]" );








?>