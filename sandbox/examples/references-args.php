<?php
include "..\includes\library.php";
getHeader("PHP Examples| References as Function Arguments", "References as Function Arguments", 2);
?>

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

<?php
getFooter(2);
?>	

