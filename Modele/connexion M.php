
<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 17/05/2017
 * Time: 19:17
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="at'hom";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query("SET NAMES UTF8");

}
catch(PDOException $e)
{
    echo "Connection failed:" . $e ->gerMessage();
}

?>