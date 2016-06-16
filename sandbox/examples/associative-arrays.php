<?php
include "..\includes\library.php";
getHeader("PHP Examples| Associative Arrays", "Associative Arrays", 2);
?>

		<?php $employees = array("first_name" => "John", "last_name" => "Smith"); ?>
		<?php echo $employees["first_name"]; ?><br />
		<?php echo $employees["last_name"]; ?><br />
		<pre>
		<?php echo print_r($employees); ?>
		</pre>

<?php
getFooter(2);
?>	