<?php
include "..\includes\library.php";
getHeader("PHP Examples| Variable Variables", "Variable Variables", 2);
?>

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

<?php
getFooter(2);
?>	

