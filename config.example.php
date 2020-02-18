<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 2/18/20
 * Time: 9:17 PM
 */
 
include 'database/db-class.php';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'example';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);
