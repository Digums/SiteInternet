<?php
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=test;charset=utf8", 'user', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Capteur</title>
</head>
<body>

    <header>
        <?php require("Header.php"); ?>
    </header>

    <?php
        $user = true;
        $admin = false;

    if ($user && !$admin){ ?>
        <div class="ajout">
            <?php include("modifcapteur.php"); ?>
        </div>
    <?php }
    ?>

    <footer>
        <?php require("footer.html"); ?>
    </footer>

</body>

</html>


