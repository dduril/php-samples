<?php
include "..\includes\library.php";
getHeader("PHP Examples| Function Multiple Return Values", "Function Multiple Return Values", 2);
?>

		<?php
		function add_subtrack($val1, $val2) {
			$add = $val1 + $val2;
			$subtrack = $val1 - $val2;
			return array($add, $subtrack);
		}
		
		$result_array = add_subtrack(20, 10);
		echo "Add: " . $result_array[0] . "<br />";
		echo "Subtrack: " . $result_array[1] . "<br />";
		?>
		<br />
		
		<?php
		list($add_result, $subtrack_result) = add_subtrack(15, 7);
		echo "Add: " . $add_result . "<br />";
		echo "Subtrack: " . $subtrack_result . "<br />";
		?>

<?php
getFooter(2);
?>	