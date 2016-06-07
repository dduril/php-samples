<?php
include "includes\library.php";
getHeader("PHP Examples| References");
?>
	<header>
		<h1>PHP</h1>
		<h2>References</h2>
	</header>
	
	<div id="wrapper">	
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
	</div>
<?php
getFooter();
?>	

