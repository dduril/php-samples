<?php
include "includes\library.php";
getHeader("PHP Examples| Array Functions");
?>
	<header>
		<h1>PHP</h1>
		<h2>Array Functions</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		$numbers = array(2, 16, 23, 8, 34, 48, 54);
		print_r($numbers);
		echo "<br /><br />";
		
		?>
		Count:			<?php echo count($numbers); ?><br />
		Max value:		<?php echo max($numbers); ?><br />
		Min value:		<?php echo min($numbers); ?><br />
		<br />
		Sort:			<?php sort($numbers); print_r($numbers); ?><br />
		Reverse sort:	<?php rsort($numbers); print_r($numbers); ?><br />
		<br />
		
		Implode:	<?php echo $num_string = implode(" * ", $numbers); ?><br />
		Explode:	<?php print_r(explode($num_string, " * ")); ?><br />
		<br />
		
		23 in array?:	<?php echo in_array(23, $numbers); ?><br />
		24 in array?:	<?php echo in_array(24, $numbers); ?><br />
		<br />
		
		<?php
		$a = array_shift($numbers);
		echo "a:" . $a . "<br />";
		print_r($numbers);
		echo "<br /><br />";
		
		$b = array_unshift($numbers, 'first');
		echo "b:" . $b . "<br />";
		print_r($numbers);
		echo "<br /><br />";
		
		echo "<hr />";
		
		$a = array_pop($numbers);
		echo "a:" . $a . "<br />";
		print_r($numbers);
		echo "<br /><br />";
		
		$b = array_push($numbers, 'last');
		echo "b:" . $b . "<br />";
		print_r($numbers);
		echo "<br /><br />";
		
		?>	
	</div>
<?php
getFooter();
?>	