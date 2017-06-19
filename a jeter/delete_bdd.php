<?php
//connection BDD
try {
    $bdd = new PDO('mysql:host = localhost;dbname=athom;charset=utf8', 'root', '');
    echo 'ok';
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
    }

$id_el = $_GET['id'];
$var = "DELETE FROM capteur WHERE id= $id_el";
$bdd->query($var);   //suppression dans bdd

/*header ("Location: $_SERVER[HTTP_REFERER]" );*/

/*exit();*/