<?php
include "includes\library.php";
getHeader("PHP Examples| File Access");
?>
	<header>
		<h1>PHP</h1>
		<h2>File Access</h2>
	</header>
	
	<div id="wrapper">
		<?php
		$file = 'filetest.txt';
		if($handle = fopen($file, 'w')){
			fclose($handle);
		} else {
			echo "Could not open file for writing.<br />";
		}
		
		?>	
	</div>
	
<?php
getFooter();
?>	