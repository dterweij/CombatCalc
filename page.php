<?php
//
// Load the selected page from navigation
//
include 'config.php';
include 'navigation/menu.php';
$pageload = 'pages/page.'. $page. '.php';

if (file_exists($pageload)) {
		include $pageload;
	} else {
		echo '<div class="alert alert-danger alert-dismissible p-2 my-2">';
		echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  		echo '<strong>404</strong> Page not found'; 
		echo '</div>';
}
?>
