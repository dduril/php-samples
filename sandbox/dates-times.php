<?php
include "includes\library.php";
getHeader("PHP Examples| Dates and Times");
?>
	<header>
		<h1>PHP</h1>
		<h2>Dates and Times: Unix</h2>
	</header>
	
	<div id="wrapper">	
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
	</div>
<?php
getFooter();
?>	

