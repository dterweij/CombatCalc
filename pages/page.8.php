<?php
// page 8 - Settings > Buildings

echo '<div class="container-fluid">';
echo '<h1>Settings > Buildings</h1>';
echo '<p>Please fill in and keep updated as you grow.</p>';


// Testing.. build some kind of a structure

//----- this data comes from static gamedata
$hq = "HeadQuarter";
$medbay1 = "MedicalBay 1";
//-------

$building="Building";
$research="Research";

$userdata = new stdClass();

$userdata->$building = new stdClass();
$userdata->$building->$hq = "25";
$userdata->$building->$medbay1 = "21";

$userdata->$research = new stdClass();
$userdata->$research->name = "alloy prod";
$userdata->$research->level = "5";

$datax = secureData("encode", json_encode($userdata));

echo "Encoded object:<br>";
echo json_encode($userdata) . "<br>";
echo "Secured object (This is how it will be stored into the database SECURE!):<br>";
echo $datax . "<br>";

//// lets put in database
$check = $db->query('SELECT * FROM playerdata');
    if (!$check->numRows()) {
$result = $db->query('INSERT INTO playerdata (settings,last_changed) VALUES (\''. $datax . '\',\'NOW()\')');
echo "New data stored in database<br>";
	} else {
$result = $db->query('UPDATE playerdata SET settings="' . $datax. '" ,last_changed=NOW() WHERE id="1"');
echo "Updated data stored in database<br>";
	}

////

// read from database

echo "<br><br>Read data from database<br>";
$playerdata = $db->query('SELECT * FROM playerdata WHERE id="1"')->fetchArray();

$databack = secureData("decode",$playerdata['settings']);
echo "Read object and decode:<br>";
echo $databack . "<br>";

$level = json_decode($databack);
echo "Decoded objects (processed):<br>";
echo $hq . " = " . $level->$building->$hq . "<br>";
echo $medbay1 . " = " . $level->$building->$medbay1 . "<br>";



echo '</div>';
