<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 29/05/2017
 * Time: 23:19
 */

include('../Modele/maison-db.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    if (isset($_POST['btnAddMaison'])) {
        addmaison($bdd, $_POST['adresse'], $_POST['complement'], $_POST['codep'], $_POST['ville'], $_POST['superficie'], $_POST['nbrpiece']);
    }
    header("Location: $_SERVER[HTTP_REFERER]");
}
?>