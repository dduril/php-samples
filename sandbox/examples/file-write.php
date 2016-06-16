<?php
include "..\includes\library.php";
getHeader("PHP Examples| File Write", "File Write", 2);
?>

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

<?php
getFooter(2);
?>	