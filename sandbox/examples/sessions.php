<?php
session_start();
include "..\includes\library.php";
getHeader("PHP Examples| Sessions", "Sessions", 2);
?>

		<pre>
		<?php
		$_SESSION["first_name"] = "John";
		$name = $_SESSION["first_name"];
		echo $name;
		?>
		</pre>

<?php
getFooter(2);
?>	