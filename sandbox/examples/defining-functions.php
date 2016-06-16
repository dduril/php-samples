<?php
include "..\includes\library.php";
getHeader("PHP Examples| Defining Functions", "Defining Functions", 2);
?>
	
		<?php 
		/* syntax
		function name($arg1, $arg2) {
			statement;
		}
		*/
		
		function greeting() {
			echo "Hello World!<br />";
		}
		
		greeting();
		
		function greeting_to($message) {
			echo "Hello {$message}!<br />";
		}
		
		greeting_to("World");
		?>

<?php
getFooter(2);
?>	