<?php
include "includes\library.php";
getHeader("PHP Examples| Defining Functions");
?>
	<header>
		<h1>PHP</h1>
		<h2>Defining Functions</h2>
	</header>
	
	<div id="wrapper">	
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
	</div>
<?php
getFooter();
?>	