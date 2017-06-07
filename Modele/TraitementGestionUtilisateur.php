<?php
if (!isset($_SESSION['verif'])){
session_start();
}

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=athom;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

echo $_POST['nom'];
$idmembre = $_POST['id'];
echo $idmembre;
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];


$bdd->exec("UPDATE membre SET nom = '$nom' , prenom = '$prenom' , mdp= '$mdp', email= '$email' WHERE id = $idmembre ");


header ("Location: $_SERVER[HTTP_REFERER]" );








?>