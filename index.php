<?php
/**
 * Created by PhpStorm.
 * User: alexa
* Date: 12/05/2017
* Time: 11:41
*/
session_start();
require("Vue/Header.php");
include("Vue/footer.html");

if(isset($_GET['cible'])) { // on regarde à quelle page la personne souhaite accéder
    if ($_GET['cible'] == "A propos de nous ?") {
        include("Vue/quisommesnous.html");
    } else if ($_GET['cible'] == "Nos prestations") {
        include("Vue/nosprestations.php");
    } else if ($_GET['cible'] == "Contact") {
        include("Vue/contact.php");
    } else if ($_GET['cible'] == "Aide") {
        include("Vue/aide.html");
    }
}

?>