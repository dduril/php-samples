<?php
include "includes\library.php";
getHeader("PHP Examples| Dates and Times");
?>
	<header>
		<h1>PHP</h1>
		<h2>Dates and Times: Formatting</h2>
	</header>
	
	<div id="wrapper">	
		<?php 
		$timestamp = time();
		echo strftime("The date today is %m/%d/%y", $timestamp);
		echo "<br /><br />";
		
		function strip_zeros_from_date($marked_string=""){
			// remove the marked zeros
			$no_zeros = str_replace('*0', '', $marked_string);
			
			// remove any remaining marks
			$cleaned_string = str_replace('*', '', $no_zeros);
			
			return $cleaned_string;
		}
		
		echo strip_zeros_from_date(strftime("The date today is *%m/*%d/%y", $timestamp));
		echo "<br /><br />";
		
		echo "<hr />";
		
		$dt = time();
		$mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
		echo $mysql_datetime;
		?>	
	</div>
<?php
getFooter();
?>	

