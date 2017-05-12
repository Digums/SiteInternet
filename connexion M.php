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

    $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $db->query("SET NAMES UTF8");
?>