<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

// Sous WAMP (Windows)
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];
    $statut = 1;
    $ville = $_POST['ville'];
    $codepostal = $_POST['codepostal'];
    $pays = $_POST['pays'];
    $adresse = "$ville" + " " + "$pays" + "$codepostal";
    $nbrapp=1;





try {
    echo $nbrapp, $mdp,$adresse;
$req= $bdd->prepare("INSERT INTO membre(nom,prenom,date,email,mdp,statut,adresse,nbrapp,nomloca) 
VALUES (:nom,:prenom,:date,:email,:mdp,:statut,:adresse,:nbrapp,:nom)" );
    $req->bindParam(":nom",$nom);
    $req->bindParam(":prenom",$prenom);
    $req->bindParam(":date",$date);
    $req->bindParam(":email",$email);
    $req->bindParam(":mdp",$mdp);
    $req->bindParam(":statut",$statut);
    $req->bindParam(":adresse",$adresse);
    $req->bindParam(":nbrapp",$nbrapp);



$req->execute();


  /*  $sql = "INSERT INTO membre(nom,prenom,date,email,mdp,statut,adresse)
VALUES ('$nom','$prenom','$date','$email','$mdp','$statut','$adresse')";

    $bdd->exec($sql);*/
}
catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();

}
?>
