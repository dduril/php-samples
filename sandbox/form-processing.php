<?php
include "includes\library.php";
getHeader("PHP Examples| Form");
?>
	<header>
		<h1>PHP</h1>
		<h2>Form</h2>
	</header>
	
	<div id="wrapper">	
		<?php
		$errors = array();
		
		
		if (isset($_POST['submit'])) {
			echo "Form was submitted.<br />";
			echo "<br />";
		
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);	
			
			if(!isset($username) || $username === "") {
				$errors['Username'] = " can't be blank."; 
			}
			if(!isset($password) || $password === "") {
				$errors['Password'] = " can't be blank."; 
			}
		} else {
			$username = "";
			$password = "";
		}
		
		if(!empty($errors)){
			echo "<div class=\"error\">";
			echo "Please fix the following errors:";
			echo "<ul>";
			foreach ($errors as $key => $error) {
				echo "<li>{$key} {$error}</li>";
			}
			echo "</ul>";
			echo "</div>";
		}
		else{
			echo "Username: " . $username . "<br />";
			echo "Password: " . $password . "<br />";
		}
		
		echo "<pre>";
		print_r($errors);
		echo "</pre>";

		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		?>
	</div>
<?php
getFooter();
?>	