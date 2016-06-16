<?php
include "..\includes\library.php";
getHeader("PHP Examples| Control Structures - Switch Statements", "Switch Statements", 2);
?>

		<?php 
		$a = 3;
		switch ($a) {
			case 0:
				echo "a equals 0<br />";
				break;
			case 1:
				echo "a equals 1<br />";
				break;
			case 2:
				echo "a equals 2<br />";
				break;
			case 3:
				echo "a equals 3<br />";
				break;
			default:
				echo "a is not 0, 1, 2, or 3<br />";
				break;
		}
		?>
		<br />
		<?php
		$month = 0;
		switch ($month) {
			case  0: $month_name = 'January'; 	break;
			case  1: $month_name = 'February'; 	break;
			case  2: $month_name = 'March'; 	break;
			case  3: $month_name = 'April'; 	break;
			case  4: $month_name = 'May'; 		break;
			case  5: $month_name = 'June'; 		break;
			case  6: $month_name = 'July'; 		break;
			case  7: $month_name = 'August'; 	break;
			case  8: $month_name = 'September'; break;
			case  9: $month_name = 'October'; 	break;
			case 10: $month_name = 'November'; 	break;
			case 11: $month_name = 'December';	break;
		}
		echo "{$month} = {$month_name}<br />";
		?>
		<br />
		<?php
		$user_type = 'customer';
		switch ($user_type) {
			case 'student':
				echo "Welcome!";
				break;
			case 'press':
			case 'customer':
				echo "Hello!";
				break;
		}

		?>

<?php
getFooter(2);
?>	