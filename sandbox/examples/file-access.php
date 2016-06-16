<?php
include "..\includes\library.php";
getHeader("PHP Examples| File Access", "File Access", 2);
?>

		<?php
		$file = 'filetest.txt';
		if($handle = fopen($file, 'w')){
			fclose($handle);
		} else {
			echo "Could not open file for writing.<br />";
		}
		
		?>	
	
<?php
getFooter(2);
?>	