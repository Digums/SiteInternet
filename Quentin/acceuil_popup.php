
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>At'Hom</title>
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../Autre/images/floticon.ico" >
    <link rel="stylesheet" type="text/css" href="styles/accueil_popup.css">
    <!--<link rel="stylesheet" type="text/css" href="styles/sauve.css">-->

</head>
<body>

<div id="menutop">
    <ul>
        <li><a                     title="A propos de nous ?"  href="">A propos de nous ?</a></li>
        <li><a                     title="Nos prestations"     href="">Nos prestation</a></li>
        <li><a                     title="Contact"             href="">Contact</a></li>
        <li><a                     title="Aide"                href="">Aide</a></li>
        <!--<li><a   class="active"    title="Login"               href="">Login</a></li>-->
        <li><button onclick="document.getElementById('id01').style.display='block'" style="width:100%;">Login</button></li>

    </ul>
</div>

<div id="id01" class="modal">

    <form method="post" class="modal-content animate" action="../Modele/TraitementConnexion.php">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="mdp" required>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
</ul>


</body>
</html>
