<?php
include "includes\library.php";
getHeader("PHP Examples| Variables");
?>
	<header>
		<h1>PHP</h1>
		<h2>Variables</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		$var1 = 10;
		echo "\$var1: " . $var1 . "<br />";
		
		$var1 = 100;
		echo "\$var1: " . $var1 . "<br />";
		?>	
	</div>
<?php
getFooter();
?>	

