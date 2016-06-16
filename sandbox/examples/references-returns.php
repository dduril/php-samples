<?php
include "..\includes\library.php";
getHeader("PHP Examples| References as Function Return Values", "References as Function Return Values", 2);
?>

		<?php 
		function &ref_return(){
			global $a;
			$a = $a * 2;
			return $a;
		}
		
		$a = 10;
		$b =& ref_return();
		echo "a: " . $a . "<br />";
		echo "b: " . $b . "<br /><br />";
		
		$b = 30;
		echo "a: " . $a . "<br />";
		echo "b: " . $b . "<br /><br />";
		
		
		function&increment(){
			static $var = 0;
			$var++;
			return $var;
		}
		
		$a =& increment();		// var increments
		increment();			// var increments
		$a++;					// var increments
		increment();			// var increments
		echo "a: {$a}<br />";	// 4 ($a incremented with $var)
		?>	

<?php
getFooter(2);
?>	

