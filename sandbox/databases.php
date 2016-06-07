<?php	
include "includes\library.php";
getHeader("PHP Examples| Databases");

// create the database connection
$dbhost = "localhost";
$dbuser = "database_user";
$dbpass = "database_password";
$dbname = "database_name";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>
	<header>
		<h1>PHP</h1>
		<h2>Databases</h2>
	</header>
	
	<div id="wrapper">	
		<?php
		// test database connection
		if(mysqli_connect_errno()) {
			die("Database connection failed: " .
				mysqli_connect_error() . 
				" (" . mysqli_connect_errno() . ")<br />"
			);
		} else {
			echo "Database connection succeeded.<br />";
		}
			
		// perform database query
		$query = "SELECT *";
		$query .= " FROM subjects";
		$query .= " ORDER BY position ASC";
		$result = mysqli_query($connection, $query);
		
		echo "<br />" . $query . "<br />";
		
		// test if there was a query error
		if (!$result) {
			die("Database query failure.");
		}
		?>
		<ul>
		
		<?php
		// use returned data (if any)
		while($subject = mysqli_fetch_assoc($result)) {
		?>
		<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
		<?php 
		}
		?>
		</ul>
		<?php
		// release returned data
		mysqli_free_result($result);
		?>
	</div>
<?php
// close database connection
mysqli_close($connection);
getFooter();
?>	