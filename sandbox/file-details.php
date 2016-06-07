<?php
include "includes\library.php";
getHeader("PHP Examples| File Details");
?>
	<header>
		<h1>PHP</h1>
		<h2>File Details</h2>
	</header>
	
	<div id="wrapper">
		<?php
		$filename = 'filetest.txt';
		
		echo $filename . "<br />";  
		echo filesize($filename) . "<br />";  // in bytes
		
		echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br />";
		echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br />";
		echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br />";
		
		touch($filename);
		
		echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br />";
		echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br />";
		echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br />";
		
		
		$path_parts = pathinfo(__FILE__);
		echo $path_parts['dirname'] . "<br />";
		echo $path_parts['basename'] . "<br />";
		echo $path_parts['filename'] . "<br />";
		echo $path_parts['extension'] . "<br />";
		?>	
	</div>
	
<?php
getFooter();
?>	