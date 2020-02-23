<?php
// page 8 - Settings > Buildings

if ( isset($_GET["a"]) ) {
	showDialog('Data is updated');
}

echo '<div class="container-fluid">';
echo '<h1>Settings > Buildings</h1>';
echo '<p>Please fill in and keep updated as you grow.</p>';

echo '<hr>';
echo '<form action="postdata.php" method="post">';

echo '<div class="form-row" style="background: #ccc; border-bottom: solid 2px #000;">';
echo '<div class="col p-2">';
echo 'Building name';
echo '</div>';
echo '<div class="col p-2">';
echo 'Your Level';
echo '</div>';
echo '<div class="col p-2">';
echo 'Max Level';
echo '</div>';
echo '</div>';

$building = "Building";
$playerdata = $db->query('SELECT * FROM playerdata WHERE id="1"')->fetchArray();
$databack = secureData("decode",$playerdata['buildings']);
$buildingdata = json_decode($databack);

for ($buildingid = 1; $buildingid <= getBuildings(); $buildingid++) {
	$result = $db->query('SELECT * FROM buildingdata WHERE id="'. $buildingid. '"')->fetchArray();
	$name = $result['name'];
	$maxlevel = $result['level'];
	$level = $buildingdata->$building->$buildingid;

	echo '<div class="form-row" style="border-bottom: solid 1px #ccc; ">';
	echo '<div class="col p-1">';
	echo $name;
	echo '</div>';
	echo '<div class="col p-1">';
	echo '<input type="text" class="form-control" value="'. $level .'" placeholder="Fill in your level" name="' . $buildingid . '" autocomplete="off" maxlength="2">';
	echo '</div>';
	echo '<div class="col p-1">';
	echo $maxlevel;
	echo '</div>';
	echo '</div>';

}

echo '<div class="container-fluid p-2">';
echo '<input type="hidden" class="form-control" value="' . $page . '" name="p">';
echo '<button type="submit" class="btn btn-primary mb-2">Update</button>';
echo '</div>';

echo '</form>';

echo '</div>';
