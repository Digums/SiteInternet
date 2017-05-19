<?php $bdd = new PDO("mysql:host=localhost;dbname=app","root","");
$bdd -> query("SET NAME UTF8");



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="Quentin/styles/index_main.css">
    <link rel='stylesheet' href="CSS/inscription.css">
    <title>Inscription</title>
</head>
<body>
<?php

// Sous WAMP (Windows)


    $reponse = $bdd->query('SELECT * FROM membre');
    while ($donnees=$reponse->fetch()){
        echo $donnees['nom'];
  }
if($_SERVER["REQUEST_METHOD"] == "POST") {
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
}
    ?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <div id="formulaire">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <div id="gauche">
                <p><label>Nom*</label></br>
                    <input type="text" name="nom" placeholder="" required></p>

                <p> <label>Prénom*</label>
                    </br><input type="text" name="prenom" placeholder="" required></p>
                <p><label>Date de naissance*</label>
                    </br><input type="date" name="date" placeholder="jj/mm/aa" required></p>
                <p><label>E-mail*</label>
                    </br><input type="email" name="email" placeholder="" required></p>
                <p><label>Mot de passe*</label>
                    </br><input type="password" name="mdp" placeholder="" required></p>
                <p><label>Ressaisie du mot de passe*</label>
                    </br><input type="password" name="mdp2" placeholder="" required></p>
            </div>
            <div id="droite">
                <p><label>Adresse*</label></br><input type="text" name="adresse" placeholder="" required></p>
                <p><label>Code postal*</label></br><input type="text" name="codepostal" placeholder="" required></p>
                <p><label>Ville*</label></br>
                    <select name="ville" id="ville" required>
                        <option value="Paris">Paris</option>
                        <option value="Madrid">Madrid</option>
                        <option value="Rome">Rome</option>
                        <option value="Londres">Londres</option>
                        <option value="Ottawa">Ottawa</option>
                        <option value="Washington">Washington</option>
                        <option value="Pekin">Pekin</option>
                        <option value="Tokyo">Tokyo</option>
                    </select>
                </p>
                <p><label>Pays*</label></br>
                    <select name="pays" id="pays" required>
                        <option value="france">France</option>
                        <option value="espagne">Espagne</option>
                        <option value="italie">Italie</option>
                        <option value="royaume-uni">Royaume-Uni</option>
                        <option value="canada">Canada</option>
                        <option value="etats-unis">États-Unis</option>
                        <option value="chine">Chine</option>
                        <option value="japon">Japon</option>
                    </select>
                </p>
                <p><label>Téléphone</label></br><input type="tel" name="tel" placeholder=""></p>

                <a href="aide.html"><input type="submit" value="Envoyer" /></a>
            </div>
    </div>
    </fieldset>
</form>
    <?php
    try {

        echo $nom ;
        echo $prenom;
        echo $date;
        echo $email ;
        echo $mdp;
        echo $statut;
        echo $adresse;
    $sql = "INSERT INTO membre(nom,prenom,date,email,mdp,statut,adresse) 
VALUES ('$nom','$prenom','$date','$email','$mdp','$statut','$adresse')";

    $bdd->exec($sql);
}
catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();

}
?>
</body>
</html>
