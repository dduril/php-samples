<?php
include "includes\library.php";
getHeader("PHP Examples| Control Structures - Break");
?>
	<header>
		<h1>PHP</h1>
		<h2>Control Structures - Break</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		for ($count = 1; $count <= 10; $count++) {
			if ($count == 5) {
				echo "break<br />";
				break;
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
				echo "break<br />";
				break;
			}
		echo $count . "<br />";
		$count++;
		}
		?>
	</div>
<?php
getFooter();
?>	