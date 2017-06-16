<?php
include("../Modele/inscription-db.php");
?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    if (isset($_POST['btnInscription'])) {
        $adresse = $_POST['ville'] + " " + $_POST['pays'] + " " + $_POST['codepostal'];
        if ($_POST['mdp']==$_POST['mdp2']){
        inscription($bdd, $_POST['nom'], $_POST['prenom'], $_POST['date'], $_POST['email'], $_POST['mdp'], 1
            , $adresse,1); }

    }
    header("Location: $_SERVER[HTTP_REFERER]");
}
?>