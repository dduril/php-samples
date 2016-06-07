<?php
include "includes\library.php";
getHeader("PHP Examples| Control Structures - Continue");
?>
	<header>
		<h1>PHP</h1>
		<h2>Control Structures - Continue</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		for ($count = 1; $count <= 10; $count++) {
			if ($count == 5) {
				echo "continue<br />";
				continue;
			}
			echo $count . "<br />";
		}
		?>
		<br />
		<?php
		$count = 0;
		while ($count <= 10) {
			if ($count == 5) {
				$count++;
				echo "continue<br />";
				continue;
			}
		echo $count . "<br />";
		$count++;
		}
		?>
	</div>
<?php
getFooter();
?>	