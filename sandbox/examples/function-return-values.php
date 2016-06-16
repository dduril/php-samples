<?php
include "..\includes\library.php";
getHeader("PHP Examples| Function Return Values", "Function Return Values", 2);
?>

		<?php
		function print_name($first_name, $last_name, $salutation="Hello"){
			return $salutation . " " . $first_name . " " . $last_name . ".<br />";
		}
		
		$first_name = "Lisa";
		$last_name = "Jones";
		
		echo print_name($first_name, $last_name);
		
		echo print_name("John", "Smith", "Hi");
		?>

<?php
getFooter(2);
?>	