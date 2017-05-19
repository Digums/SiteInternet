<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Autre/images/floticon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../Autre/images/floticon.ico" >
    <link rel='stylesheet' href="CSS/Header.css">
    <title>Header</title>
</head>


<body>
<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 15/05/2017
 * Time: 11:19
 */ ?>

<header>
    <div id="menutop">
        <ul>
            <li><a                     title="Accueil"             href="../Quentin/accueil.html">Domisep</a></li>
            <li><a                     title="A propos de nous ?"  href="quisommesnous.html">A propos de nous ?</a></li>
            <li><a                     title="Nos prestations"     href="nosprestations.php">Nos prestations</a></li>
            <li><a                     title="Contact"             href="contact.php">Contact</a></li>
            <li><a                     title="Aide"                href="aide.html">Aide</a></li>
            <!--<li><a   class="active"    title="Login"               href="">Login</a></li>-->
            <li><button onclick="document.getElementById('id01').style.display='block'" style="width:100%;">Login</button></li>

        </ul>
    </div>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

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
</header>


</body>