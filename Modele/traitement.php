
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
echo $_POST['nom'];
if (isset($_POST['nom'])){
    $nom = $_POST['nom'];}
else{
    $nom='razer';
}
if (isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];}
else{
    $prenom = 'azerazr';
}

$_POST['mail'] = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
if (isset($_POST['mail']) && !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false){
    $mail = $_POST['mail'];}
else{
    $pseudo = 'zer';
}
if (isset($_POST['commentaire'])) {
    $commentaire = $_POST['commentaire'];}
else{
    $commentaire = 'ezara';
}

try{
    echo $nom, $prenom, $mail, $commentaire;
$req = $bdd->prepare('INSERT INTO commentaire(nom, prenom, mail, commentaire) VALUES(:nom, :prenom, :mail, :commentaire)');
$req->bindParam(':nom',$nom);
$req->bindParam(':prenom',$prenom);
$req->bindParam(':mail',$mail);
$req->bindParam(':commentaire',$commentaire);
$req->execute();
}catch(Exception $e){
    echo "<br>-------------------<br> ERREUR ! <br>";
    print_r($params);
    die('<br>Requete Erreur !: '.$e->getMessage());

}

?>