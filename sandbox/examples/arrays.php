<?php
include "..\includes\library.php";
getHeader("PHP Examples| Arrays", "Arrays", 2);
?>
	
		<?php 
		$numbers = array(4, 8, 15, 34, 18,45);
		echo "\$numbers[0]: " . $numbers[0] . "<br />";
		?>
		
		<pre>
		<?php echo print_r($numbers); ?>
		</pre>
		
		<br /><br />
		<?php
		$mixed = array(5, "rabbit", "dog", array("a", "b", "c"), 12);
		echo "\$mixed[0]: " . $mixed[0] . "<br />";
		?>
		
		<pre>
		<?php echo print_r($mixed); ?>
		</pre>

<?php
getFooter(2);
?>	