<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 19/05/2017
 * Time: 11:47
 */
// define variables and set to empty values
$nameErr = $typeErr = $etatErr = $pieceErr = "";
$name = $type = $etat = $piece = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Le nom est requis";
    } else {
        $name = test_input($_POST["name"]);
        /*if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "lettre [A-Z] et [espace]";
        }*/
    }

    if (empty($_POST["type"])) {
        $typeErr = " Le type est requis";
    } else {
        $type = test_input($_POST["type"]);
    }

    if (empty($_POST["etat"])) {
        $etat = "";
    } else {
        $etat = test_input($_POST["etat"]);
    }

    if (empty($_POST["piece"])) {
        $pieceErr = "La pièce est requise";
    } else {
        $piece = test_input($_POST["piece"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>