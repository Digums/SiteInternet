<?php
include("../Modele/membre-db.php");
?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    if (isset($_POST['btnInscription'])) {
        $_SESSION['checkinscription'] = 0;

        $adresse = $_POST['ville'] + " " + $_POST['pays'] + " " + $_POST['codepostal'];
        if ($_POST['mdp'] == $_POST['mdp2']) {
            inscription($bdd, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'], 1
                , $adresse, 1);
        } else {
            $_SESSION['checkinscription'] = 1;
        }

        echo $_SESSION['checkinscription'];

        header("Location: ../Vue/inscription.php");
    }
    if (isset($_POST['btndecon'])){
        session_start();
        session_unset ();
        session_destroy();
        echo "vous est déconnecter" ;
        header("Location:../Vue/accueil.php");
    }
}



?>