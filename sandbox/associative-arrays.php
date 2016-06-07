<?php
include "includes\library.php";
getHeader("PHP Examples| Associative Arrays");
?>
	<header>
		<h1>PHP</h1>
		<h2>Associative Arrays</h2>
	</header>
	
	<div id="wrapper">	
		<?php $employees = array("first_name" => "John", "last_name" => "Smith"); ?>
		<?php echo $employees["first_name"]; ?><br />
		<?php echo $employees["last_name"]; ?><br />
		<pre>
		<?php echo print_r($employees); ?>
		</pre>
	</div>
<?php
getFooter();
?>	