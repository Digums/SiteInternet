<div class="test">
    <div class="newcapteur">
        <fieldset id="formulaire">
            <legend>Ajouter un capteur</legend>
            <form method="post" action="../Controleur/capteur-controleur.php">
                <p><label>Nom du capteur: </label><input type="text" name="name" required></p>

                <p><label>Type de capteur: </label><select name="typecapteur" id="type_capteur" required>
                        <option value="">--Faites votre choix--</option>
                        <option value="temperature">Temperature</option>
                        <option value="humidite">Humidité</option>
                        <option value="camera">Caméra</option>
                        <option value="fumee">Détection de fumée</option>
                        <option value="Position de porte">Position de porte</option></select></p>
                <p><label>Etat du capteur: </label>
                    <input type="radio" name="etat" value="On">Allumé
                    <input type="radio" name="etat" value="Off">Eteint</p>
                <p><label>Nom de la pièce: </label>
                    <select name="piece" id="piece">
                        <option value="">--Faites votre choix--</option>
                        <?php
                        $idmaison=$_SESSION['idmaison'];
                        $piece = $bdd->query("SELECT nom_piece FROM piece WHERE id_maison =$idmaison");
                        while ($info = $piece->fetch()){ ?>
                            <option value="<?php echo $info['nom_piece']?>"><?php echo $info['nom_piece'] ?></option>
                        <?php } ?>

                    </select>
                </p>
                <input type="submit" id="sent" value="Ajouter" name="btnAddCapteur">
            </form>
        </fieldset>
    </div>

    <div class="delcapteur">
        <p><span class="sousligne">Tous vos capteurs</span></p>
        <div class="listecapteur">
            <?php
            $idmaison=$_SESSION['idmaison'];
            $capteurs = $bdd->query("SELECT * FROM capteur WHERE id_maison=$idmaison");
            while($donnees = $capteurs->fetch()){ ?>
                <p>Il y a un capteur <?php echo $donnees['type_capteur'] ?> dans <?php echo $donnees['nom_piece']?>  <button onclick="document.getElementById('id03').style.display='block'">Supprimer</button>
                </p>


                <div id="id03" class="modal">
                    <div class="modal-content animate">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container">
                            <p> Voulez-vous vraiment supprimer ce capteur ?</p>
                            <a href="../a%20jeter/delete_bdd.php?id=<?php echo $donnees['id'];  ?>" class="delete_form">
                                <button class="btnDelCapteur"> Supprimer</button>
                            </a><br><br>
                        </div>
                    </div>

                </div>
            <?php }
            ?>

        </div><br />
    </div>
</div>