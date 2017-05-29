<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="CSS/style.css">
    <title>Accueil</title>
</head>
<body>

<header>
<?php
require ("Header.php");
?>
</header>

<div id="cadre">
    <div id="connexion">
        <form action="">
            <label for="fname">Username</label>
            <input type="text" id="fname" name=username" placeholder="Your username..">
            <br>
            <label for="lname">Password</label>
            <input type="password" id="lname" name="password" placeholder="Your password..">
            <br>
            <input type="submit" value="Submit">
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