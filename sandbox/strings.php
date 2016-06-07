<?php
include "includes\library.php";
getHeader("PHP Examples| Strings");
?>
	<header>
		<h1>PHP</h1>
		<h2>Strings</h2>
	</header>
	
	<div id="wrapper">	
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
	</div>
<?php
getFooter();
?>	

