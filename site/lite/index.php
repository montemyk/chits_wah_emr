<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"> 

<?php
if(!isset($_SESSION[userid])){
die("<font color='red'>Please login to access the EHR-Lite Synchronization interfaces</font>");
}
	echo "<html>";
		echo "<head><title>WAH EHR-Lite Data Synchronization</title></head>";
		echo '<frameset rows="200px, *" frameborder="0">';
			echo '<frame noresize="noresize" src="header.php" scrolling="no">';
			echo '<frame src="./lite1.php" name="body" scrolling-x="yes">';
		echo '</frameset>';
	echo "</html>";
		
?>