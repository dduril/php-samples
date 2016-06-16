<?php
include "..\includes\library.php";
getHeader("PHP Examples| Control Structures - Continue", "Continue", 2);
?>
	
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

<?php
getFooter(2);
?>	