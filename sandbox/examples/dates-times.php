<?php
include "..\includes\library.php";
getHeader("PHP Examples| Dates and Times", "Dates and Times", 2);
?>
    
		<?php 
		// time()
		echo time();
		echo "<br /><br />";
		
		// mktime($hr, $min, $sec, $mo, $day, $yr)
		echo mktime(2, 30, 45, 1, 1, 2015);
		echo "<br /><br />";
		
		echo checkdate(1,31,2015) ? 'true' : 'false';
		echo "<br />";
		echo checkdate(2,31,2015) ? 'true' : 'false';
		echo "<br /><br />";
		
		// strtotime($any_string)
		echo strtotime("now");
		echo "<br /><br />";
		?>	

<?php
getFooter(2);
?>	

