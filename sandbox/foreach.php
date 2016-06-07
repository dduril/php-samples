<?php
include "includes\library.php";
getHeader("PHP Examples| Control Structures - Foreach Loops");
?>
	<header>
		<h1>PHP</h1>
		<h2>Control Structures - Foreach Loops</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		$numbers = array(22, 25, 19, 23, 31, 42, 35);
		foreach ($numbers as $value) {
			echo "Age: " . $value . "<br />";
		}
		?>
		<br />
		<?php
		$employee = array(
				"first_name" => "John",
				"last_name" => "Smith",
				"department" => "Technology",
				"job_title" => "Database Administrator",
				"hire_date" => "10/15/2012"	
			);
		foreach ($employee as $attribute => $data) {
			$attr_nice = ucwords(str_replace("_", " ", $attribute));
			echo "{$attr_nice}: {$data}<br />";
		}
		?>
	</div>
<?php
getFooter();
?>	