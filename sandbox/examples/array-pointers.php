<?php
include "..\includes\library.php";
getHeader("PHP Examples| Control Structures - Array Pointers", "Array Pointers", 2);
?>

		<?php 
		$ages = array(21,24,19,33,29,25,18);
		?>
		
		<pre>
		<?php echo print_r($ages); ?>
		</pre>
		<br />
		
		<?php
		echo "1: " . current($ages) . "<br />";
		next($ages);
		echo "2: " . current($ages) . "<br />";
		next($ages);
		echo "3: " . current($ages) . "<br />";
		prev($ages);
		echo "4: " . current($ages) . "<br />";
		reset($ages);
		echo "5: " . current($ages) . "<br />";
		end($ages);
		echo "6: " . current($ages) . "<br />";
		next($ages);
		echo "7: " . current($ages) . "<br />";
		?>
		<br />
		<?php
		reset($ages);
		while($age = current($ages)) {
			echo $age . "<br />";
			next($ages);
		}
		?>

<?php
getFooter(2);
?>	