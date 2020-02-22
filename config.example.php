<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 2/18/20
 * Time: 9:17 PM
 */

// Copy this file to config.php and enter your settings

// Load database class 
include 'database/db-class.php';

// ------------- edit below this line

// Settings the user has to fill in
$dbhost = 'localhost'; // enter hostname where database is running (defaults to localhost)
$dbuser = 'user'; // username database account
$dbpass = 'pass'; // password database account
$dbname = 'CombatCalc'; // database to use (defaults to CombatCalc)

// To show the page where the static gamedata can be editted
// for example a new type of NPC or research item or new levels and so on
$editdata = 1; // 1 = yes , 0 = no

// Make userdata unreadable when stored in database
// use something difficult and long
$secret = "jjHHyyH6655GgggHH6^7766HGHD33&";

// ------------- do not edit below this line

// init database
$db = new db($dbhost, $dbuser, $dbpass, $dbname);
