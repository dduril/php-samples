<?php
include "..\includes\library.php";
getHeader("PHP Examples| Function Arguments", "Function Arguments", 2);
?>

		<?php 	
		function greeting_to($word) {
			echo "Hello {$word}!<br />";
		}
		greeting_to("World");
		?>
		<br />
		
		<?php
		$name = "John Smith";
		greeting_to($name);
		?>
		<br />
		
		<?php
		function print_name($first_name, $last_name){
			echo "Hello {$first_name} {$last_name}.<br />";
		}
		
		$first_name = "Lisa";
		$last_name = "Jones";
		print_name($first_name, $last_name);
		?>

<?php
getFooter(2);
?>	