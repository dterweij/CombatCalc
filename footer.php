<?php
// footer
if (isGit()) {
	$devel = "-dev" ;	
} else {
	$devel = "" ;	
}

?>
<div class="text-right text-justify">
<h6>Version <?php echo pVersion() . $devel; ?> By Terminers (GUI) & INDeeD0 (Math)</h6>
</div>
