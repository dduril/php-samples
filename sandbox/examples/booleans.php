<?php
include "..\includes\library.php";
getHeader("PHP Examples| Booleans", "Booleans", 2);
?>
	
		<?php 
		$result1 = true;
		$result2 = false;
		?>	
		Result1: <?php echo $result1; ?><br />
		Result2: <?php echo $result2; ?><br />	
		Result2: <?php echo is_bool($result2); ?><br />
		
		<?php
		$number = 3.14;
		if(is_float($number)){
			echo "Float";
		}
		else{
			echo "Not a float";
		}
		?>

<?php
getFooter(2);
?>	