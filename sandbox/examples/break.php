<?php
include "..\includes\library.php";
getHeader("PHP Examples| Control Structures - Break", "Break", 2);
?>

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

<?php
getFooter(2);
?>	