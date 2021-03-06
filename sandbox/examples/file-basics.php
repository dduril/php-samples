<?php
include "..\includes\library.php";
getHeader("PHP Examples| File Basics", "File Basics", 2);
?>

		<?php
		echo __FILE__ . "<br />";
		echo __LINE__ . "<br />";

		echo dirname(__FILE__) . "<br />";
		echo __DIR__ . "<br />";	// only PHP 5.3

		echo file_exists(__FILE__) ? 'yes' : 'no';
		echo "<br />";
		echo file_exists(dirname(__FILE__) . "/basic.html") ? 'yes' : 'no';
		echo "<br /><br />";

		echo is_file(__FILE__) ? 'yes' : 'no';
		echo "<br />";
		echo is_file(dirname(__FILE__) . "/basic.html") ? 'yes' : 'no';
		echo "<br /><br />";

		echo is_dir(__FILE__) ? 'yes' : 'no';
		echo "<br />";
		echo is_dir(dirname(__FILE__) . "/basic.html") ? 'yes' : 'no';
		echo "<br /><br />";
		?>	
	
<?php
getFooter(2);
?>	