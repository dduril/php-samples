<?php
include "includes\library.php";
getHeader("PHP Examples| References as Function Arguments");
?>
	<header>
		<h1>PHP</h1>
		<h2>References as Function Arguments</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		function ref_test($var){
			$var = $var * 2;
		}
		
		function ref_test2(&$var){
			$var = $var * 2;
		}
		
		$a = 10;
		ref_test($a);
		echo $a . "<br />";
		ref_test2($a);
		echo $a . "<br />";
		?>	
	</div>
<?php
getFooter();
?>	

