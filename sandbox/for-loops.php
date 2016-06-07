<?php
include "includes\library.php";
getHeader("PHP Examples| Control Structures - For Loops");
?>
	<header>
		<h1>PHP</h1>
		<h2>Control Structures - For Loops</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		for ($count = 1; $count <= 10; $count++) {
			echo $count . "<br />";
		}
		?>
	</div>
<?php
getFooter();
?>	