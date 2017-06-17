
<?php

// Connexion au serveur mysql
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=athom;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

//$destinataire = $_POST['mail'];
//echo $destinataire;
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = 'matthieu.taieb@orange.fr';
$objet = "Réponse à votre demande At'Hom";
/*$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse*/
$headers = 'From: "Matthieu Taieb"<'.$expediteur.'>'."\n"; // Expediteur
//$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire 
$message = '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour ! \n</div>';
mail('matthieu.taieb@orange.fr', $objet, $message, $headers); // Envoi du message

?>

