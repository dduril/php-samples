<?php
$name = "John";
$value = 45;
$expire = time() + (60*60*24*7*3);  // 3 weeks
//setcookie($name, $value, $expire);
		
include "includes\library.php";
getHeader("PHP Examples| Cookies");
?>
	<header>
		<h1>PHP</h1>
		<h2>Cookies</h2>
	</header>
	
	<div id="wrapper">	
	
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
	</div>
<?php
getFooter();
?>	