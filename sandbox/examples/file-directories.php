<?php
include "..\includes\library.php";
getHeader("PHP Examples| File Directories", "File Directories", 2);
?>

		<?php
		$dir = "sandbox";
		if(is_dir($dir)) {
			if($dir_handle = opendir($dir)) {
				while($filename = readdir($dir_handle)) {
					echo "filename: {$filename}<br />";
				}
				closedir($dir_handle);
			}
		}
		?>	
	
<?php
getFooter(2);
?>	