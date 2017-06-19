<?php
include("../Modele/messagerie-db.php");
?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    if (isset($_POST['btnSendMsgUser'])) {
        addNewMsgUser($bdd, $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['commentaire']);
    }
    if (isset($_POST['btnSendMsgAdmin'])){
        addNewMsgAdmin($bdd, $_POST['iddestinataire'], $_POST['idreponse'], $_POST['reponse']);
    }
    header("Location: $_SERVER[HTTP_REFERER]");
}

?>


