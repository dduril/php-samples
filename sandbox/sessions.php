<?php
session_start();
include "includes\library.php";
getHeader("PHP Examples| Sessions");
?>
	<header>
		<h1>PHP</h1>
		<h2>Sessions</h2>
	</header>
	
	<div id="wrapper">	
		<pre>
		<?php
		$_SESSION["first_name"] = "John";
		$name = $_SESSION["first_name"];
		echo $name;
		?>
		</pre>
	</div>
<?php
getFooter();
?>	