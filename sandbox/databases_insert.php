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
		
		// these would be form values in $_POST
		$menu_name = "Today's Widget Trivia";
		$position = (int) 4;
		$visible = (int) 1;
		
		// escape all strings
		$menu_name = mysqli_real_escape_string($connection, $menu_name);
		
		// perform database query
		$query = "INSERT INTO subjects (";
		$query .= " menu_name, position, visible";
		$query .= " ) VALUES (";
		$query .= " '{$menu_name}', {$position}, {$visible}";
		$query .= ")";
		
		$result = mysqli_query($connection, $query);
		
		// test if there was a query error
		if ($result) {
			// success
		} else {
			die("Database query failure." . mysqli_error($connection));
		}
		?>
	</div>
<?php
// close database connection
mysqli_close($connection);
getFooter();
?>	