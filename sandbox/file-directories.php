<?php
include "includes\library.php";
getHeader("PHP Examples| File Directories");
?>
	<header>
		<h1>PHP</h1>
		<h2>File Directories</h2>
	</header>
	
	<div id="wrapper">
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
	</div>
	
<?php
getFooter();
?>	