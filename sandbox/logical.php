<?php
include "includes\library.php";
getHeader("PHP Examples| Control Structures - If Statements");
?>
	<header>
		<h1>PHP</h1>
		<h2>Control Structures - If Statements</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		$a = 4;
		$b = 3;
		
		if ($a > $b) {
			echo "a is larger than b";
		} elseif($a < $b) {
			echo "a is small than b";
		} else {
			echo "a is equal to b";
		}
		?>
		<br /><br />
		
		<?php
		$new_user = true;
		if($new_user){
			echo "<strong>Welcome!</strong><br />";
			echo "We are glad you decided to join us.";
		}
		else {
			echo "<strong>Welcome Back!</strong><br />";
			echo "We are happy to see you again.";
		}
		?>
		<br />
		
		<?php
		$e = 100;
		if (!isset($e)) {
			$e = 200;
		}
		echo $e;
		?>
		<br />
		<?php
		// don't reject 0 or 0.0
		if (empty($qty) && !is_numeric($qty)) {
			echo "You must enter a quantity.";
		}
		?>
	</div>
<?php
getFooter();
?>	