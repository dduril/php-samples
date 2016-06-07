<?php
include "includes\library.php";
getHeader("PHP Examples| Constants");
?>
	<header>
		<h1>PHP</h1>
		<h2>Constants</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		// variable
		$max_width = 980;
		
		// constant
		define("MAX_WIDTH", 980);
		echo "MAX_WIDTH: " . MAX_WIDTH;
		?>
	</div>
<?php
getFooter();
?>	