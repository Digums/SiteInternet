<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 29/05/2017
 * Time: 23:41
 */
include("../Modele/capteur-db.php");

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    if (isset($_POST['btnAddCapteur'])) {
        addcapteur($bdd, $_POST['name'], $_POST['typecapteur'], $_POST['etat'], $_POST['piece']);
    }
    if (isset($_POST['btnDelCapteur'])){
        deletecapteur($bdd, $_POST['btnDelCapteur']);
    }
    header("Location: $_SERVER[HTTP_REFERER]");
}
?>