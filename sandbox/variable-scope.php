<?php
include "includes\library.php";
getHeader("PHP Examples| Variable Scope");
?>
	<header>
		<h1>PHP</h1>
		<h2>Variable Scope</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		$var = 1;
		function test1(){
			$var = 2;
			echo $var . "<br />";
		}
		test1();
		echo $var . "<br />";
		echo "<hr>";
		
		
		$var = 1;
		function test2(){
			global $var;
			$var = 2;
			echo $var . "<br />";
		}
		test2();
		echo $var . "<br />";
		echo "<hr>";
		
		
		$var = 1;
		function test3(){
			static $var = 2;
			echo $var . "<br />";
			$var++;
		}
		test3();
		test3();
		test3();
		echo $var . "<br />";
		?>	
	</div>
<?php
getFooter();
?>	

