<?php
include "..\includes\library.php";
getHeader("PHP Examples| Strings", "Strings", 2);
?>

		<?php 
		$str1 = "Hello world!";
		echo "\$str1: " . $str1 . "<br />";
		?>	
		
		<?php
		$greeting = "Hello";
		$target = "World";
		$phrase = $greeting . " " . $target;
		echo $phrase . "<br />";
		
		echo "{$phrase} Again<br />";
		?>

<?php
getFooter(2);
?>	

