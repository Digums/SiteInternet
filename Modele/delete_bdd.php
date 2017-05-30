<?php
//connection BDD
try {
    $bdd = new PDO('mysql:host = localhost;dbname=athom;charset=utf8', 'root', '');
    echo 'ok';
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
    }

$id_el = $_POST['id'];

$bdd->query("delete  FROM capteur  where id= $id_el");   //suppression dans bdd

header ("Location: $_SERVER[HTTP_REFERER]" );

exit();