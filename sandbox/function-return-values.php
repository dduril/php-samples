<?php
include "includes\library.php";
getHeader("PHP Examples| Function Return Values");
?>
	<header>
		<h1>PHP</h1>
		<h2>Function Return Values</h2>
	</header>
	
	<div id="wrapper">	
		<?php
		function print_name($first_name, $last_name, $salutation="Hello"){
			return $salutation . " " . $first_name . " " . $last_name . ".<br />";
		}
		
		$first_name = "Lisa";
		$last_name = "Jones";
		
		echo print_name($first_name, $last_name);
		
		echo print_name("John", "Smith", "Hi");
		?>
	</div>
<?php
getFooter();
?>	