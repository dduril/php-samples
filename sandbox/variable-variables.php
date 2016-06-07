<?php
include "includes\library.php";
getHeader("PHP Examples| Variable Variables");
?>
	<header>
		<h1>PHP</h1>
		<h2>Variable Variables</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		$a = "hello";
		$hello = "Hello everyone.";
		
		echo $a . "<br />";
		echo $hello . "<br />";
		echo $$a . "<br />";
		
		$a = 'Sheldon';
		$b = 'Howard';
		$c = 'Penny';
		$d = 'Raj';
		$e = 'Leonard';
		
		$students = array('a', 'c', 'e');
		
		foreach($students as $seat)
		{
			echo $$seat . "<br />";
		}
		?>	
	</div>
<?php
getFooter();
?>	

