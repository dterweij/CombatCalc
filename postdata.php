<?php
//
// Store data into database
//
//
include 'config.php';
include 'functions.php';

if ( isset($_POST["p"]) ) {
	$page = $_POST["p"];
}

if ($page = 8) {
	$building = "Building";
	$userdata = new stdClass();
	$userdata->$building = new stdClass();
	
	for ($x = 1; $x <= getBuildings(); $x++) {

		if ( isset($_POST[$x]) ) {
			$buildingid = $x;
			$buildinglevel = $_POST[$x]; 	
			$userdata->$building->$buildingid = $buildinglevel;
		}

	}

	$dataout = secureData("encode", json_encode($userdata));
	$check = $db->query('SELECT * FROM playerdata');
    	if (!$check->numRows()) {
			$result = $db->query('INSERT INTO playerdata (buildings,last_changed) VALUES (\''. $dataout . '\',\'NOW()\')');
		} else {
			$result = $db->query('UPDATE playerdata SET buildings="' . $dataout. '" ,last_changed=NOW() WHERE id="1"');
		}
}

header('Location: index.php?p=' . $page . '&a=1');
exit;
