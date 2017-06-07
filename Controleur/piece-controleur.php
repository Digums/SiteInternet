<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 31/05/2017
 * Time: 23:47
 */

include ('../Modele/piece-db.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    if (isset($_POST['btnAddPiece'])){
        addpiece($bdd, $_POST['nom'], $_POST['taille'], $_POST['nbrcapteur']);
    }
    header("Location: $_SERVER[HTTP_REFERER]");

}