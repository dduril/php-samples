<?php
include "includes\library.php";
getHeader("PHP Examples| Control Structures - While Loops");
?>
	<header>
		<h1>PHP</h1>
		<h2>Control Structures - While Loops</h2>
	</header>
	
	<div id="wrapper">	
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
	</div>
<?php
getFooter();
?>	