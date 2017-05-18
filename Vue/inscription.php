<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="CSS/style.css">
    <title>Title</title>
</head>

<body>
<form>
    <div id="formulaire">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="gauche">
                <p><label>Nom*</label></br><input type="text" name="name" placeholder="" required></p>
                <p> <label>Prénom*</label></br><input type="text" name="name" placeholder="" required></p>
                <p><label>Date de naissance*</label></br><input type="date" name="name" placeholder="jj/mm/aa" required></p>
                <p><label>E-mail*</label></br><input type="email" name="name" placeholder="" required></p>
                <p><label>Mot de passe*</label></br><input type="password" name="name" placeholder="" required></p>
                <p><label>Ressaisie du mot de passe*</label></br><input type="password" name="name" placeholder="" required></p>
            </div>
            <div id="droite">
                <p><label>Adresse*</label></br><input type="text" name="name" placeholder="" required></p>
                <p><label>Code postal*</label></br><input type="text" name="name" placeholder="" required></p>
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
                <p><label>Téléphone</label></br><input type="tel" name="name" placeholder=""></p>
                <a href="aide.html"><input type="submit" value="Envoyer" /></a>
            </div>
    </div>
</form>
    </fieldset>
</form>

</body>
</html>
