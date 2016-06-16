<?php
include "..\includes\library.php";
getHeader("PHP Examples| References", "References", 2);
?>

		<?php 
		$a = 1;
		$b = $a;
		$b = 2;	
		echo "a:{$a} / b:{$b}<br />";
		// returns 1/2
		
		$a = 1;
		$b =& $a;	// reference assignment
		$b = 2;	
		echo "a:{$a} / b:{$b}<br />";
		// returns 2/2
		
		unset($b);
		echo "a:{$a} / b:{$b}<br />";
		?>	

<?php
getFooter(2);
?>	

