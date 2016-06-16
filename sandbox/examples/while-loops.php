<?php
include "..\includes\library.php";
getHeader("PHP Examples| Control Structures - While Loops", "While Loops", 2);
?>
	
		<?php 
		$count = 0;
		while ($count <= 10) {
			if ($count == 5) {
				echo "FIVE, ";
			} else {
				echo $count . ", ";
			}
			$count++;
		}
		?>
		<br />
		Count: <?php echo $count; ?>
		<br /><br />
		
		<?php 
		$count = 0;
		while ($count <= 10) {
			if ($count % 2 == 0) {
				echo $count . " is even.<br />";
			} else {
				echo $count . " is odd.<br />";
			}
			$count++;
		}
		?>

<?php
getFooter(2);
?>	