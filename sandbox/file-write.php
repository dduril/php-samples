<?php
include "includes\library.php";
getHeader("PHP Examples| File Write");
?>
	<header>
		<h1>PHP</h1>
		<h2>File Write</h2>
	</header>
	
	<div id="wrapper">
		<?php
		$file = 'filetest.txt';
		if($handle = fopen($file, 'w')){ // overwrite
		
			$content = "Hello\nWorld";
			fwrite($handle, $content);
			
			fclose($handle);
		} else {
			echo "Could not open file for writing.<br />";
		}
		
		?>	
	</div>
	
<?php
getFooter();
?>	