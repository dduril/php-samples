<?php
$name = "John";
$value = 45;
$expire = time() + (60*60*24*7*3);  // 3 weeks
//setcookie($name, $value, $expire);
		
include "..\includes\library.php";
getHeader("PHP Examples| Cookies", "Cookies", 2);
?>
	
	<pre>
	<?php
	if (isset($_COOKIE["John"])) {
		$n = $_COOKIE["John"];
	} else {
		$test = "";
	}
	echo $n . "<br />";
	?>
	</pre>

<?php
getFooter(2);
?>	