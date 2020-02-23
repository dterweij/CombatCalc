<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 2/18/20
 * Time: 9:08 PM
 */
include 'functions.php';

 if (isset($_GET["p"])) {
		$page = $_GET["p"]; 
 	} else {
	 	$page = 1;
 }
 
?>
<!DOCTYPE html>
<html>
<head>
<title>CombatCalc</title>
<meta charset="utf-8" />
<meta lang="en" />
<meta name="google" content="notranslate" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- Our own CSS -->
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
</head>
<body>
<!-- Wrapper -->
<div id="container" class="container-fluid"> 
  <!-- Header -->
  <div id="header" class="container-fluid">
    <?php include("header.php"); ?>
  </div>
  <!-- Main -->
  <div id="body" class="container-fluid"> 
    <!-- Page -->
    <div id="page" class="container-fluid p-2 my-2 border">
      <?php include("page.php"); ?>
    </div>
  </div>
  <!-- Footer -->
  <div id="footer" class="container-fluid">
    <?php include("footer.php"); ?>
  </div>
</div>
</body>
</html>
