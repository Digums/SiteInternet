<?php
include("../Modele/messagerie-db.php");
?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    if (isset($_POST['btnSendMsg'])) {
        addNewMsg($bdd, $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['commentaire']);
    }
    header("Location: $_SERVER[HTTP_REFERER]");

}

?>


