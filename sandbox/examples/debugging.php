<?php
include "..\includes\library.php";
getHeader("PHP Examples| Debugging", "Debugging", 2);
?>

		<?php 	
		$number = 99;
		$string = "hello";
		$array = array(1 => "Homepage", 2 => "Contact Us", 3 => "Products");
		?>
		<pre>
<?php var_dump($number); ?>
<?php var_dump($string); ?>
<?php var_dump($array); ?>
		</pre>
		<br />

		<strong>get_defined_vars()</strong><br />
		<pre>
		<?php
		print_r(get_defined_vars());
		?>
		</pre>
		<br />

		<strong>debug_backtrace()</strong><br />
		<?php
		var_dump(debug_backtrace());
		?>
		<br />

<?php
getFooter(2);
?>	