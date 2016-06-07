<?php
include "includes\library.php";
getHeader("PHP Examples| Arrays");
?>
	<header>
		<h1>PHP</h1>
		<h2>Arrays</h2>
	</header>
	
	<div id="wrapper">	
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
	</div>
<?php
getFooter();
?>	