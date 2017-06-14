<?php
require ("../Modele/Connexion T.php");
$idMembre=3;

$req= $bdd->query("SELECT maison.adresse,piece.nom_piece,capteur.nom_capteur,donnees.valeur2 FROM membre JOIN maison ON membre.id=maison.id_membre JOIN piece ON maison.id=piece.id_maison JOIN capteur ON piece.id=capteur.id_piece JOIN donnees ON capteur.id=donnees.id_capteur WHERE membre.id=3 ");
$reponse=$req->fetch();
echo $reponse['adresse'];

echo $reponse['nom_piece'];
echo $reponse['nom_capteur'];

echo $reponse['valeur2'];

?>