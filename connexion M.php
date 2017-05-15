<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 12/05/2017
 * Time: 09:58
 */

    $dbname = "SiteInternet";
    $host='localhost';
    $user='root';
    $pass='';

    $conn = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $conn->query("SET NAMES UTF8");
?>