<?php
require("../Modele/Connexion_T.php");
session_start();

if (!isset($_SESSION['verif'])) {
    $_SESSION['verif'] = 1;
    }
if (!isset($_SESSION['checkmdp'])) {
    $_SESSION['changement']=1;
    $_SESSION['checkmdp'] = 1;
    $_SESSION['checkemail']=1;
    $_SESSION['checkadresse']=1;
}
 $_SESSION['id'];
    $idUtilisateur=$_SESSION['id'];
    $reponse= $bdd->query("SELECT * FROM membre WHERE id='$idUtilisateur' ");
    $ligne=$reponse->fetch();
    $_SESSION['prenom']=$ligne['prenom'];
    $_SESSION['nom']=$ligne['nom'];
    $_SESSION['date']=$ligne['date'];
    $_SESSION['email']=$ligne['email'];
    $_SESSION['mdp']=$ligne['mdp'];
    $_SESSION['adresse']=$ligne['adresse'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="CSS/style.css"
    <title></title>
</head>
<body>
<header>
    <?php
    require ("Header.php");
    ?>
</header>





    <div id="conteneurprofil">
    <div id="formulaire">
        <form method="post" id="formulaireprofilu"action="../Modele/TraitementProfilUtilisateur.php">
            <div id="gaucheprofilu">
                <p><label>Nom</label></br>
                    <?php  echo $_SESSION['nom']?></p>
                <p> <label>Prénom</label>
                    </br><?php  echo $_SESSION['prenom']?></p>
                <p><label>Date de naissance</label>
                    </br><?php  echo $_SESSION['date']?></p>
                <p><label>E-mail</label>
                    </br> <input type="email" name="email" value="<?php  echo $_SESSION['email']?>" required> <?php if($_SESSION['checkemail']==2){ echo 'email déja utilisé'; } ?></p>
                <p><label>Mot de passe</label>
                    </br><input type="password" name="mdp" value="<?php  echo $_SESSION['mdp']?>"  required></p>
                <p><label>Ressaisie du mot de passe</label>
                    </br><input type="password" name="mdp2" value="<?php echo $_SESSION['mdp'];?>" required> <?php  if($_SESSION['checkmdp']==2){ echo 'Les mdp ne sont pas équivalent';} ?></p>
            </div>


            <div id="droiteprofilu">
                <p>Adresse actuelle:
                    </br>
                    <?php  echo $_SESSION['adresse']?></p>
                <p><label>Numéro, rue</label></br><input type="text" name="adresse"   ></p>
                <p><label>Code postal</label></br><input type="text" name="codepostal" > <?php if ($_SESSION['checkadresse']==2){ echo 'Champ manquant pour adresse';}?></p>
                <p><label>Ville</label></br>
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
                <p><label>Pays</label></br>
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
                <br>
                <br>
                <br>
                <br>
                <button id="modif" >Modifier</button>
                <p><?php if ($_SESSION['changement']==2){ echo 'Changements enregistrés';} ?></p>
            </div>



        </form>
    </div>
    </div>


<footer>
    <?php
    require ("footer.html");
    ?>
</footer>
</body>
</html>
